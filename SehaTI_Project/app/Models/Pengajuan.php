<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuans';
    protected $fillable = ['id','nik','namaLengkap','tempat','tanggal','jk','telp','alamat','ktp','kk', 'status'];

    public function approve()
    {
        return $this->hasOne(Approve::class);
    }
}
