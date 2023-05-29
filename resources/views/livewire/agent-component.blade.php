<div class="w-1/3">
    <!-- Form untuk create dan update -->
    <form wire:submit.prevent="save" class="mt-2 flex flex-col gap-4">

        <div class="flex flex-col">
            <label for="name" class="text-lg">{{ __('Nama') }}</label>
            <input type="text" wire:model="name" placeholder="Name" class="border border-gray-300 px-4 py-2 rounded-md">
        </div>
        <div class="flex flex-col">
            <label for="name" class="text-lg">{{ __('Email') }}</label>
            <input type="text" wire:model="email" placeholder="Email"
                class="border border-gray-300 px-4 py-2 rounded-md">
        </div>
        <div class="flex flex-col">
            <label for="name" class="text-lg">{{ __('HP') }}</label>
            <input type="text" wire:model="phone" placeholder="Phone"
                class="border border-gray-300 px-4 py-2 rounded-md">
        </div>
        <div class="flex flex-col">
            <label for="name" class="text-lg">{{ __('Whatsapp') }}</label>
            <input type="text" wire:model="wa" placeholder="Whatsapp"
                class="border border-gray-300 px-4 py-2 rounded-md">
        </div>
        <div class="flex flex-col">
            <label for="name" class="text-lg">{{ __('Alamat') }}</label>
            <input type="text" wire:model="address" placeholder="Address"
                class="border border-gray-300 px-4 py-2 rounded-md">
        </div>
        <div class="flex flex-col">
            <label for="name" class="text-lg">{{ __('Jenis Keagenan') }}</label>
            <select wire:model="agentCategoryId" class="border border-gray-300 px-4 py-2 rounded-md">
                <option value="">-- choose category --</option>
                @foreach ($agentCategories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col items-center">
            @isset($agent)
                @if (!is_null($agent->pict))
                    <img src="{{ asset('storage/' . $agent->pict) }}" alt="" class="rounded-full w-9 h-9"
                        style="width:80px; height:80px;">
                @endif
            @endisset
            <input type="file" wire:model="pict" class="border border-gray-300 px-4 py-2 rounded-md mt-2">
        </div>

        <textarea type="text" wire:model="description" placeholder="Description" rows="5"
            class="border border-gray-300 px-4 py-2 rounded-md "></textarea>
        <div style="display:flex; justify-content:center">
            <button type="submit"
                style="width:6rem; height:2.2rem; background-color: rgb(36, 36, 36); color: white; padding: 0 1rem; border-radius: 8px; transition: background-color 0.2s;"
                onmouseover="this.style.backgroundColor='gray';" onmouseout="this.style.backgroundColor='blue';">
                SAVE
            </button>
        </div>
    </form>
    {{-- <div class="">
        <img src="{{ asset('storage/' . $agent->pict) }}" alt="">
        <h1>Foto</h1>
    </div> --}}

    @error('name')
        <span class="error">{{ $message }}</span>
    @enderror
    @error('address')
        <span class="error">{{ $message }}</span>
    @enderror
    @error('agentCategoryId')
        <span class="error">{{ $message }}</span>
    @enderror
    @error('pict')
        <span class="error">{{ $message }}</span>
    @enderror

    <!-- Menampilkan pesan flash -->
    @if (isset($flash['message']))
        <div class="alert alert-success">
            {{ $flash['message'] }}
        </div>
    @endif

</div>
