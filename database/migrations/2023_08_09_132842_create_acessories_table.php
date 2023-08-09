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
        Schema::create('acessories', function (Blueprint $table) {
            $table->id();
            $table->string('acessories_name');
            $table->double('acessories_price');
            $table->double('acessories_img');
            $table->string('acessories_description');
            $table->string('featured');
            $table->integer('Fk_category');
            $table->foreign('Fk_category')->references('id')->on('category')->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('acessories');
    }
};
