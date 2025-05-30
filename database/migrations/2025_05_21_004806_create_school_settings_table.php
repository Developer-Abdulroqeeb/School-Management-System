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
        Schema::create('school_settings', function (Blueprint $table) {
            $table->id();
            $table->string("SchoolName");
            $table->string("SchoolImage");
            $table->string("SchoolMotto");
            $table->string("SchoolLocation");
            $table->string("SchoolAbr");
            $table->string("SchoolPhone");
            $table->string("SchoolBox");
            $table->string("SchoolMail");
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
        Schema::dropIfExists('school_settings');
    }
};
