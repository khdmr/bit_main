<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Modul extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    
    public function Course(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course__moduls', 'id_modul', 'id_course');
    }

    public function Material(): HasMany
    {
        return $this->hasMany(Material::class);
    }
}
