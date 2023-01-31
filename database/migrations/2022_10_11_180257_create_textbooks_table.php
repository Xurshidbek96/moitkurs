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
        Schema::create('textbooks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('course_id')->nullable();
            $table->text('video_link')->nullable();
            $table->text('info')->nullable();
            $table->text('task')->nullable();
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
        Schema::dropIfExists('textbooks');
    }
};
