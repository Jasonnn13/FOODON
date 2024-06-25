<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;

    protected $table = 'penerima';

    protected $fillable = [
        'username',
        'nama_lengkap',
        'umur',
        'sktm_foto',
        'alamat',
        'foto_profil',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
