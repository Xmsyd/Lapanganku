<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;
    // Timestamps
    public $timestamps = false;
    protected $table = 'lapangan';
    protected $fillable = [
        'id',
        'nama_lap',
        'lokasi',
        'harga_perjam',
        'kategori_id',
    ];
}
