<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";
    protected $fillable = ['npm','nama','tempat_lahir','tanggal_lahir','created_at', 'updated_at'];

    protected $guard = [];
}
