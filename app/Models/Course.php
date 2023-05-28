<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function Modul(): BelongsToMany
    {
        return $this->belongsToMany(Modul::class, 'course__models', 'id_course', 'id_modul');
    }

    public function CourseCategory(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class, 'id_category');
    }
}
