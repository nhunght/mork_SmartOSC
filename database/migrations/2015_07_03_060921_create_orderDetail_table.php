<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_detail', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('product_id')->references('id')->on('product');
			$table->integer('order_id')->references('id')->on('order');
			$table->integer('qty');
			$table->integer('price');
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
		Schema::drop('order_detail');
	}

}
