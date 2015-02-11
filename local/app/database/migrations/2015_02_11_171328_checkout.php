<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Checkout extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table("checkout", function($table) {

            $table->create();

            $table->increments("id");

            $table->string("name", 255);

            $table->text("phone");
            $table->text("address");
            $table->text("serial");

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
		Schema::drop("checkout");
	}

}
