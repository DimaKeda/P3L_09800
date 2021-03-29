<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "bahan";

    protected $fillable = [
        'nama', 'serving_size', 'remaining_stock', 'unit', 'id_menu', 'aktif'
    ];

    public function getMenuRelation() 
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id');
    }

}
