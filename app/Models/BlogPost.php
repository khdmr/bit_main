<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogPost extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    // public function Author(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    // }
}
