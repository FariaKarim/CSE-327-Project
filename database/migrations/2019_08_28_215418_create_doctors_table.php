<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doctorName');
            $table->string('doctorEmail');
            $table->text('chamAdd');
            $table->text('hospAdd');
            $table->bigInteger('contact');
            $table->string('specialized');
            $table->text('qualification');
            $table->string('gender');
            $table->integer('age');
            $table->string('bloodGroup');
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
