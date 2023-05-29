<?php

namespace App\Models;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriBerita extends Model
{

    use HasFactory;
    protected $table = 'kategori_beritas';
    protected $guarded = ['id'];

    public function beritas()
    {
        return $this->hasMany(Berita::class);
    }
    protected static function booted()
    {
        static::creating(function ($kategori_berita) {
            $kategori_berita->slug = Str::slug($kategori_berita->name);
        });

        static::updating(function ($kategori_berita) {
            $kategori_berita->slug = Str::slug($kategori_berita->name);
        });
    }
}
