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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("email")->unique();
            $table->string("image")->nullable();
            $table->string("adress")->nullable();
            $table->integer("status")->default(1);
            $table->date("date_or_birth")->nullable();
            $table->softDeletes(); // add
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
        Schema::dropIfExists('student');
    }
};
