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
        Schema::create('product', function (Blueprint $table) {
            //
            $table->id();
            $table->string('name');
            $table->text('image')->nullable();
            $table->integer('price')->nullable();
            $table->double('kcal', 4)->default(0);
            $table->foreignId('convenience_id')->comment('コンビニID');
            $table->timestamps();
            //$table->foreign('shop_id')->references('id')->on('items')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            //
        });
    }
};
