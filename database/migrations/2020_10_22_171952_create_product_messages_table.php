<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productMessages', function (Blueprint $table) {
            $table->bigIncrements('productMessage_ID');
            $table->bigInteger('product_ID');
            $table->bigInteger('message_ID');
            $table->bigInteger('commenter_ID');
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
        Schema::dropIfExists('productMessages');
    }
}
