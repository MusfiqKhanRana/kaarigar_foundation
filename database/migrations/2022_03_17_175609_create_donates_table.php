<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->string('donation_amount')->nullable();
            $table->text('f_name')->nullable();
            $table->text('l_name')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->longText('massage')->nullable();
            $table->string('b_tnumber')->nullable();
            $table->string('r_tnumber')->nullable();
            $table->string('n_tnumber')->nullable();
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
        Schema::dropIfExists('donates');
    }
}
