<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            // CHIAVE ESTERNA
            $table->foreign('user_id')
                // DELLA COLONNA ID
                ->references('id')
                // DELLA TABELLA USERS
                ->on('users')->onDelete('cascade');
            
            $table->unsignedBigInteger('cart_id')->nullable();
            // CHIAVE ESTERNA
            $table->foreign('cart_id')
                // DELLA COLONNA ID
                ->references('id')
                // DELLA TABELLA USERS
                ->on('carts');
            
            $table->dateTime('date');
            $table->string('customer_email');
            $table->string('delivery_address');
            $table->string('payment_method');
            $table->float('total_amount', 7, 2);
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
        Schema::dropIfExists('orders');
    }
}
