<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('certificates', function (Blueprint $table) {
          $table->increments('id');
          $table->string('folio')->unique();
          $table->string('firstname');
          $table->string('lastname');
          $table->integer('course_id')->unsigned();
          $table->timestamp('date_of_issue')->nullable();
          $table->timestamps();

          $table->foreign("course_id")->references("id")->on("courses");
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('certificates');

    }
}
