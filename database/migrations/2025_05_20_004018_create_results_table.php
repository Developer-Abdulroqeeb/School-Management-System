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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string("class")->nullable();
            $table->string("subject")->nullable();
            $table->string("term")->nullable();
            $table->string("session")->nullable();
            $table->string("studentId")->nullable();
            $table->string("test")->nullable();
            $table->string("exam")->nullable();
            $table->string("aggregate")->nullable();
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
        Schema::dropIfExists('results');
    }
};
