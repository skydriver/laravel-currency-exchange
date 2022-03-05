<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_exchange_histories', function (Blueprint $table) {
            $table->id();
            $table->string('provider');
            $table->string('source_currency')->index('idx_source_currency');
            $table->string('target_currency');
            $table->double('exchange_rate');
            $table->integer('amount');
            // This also can be string in case of big difference in exnchange_rate
            $table->double('total');
            $table->dateTime('exchange_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency_exchange_histories');
    }
};
