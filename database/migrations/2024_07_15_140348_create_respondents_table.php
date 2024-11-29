<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespondentsTable extends Migration
{
    public function up()
    {
        Schema::create('respondents', function (Blueprint $table) {
            $table->id();
            $table->string('sr_number')->nullable();
            $table->string('branch_code')->nullable();
            $table->string('branch_type_code')->nullable();
            $table->string('code_scenarios')->nullable();
            $table->string('city_codes')->nullable();
            $table->string('province_codes')->nullable();
            $table->decimal('section_1_branch_exterior')->nullable(); // Scores with precision (e.g., 99.99)
            $table->decimal('section_2_branch_internal', 5, 2)->nullable();
            $table->decimal('section_3_customer_services', 5, 2)->nullable();
            $table->decimal('section_4_product_knowledge', 5, 2)->nullable();
            $table->decimal('section_5_cash_counter_services', 5, 2)->nullable();
            $table->decimal('section_6_atm_services', 5, 2)->nullable();
            $table->decimal('overall', 5, 2)->nullable();
            $table->string('overall_performance')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('respondents');
    }
}
