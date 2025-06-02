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
        Schema::create('sendresults', function (Blueprint $table) {
            $table->id();
            $table->string("class");
            $table->string("term");
            $table->string("session");
            $table->string("test");
            $table->string("exam");
            $table->string("studentId");
            $table->string("subjectId");
            $table->string("aggregate");
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
        Schema::dropIfExists('sendresults');
    }
};
