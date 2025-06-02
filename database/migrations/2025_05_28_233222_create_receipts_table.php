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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string("parent_id");
            $table->string("child_id");
            $table->string("receipt_image");
            $table->string("payment_for");
            $table->string("term");
            $table->string("session");
            $table->string("class");
            $table->string("amount");
            $table->string("status");
            $table->string("description");           
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
        Schema::dropIfExists('receipts');
    }
};
