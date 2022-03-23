<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table="buku";
    protected $primaryKey="kd_buku";
    protected $fillable=['Judul','Author', 'Sipnosis', 'Penerbit'];
}

