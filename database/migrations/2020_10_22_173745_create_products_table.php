<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_ID');
            $table->bigInteger('productType_ID');
            $table->string('product_number', 20)->unique();
            $table->bigInteger('vender?_ID');
            $table->string('product_name', 10);
            $table->string('product_detail', 2000);
            $table->string('product_unitPrice', 20);
            $table->bigInteger('product_inventoryQuantity');
            $table->boolean('product_status');
            $table->string('product_photoPath', 255);
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
}
