<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tehsil extends Model
{
    use HasFactory;


    protected $fillable = [
        'tehsil_id',
        'tehsil_name',
        'district_id',
        'district_name',
        'division_name',
        'division_id',
        'geom',
    ];

    protected $table = "public.tbl_tehsils_punjab";
}
