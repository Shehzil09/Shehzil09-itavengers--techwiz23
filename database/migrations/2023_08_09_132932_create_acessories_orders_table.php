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
        Schema::create('acessories_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('Fk_acessories');
            $table->foreign('Fk_acessories')->references('id')->on('acessories')->onDelete("cascade")->onUpdate("cascade");
            $table->integer('Fk_user');
            $table->foreign('Fk_user')->references('id')->on('user')->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('acessories_orders');
    }
};
