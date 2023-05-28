<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseCategory extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function Course(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
