<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $table = 'transaksi';
    protected $timestamps = false;

    protected $fillable = [
        'id_pesanan', 'id_kasir', 'total_makanan', 'total_side', 'total_minuman', 'sub_total', 'nomor_kartu', 'kode_edc', 'lunas'
    ]; 
}
