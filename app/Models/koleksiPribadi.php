<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class koleksiPribadi extends Model
{
    protected $table = 'koleksi_pribadis';

    protected $primaryKey = 'koleksi_id';

    protected $fillable = ['buku_id', 'users_id'];
}
