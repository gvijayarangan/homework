<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('symbol');
            $table->string('name');
            $table->integer('shares');
            $table->float('purchase_price');
            $table->date('purchased');
            $table->integer('customer_id')->unsigned();
            $table->timestamps();
        });

        }
        /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {Schema::drop('stocks');
    }
}
