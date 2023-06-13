<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function Modul(): BelongsToMany
    {
        return $this->belongsToMany(Modul::class, 'course__moduls', 'id_course', 'id_modul');
    }

    public function CourseCategory(): BelongsTo
    {
        return $this->belongsTo(CourseCategory::class, 'id_category');
    }

    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'enrollments', 'id_course', 'id_user');
    }

    public function UserPayment(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'payment_transactions', 'id_course', 'id_user');
    }
}
