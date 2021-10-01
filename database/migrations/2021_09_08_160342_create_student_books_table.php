<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_books', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->unsignedBigInteger('grade_id')->index('student_book_grade_idx');
            $table->unsignedBigInteger('subject_id')->index('student_book_subject_idx');
            $table->foreign('grade_id', 'student_book_grade_fk')->on('grades')->references('id');
            $table->foreign('subject_id', 'student_book_subject_fk')->on('subjects')->references('id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_books');
    }
}
