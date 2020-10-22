<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseDetails', function (Blueprint $table) {
            $table->bigIncrements('purchaseDetail_ID');
            $table->bigInteger('purchase_ID');
            $table->bigInteger('product_ID');
            $table->bigInteger('purchaseDetail_quantity');
            $table->string('purchaseDetail_unitPrice', 20);
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
        Schema::dropIfExists('purchaseDetails');
    }
}
