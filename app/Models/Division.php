<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = [
        'geom',
        'div_name',
        'gid',
    ];

    protected $table = "public.tbl_divisions";
}
