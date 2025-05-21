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
        Schema::create("student-information", function(Blueprint $table){
  $table->id();
  $table->string("FirstName");
  $table->string("LastName");
  $table->string("OtherName");
  $table->string("Gender");
  $table->string("DateOfBirth");
  $table->string("class")->nullable();
//   $table->string("AdmissionID")->nullable();
  $table->string("Phone")->nullable();
  $table->string("ShortBIO")->nullable();
  $table->string("religion");
  $table->string("blood")->nullable();
  $table->string("email");
  $table->string("address");
  $table->string("password");
  $table->string("username");
  $table->string("year_admitted");
  $table->string("housing_mode")->nullable();
  $table->string("hostel")->nullable();
  $table->string("transport")->nullable();
  $table->string("room_number")->nullable();
  $table->string("session");
  $table->string("term");
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
       Schema::dropIfExists('student-information');
    }
};
