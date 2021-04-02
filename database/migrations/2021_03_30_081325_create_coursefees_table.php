<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursefeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursefees', function (Blueprint $table) {
            $table->id();
            $table->string('college_id');
            $table->string('course_id');
            $table->string('course_fees');
            $table->string('course_type');
            $table->string('course_duration');
            //$table->string('course_id');
            $table->timestamps();
        });
    }

    /**college_id' => 'required|max:255',
            'course_id' => 'required|max:255',
            'course_fees' => 'required|max:255',
            'course_type' => 'required|max:255',
            'course_duration' => 'required|max:255',
        ]);
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coursefees');
    }
}
