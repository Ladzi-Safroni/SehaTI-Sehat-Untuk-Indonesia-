<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function is_admin()
    {
        return $this->name = 'admin' ? true : false;
    }
}
