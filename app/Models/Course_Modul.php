<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_Modul extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_course',
        'id_modul',
    ];
    public $timestamps = false;
}
