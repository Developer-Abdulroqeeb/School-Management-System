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
        Schema::create('schoolfees', function (Blueprint $table) {
            $table->id();
            $table->string("amount");
            $table->string("class");
            $table->string("session");
            $table->string("term");
            $table->string("account_number");
            $table->string("account_name");
            $table->string("package_type");
            // $table->string();
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
        Schema::dropIfExists('schoolfees');
    }
};
