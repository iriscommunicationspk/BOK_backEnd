<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gender',
        'account_holder',
        'existing_customers',
        'widrawing_money',
        'deposit',
        'closing_acc',
        'transfering_fund',
        'loan_service',
        'credit_card',
        'city',

    ];
}
