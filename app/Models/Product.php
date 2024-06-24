<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationItem extends Model
{
    use HasFactory;

    protected $table = 'donation_items';

    protected $fillable = [
        'nama',
        'lokasi_pengambilan',
        'tanggal_kadaluwarsa',
        'jumlah',
        'foto',
        'status',
    ];

    // Tambahkan metode atau properti tambahan sesuai kebutuhan, misalnya relasi
}