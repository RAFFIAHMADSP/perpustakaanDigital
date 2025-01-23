<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ulasanBuku extends Model
{
    protected $table = 'ulasan_bukus';
    protected $primaryKey = 'ulasan_id';
    protected $fillable = ['buku_id', 'users_id', 'ulasan', 'rating'];
}
