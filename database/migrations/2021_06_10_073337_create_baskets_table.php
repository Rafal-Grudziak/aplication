<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('amount');
            $table->timestamps();
            
            $table->foreign('user_id')->references('Id')->on('users');
            $table->foreign('product_id')->references('Id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('baskets', function(Blueprint $table){
            $table->dropForeign('products_id_foreign');
            $table->dropForeign('users_id_foreign');
        });
            
        Schema::dropIfExists('baskets');
    }
}
