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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string("firstname");
            $table->string("lastname");
            $table->string("gender");
            $table->string("dateofbirth")->nullable();
            $table->string("religion");
            $table->string("Email");
            $table->string("classteacher")->nullable();
            $table->string("role");
            $table->string("address");
            $table->string("phone");
            $table->string("password");
            $table->string("username");
            $table->string("salary");
            $table->string("starting_date");
            $table->string("account_number");
            $table->string("account_name");
            $table->string("profileImage");
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
        Schema::dropIfExists('teachers');
    }
};
