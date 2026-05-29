<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // 1. PASTIKAN IMPORT INI ADA

// 2. TAMBAHKAN 'extends Model' DI SEBELAH NAMA CLASS
class Customer extends Model 
{
    use HasFactory;

    protected $fillable = [
        'kode_customer',
        'nama_customer',
        'email',
        'no_telp',
        'alamat',
    ];
}