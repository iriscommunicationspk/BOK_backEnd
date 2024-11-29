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
        'sr_number',
        'branch_code',
        'branch_type_code',
        'code_scenarios',
        'city_codes',
        'province_codes',
        'section_1_branch_exterior',
        'section_2_branch_internal',
        'section_3_customer_services',
        'section_4_product_knowledge',
        'section_5_cash_counter_services',
        'section_6_atm_services',
        'overall',
        'overall_performance',
    ];
}
