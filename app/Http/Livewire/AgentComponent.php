<?php

namespace App\Http\Livewire;

use App\Models\Agent;
use Livewire\Component;
use App\Models\AgentCategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class AgentComponent extends Component
{
    use WithFileUploads;
    public $name, $address, $agentId, $agentCategoryId, $agentCategories, $email, $wa, $pict, $description, $phone;
    public $agent; // variabel agent singular

    public function mount()
    {
        $this->agentCategories = AgentCategory::all();

        $this->agent = Agent::where('user_id', Auth::id())->first();

        // Jika agent ada, populate input fields
        if ($this->agent) {
            $this->agentCategoryId = $this->agent->agentcategories_id;
            $this->name = $this->agent->name;
            $this->address = $this->agent->address;
            $this->email = $this->agent->email;
            $this->wa = $this->agent->wa;
            $this->agentId = $this->agent->id;
            $this->pict = $this->agent->pict;
            $this->phone = $this->agent->phone;
            $this->description = $this->agent->description;
        }
    }

    public function save()
    {
        // Validasi input
        $this->validate([
            'name' => 'required',
            'address' => 'required',
            'agentCategoryId' => 'required|exists:agent_categories,id',
            // 'pict' => 'image|max:2048', // validasi untuk upload gambar
        ]);

        $pictName = null;

        // Jika ada file pict yang diupload, simpan file tersebut dan ambil nama file-nya
        if ($this->pict instanceof \Illuminate\Http\UploadedFile) {
            $pictName = $this->pict->store('agents', 'public');
        } else {
            $pictName = $this->pict;
        }


        if ($this->agentId) {
            // Jika agentId ada, perbarui agent yang ada
            $this->agent = Agent::find($this->agentId);

            // Jika ada file pict yang diupload, gunakan nama file baru, jika tidak, gunakan nama file yang ada
            $pictName = $this->pict ? $pictName : $this->agent->pict;

            $this->agent->update([
                'agentcategories_id' => $this->agentCategoryId,
                'name' => $this->name,
                'address' => $this->address,
                'email' => $this->email,
                'phone' => $this->phone,
                'wa' => $this->wa,
                'pict' => $pictName,
                'description' => $this->description,
            ]);

            // Menampilkan pesan flash
            session()->flash('message', 'Agent updated successfully.');
        } else {

            // Jika tidak, buat agent baru
            $this->agent = Agent::create([
                'name' => $this->name,
                'address' => $this->address,
                'agentcategories_id' => $this->agentCategoryId,
                'user_id' => Auth::id(),
                'email' => $this->email,
                'phone' => $this->phone,
                'wa' => $this->wa,
                // 'pict' => $this->pict,
                'pict' => $pictName,
                'description' => $this->description,
            ]);

            // Menampilkan pesan flash
            session()->flash('message', 'Agent created successfully.');
        }

        // Reset pict untuk menghapus file yang diupload sebelumnya dari memori
        $this->pict = null;
    }

    public function render()
    {
        return view('livewire.agent-component');
    }
}
