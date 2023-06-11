<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class payment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [
        'id',
    ];

    /**
     * The roles that belong to the payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'payment_transactions', 'id_payment', 'id_user');
    }
    
}
