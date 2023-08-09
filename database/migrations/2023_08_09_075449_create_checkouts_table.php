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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('user_address');
            $table->string('user_crdit_card');

            $table->integer('Fk_quan');
            $table->foreign('Fk_quan')->references('quantity')->on('orderes')->onDelete("cascade")->onUpdate("cascade");
            $table->integer('Fk_user');
            $table->foreign('Fk_user')->references('id')->on('user')->onDelete("cascade")->onUpdate("cascade");
            $table->integer('Fk_order');
            $table->foreign('Fk_order')->references('id')->on('orders')->onDelete("cascade")->onUpdate("cascade");


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
        Schema::dropIfExists('checkouts');
    }
};
