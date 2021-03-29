<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';
    public $timestamps = false;

    protected $fillable = [
        'waktu_sesi', 'waktu_mulai', 'status', 'id_pegawai', 'nomor_meja', 'id_customer'
    ];

    public function getCustomerRelation()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id');
    }

}
