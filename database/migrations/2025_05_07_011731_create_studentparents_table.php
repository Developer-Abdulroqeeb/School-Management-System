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
        Schema::create('studentparents', function (Blueprint $table) {
            $table->id();
            $table->string("Surname");
     
            $table->string("gender")->nullable();
            $table->string("occupation")->nullable();
            $table->string("religion")->nullable();
            $table->string("email");
            $table->string("address");
            $table->string("phone");
            $table->string("child_name");
            $table->string("child_class");
            $table->string("password");
            $table->string("username");
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
        Schema::dropIfExists('studentparents');
    }
};
