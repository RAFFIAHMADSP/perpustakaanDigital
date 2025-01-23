<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = 'peminjamans';
    protected $primaryKey = 'peminjaman_id';
    protected $fillable = ['buku_id', 'users_id', 'tanggal_peminjaman', 'tanggal_pengembalian'];
}
