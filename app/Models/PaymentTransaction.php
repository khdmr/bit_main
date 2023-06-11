<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymentTransaction extends Model
{
    use HasFactory;

    protected $guarded = ['id',];
    /**
     * Get the user that owns the PaymentTransaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function payment(): BelongsTo
    {
        return $this->belongsTo(payment::class, 'id_payment');
    }

    public function Course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'id_course');
    }

    public function Status(): BelongsTo
    {
        return $this->belongsTo(PaymentStatus::class, 'id_payment_status');
    }

    
}
