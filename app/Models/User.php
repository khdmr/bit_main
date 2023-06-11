<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     // 'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     // 'email_verified_at' => 'datetime',
    //     'password' => 'hashed',
    // ];

    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function BlogPost(): HasMany
    {
        return $this->hasMany(BlogPost::class);
    }

    /**
     * The roles that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Course(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'enrollments', 'id_user', 'id_course');
    }

    /**
     * The roles that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Payment(): BelongsToMany
    {
        return $this->belongsToMany(payment::class, 'payment_transactions', 'id_user', 'id_payment');
    }

    /**
     * The roles that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function PaymentStatus(): BelongsToMany
    {
        return $this->belongsToMany(PaymentStatus::class, 'payment_transactions', 'id_user', 'id_payment_status');
    }

    /**
     * The CoursePayment that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function CoursePayment(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'payment_transactions', 'id_user', 'id_course');
    }
}
