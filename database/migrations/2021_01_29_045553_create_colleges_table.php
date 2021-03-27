<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('collegeName');
            $table->string('contact');
            $table->string('url');
            $table->string('name');
            $table->string('state');
            
           // $table->string('image');
            $table->string('location');
            $table->string('course_id');
            $table->string('email');
            $table->string('address');
            $table->string('facilites');
            $table->text('history');
            $table->text('mission');
            $table->text('highlight');
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
        Schema::dropIfExists('colleges');
    }
}
