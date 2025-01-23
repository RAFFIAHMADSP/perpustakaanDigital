<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategoriBuku extends Model
{
    protected $table = 'kategori_bukus';
    protected $primaryKey = 'kategori_id';
    protected $fillable = ['nama_kategori'];

}
