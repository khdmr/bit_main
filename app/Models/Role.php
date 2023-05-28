<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;
    /**
     * Get all of the comments for the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function User(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
