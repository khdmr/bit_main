<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Material extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function Modul(): BelongsTo
    {
        return $this->belongsTo(Modul::class);
    }
}
