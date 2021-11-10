<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approve extends Model
{
    use HasFactory;
    protected $table = 'approves';
    protected $fillable = ['id','pengajuan_id'];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }
}
