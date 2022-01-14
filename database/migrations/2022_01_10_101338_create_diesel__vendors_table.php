<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDieselVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diesel__vendors', function (Blueprint $table) {
            $table->id();
            $table->string('diesel_vendor_name');
            $table->string('vendor_code');
            $table->string('vendor_phone_1');
            $table->string('vendor_phone_2');
            $table->string('vendor_email_id');
            $table->unsignedBigInteger('created_by')->default(0);
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
        Schema::dropIfExists('diesel__vendors');
    }
}
