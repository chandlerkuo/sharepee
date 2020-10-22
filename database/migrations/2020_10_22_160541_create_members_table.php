<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('member_ID');
            $table->string('member_number', 20)->unique();
            $table->string('member_name', 255);
            $table->string('member_bigHeadPhotoPath', 255)->nullable();
            $table->boolean('member_sexuality');
            $table->string('member_password', 50);
            $table->string('member_mail', 100)->unique();
            $table->bigInteger('member_phoneAreaCode');
            $table->bigInteger('member_phoneNumber');
            $table->date('member_birthday');
            $table->bigInteger('member_postalCode');
            $table->string('member_country', 20);
            $table->string('member_city', 20);
            $table->string('member_district', 20);
            $table->string('member_address', 100);
            $table->boolean('member_status');
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
        Schema::dropIfExists('members');
    }
}
