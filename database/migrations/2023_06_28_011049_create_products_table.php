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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_products')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('price')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('mau_sac')->nullable();
            $table->date('ngay_nhap')->nullable();
            $table->integer('status')->default(1);
            $table->integer('id_cate');
            $table->rememberToken();
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
        Schema::dropIfExists('products');
    }
};
