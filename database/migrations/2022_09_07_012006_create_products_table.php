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
            $table->increments('product_id')->comment('รหัสสินค้า');
            $table->string('name')->comment('ชื่อสินค้า');
            $table->string('price')->comment('ราคา');
            $table->string('description')->comment('รายละเอียด');
            $table->string('category_id')->comment('ชื่อประเภทสินค้า');
            $table->string('image')->comment('รูปสินค้า');
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
