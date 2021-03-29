<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    use HasFactory;

    protected $timestamps = false;
    public $table = 'kartu';

    protected $primaryKey = 'id';

    public $incrementing = false;
    
    protected $fillable = [
        'nomor_kartu', 'tipe_kartu', 'nama_pemilik', 'expired'
    ];


}
