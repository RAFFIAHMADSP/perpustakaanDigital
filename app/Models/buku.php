<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'bukus';
    protected $primaryKey = 'buku_id';
    protected $fillable = ['judul', 'pengarang', 'penerbit', 'tahun_terbit'];
    public $timestamps = false;

   
}
