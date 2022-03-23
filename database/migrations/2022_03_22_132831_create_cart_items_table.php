<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dish_id')->nullable();
            // CHIAVE ESTERNA
            $table->foreign('dish_id')
                // DELLA COLONNA ID
                ->references('id')
                // DELLA TABELLA USERS
                ->on('dishes')->onDelete('cascade');
            $table->unsignedBigInteger('cart_id')->nullable();
            // CHIAVE ESTERNA
            $table->foreign('cart_id')
                // DELLA COLONNA ID
                ->references('id')
                // DELLA TABELLA USERS
                ->on('carts')->onDelete('set null');
            $table->smallInteger('quantity')->unsigned();
            $table->float('price_historic', 6, 2,);
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
        Schema::dropIfExists('cart_items');
    }
}
