<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SubcriptionPlan extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['name', 'price', 'active_period_in_months', 'features'];
}
