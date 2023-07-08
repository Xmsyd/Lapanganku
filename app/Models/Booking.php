<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    // timestamp
    public $timestamps = false;
    protected $fillable = [
        'id', 
        'pemesan_id', 
        'lapangan_id', 
        'tanggal', 
        'jam_mulai', 
        'jam_akhir',
        'durasi'
    ];
}
