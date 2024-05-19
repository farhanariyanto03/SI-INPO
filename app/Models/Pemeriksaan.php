<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'pemeriksaans';
    protected $fillable = ["NIK", "bb", "tb", "tekanan_darah", "hasil_pemeriksaan", "kolestrol", "hasil_pemeriksaan1", "gula_darah", "hasil_pemeriksaan2", "tggl_pemeriksaan"];
}
