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
            $table->string('gender');
            $table->string('account_holder');
            $table->string('existing_customers');
            $table->string('widrawing_money');
            $table->string('deposit');
            $table->string('closing_acc');
            $table->string('transfering_fund');
            $table->string('loan_service');
            $table->string('credit_card');
            $table->string('city');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('respondents');
    }
}
