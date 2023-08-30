<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class userSubcription extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['user_id', 'subcription_plan_id', 'price', 'expired_date', 'payment_status', 'snapToken'];

    public function subscriptionPlan(): BelongsTo
    {
        return $this->belongsTo(SubscriptionPlan::class);
    }
}