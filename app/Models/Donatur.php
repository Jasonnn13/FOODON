<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;

    protected $table = 'donatur';

    protected $fillable = [
        'nama_perusahaan',
        'siup_foto',
        'alamat_perusahaan',
        'lokasi_foto',
        'deskripsi',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
