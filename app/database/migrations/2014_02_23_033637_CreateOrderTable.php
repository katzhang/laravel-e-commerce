<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create("order", function($table)
	    {
	      $table->engine = "InnoDB";
	      
	      $table->increments("id");
	      $table->integer("account_id");
	      $table->timestamps();
	      $table->softDeletes();
	      // $table->dateTime("deleted_at");
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	  {
	    Schema::dropIfExists("order");
	  }
	}

}
