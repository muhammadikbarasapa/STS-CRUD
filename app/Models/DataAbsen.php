<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAbsen extends Model
{
    use HasFactory;

    protected $table = "data_absens";

    protected $fillable = [
        'user_id',
        'nama_pemain',
        'tanggal_pertandingan',
        'waktu_absen',
        'status_kehadiran'
    ];
    
    protected $casts = [
        'status_kehadiran' => 'array'
    ];
}
