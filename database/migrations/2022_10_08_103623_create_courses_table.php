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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('info')->nullable();
            $table->string('title')->nullable();
            $table->text('about')->nullable();
            $table->string('lenth')->nullable();
            $table->string('language')->nullable();
            $table->string('deegre')->nullable();
            $table->string('duration')->nullable();
            $table->bigInteger('members')->nullable()->default(0);
            $table->integer('status')->nullable()->default(0);
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
        Schema::dropIfExists('courses');
    }
};
