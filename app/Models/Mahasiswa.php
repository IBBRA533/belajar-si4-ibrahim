<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'npm',
        'nama_mahasiswa',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
    ];
    protected $table = 'mahasiswas';
}
