<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Databbase\Eloquent\SoftDeleted;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'camp_id', 'card_number', 'expired', 'cvc', 'is_paid'];
}
