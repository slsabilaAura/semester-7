<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';  // Nama tabel di database
    protected $primaryKey = 'nim';   // Primary key
    public $incrementing = false;    // Jika primary key bukan auto-increment
    protected $keyType = 'string';   // Tipe primary key (VARCHAR)

    protected $fillable = ['nim', 'nama', 'alamat'];

    public function perkuliahan()
    {
        return $this->hasMany(Perkuliahan::class, 'nim');
    }
}

