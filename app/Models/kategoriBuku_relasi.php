<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategoriBuku_relasi extends Model
{
    protected $table = 'kategori_buku_relasis';
    protected $primaryKey = 'relasi-id';
    protected $fillable = ['buku_id', 'kategori_id'];
}
