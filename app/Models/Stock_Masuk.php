<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock_Masuk extends Model
{
    use HasFactory;

    public $table = 'stock_masuk';

    protected $fillable = [
        'tanggal_masuk', 'kuantiti', 'harga_beli', 'id_bahan'
    ]; 
}
