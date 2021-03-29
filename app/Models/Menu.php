<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'menu';

    protected $fillable = [
        'nama', 'description','harga', 'tipe', 'gambar', 'unit', 'aktif'
    ];

    public function getBahanRelation()
    {
        return $this->hasMany(Bahan::class, 'id_menu', 'id');
    }
}
