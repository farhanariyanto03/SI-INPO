<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_lansia extends Model
{
    use HasFactory;
    protected $table = "data_lansias";
    protected $fillable = ['NIK', 'nama', 'jenis_kelamin', 'alamat', 'no_hp'];
}
