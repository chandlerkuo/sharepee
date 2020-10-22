<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReplyMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replyMessages', function (Blueprint $table) {
            $table->bigIncrements('replyMessage_ID');
            $table->bigInteger('product_ID');
            $table->bigInteger('message_ID');
            $table->bigInteger('vender_ID');
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
        Schema::dropIfExists('replyMessages');
    }
}
