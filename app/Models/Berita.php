<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\KategoriBerita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    protected $dates = ['created_at', 'updated_at'];

    protected $table = 'beritas';
    protected $guarded = ['id'];

    public function kategori_berita()
    {
        return $this->belongsTo(KategoriBerita::class);
    }
    protected static function booted()
    {
        static::creating(function ($berita) {
            $berita->slug = Str::slug($berita->judul);
        });

        static::updating(function ($berita) {
            $berita->slug = Str::slug($berita->judul);
        });
    }
}
