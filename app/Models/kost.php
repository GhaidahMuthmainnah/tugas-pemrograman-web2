<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable('nama_kost', 'pemilik', 'alamat', 'harga_per_bulan', 'jumlah_kamar', 'status')]
class kost extends Model
{
    /** @use HasFactory<\Database\Factories\KostFactory> */
    use HasFactory;
}
