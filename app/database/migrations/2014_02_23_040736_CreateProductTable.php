<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create("product", function($table)
	    {
	      $table->engine = "InnoDB";
	      
	      $table->increments("id");
	      $table->string("name");
	      $table->integer("stock");
	      $table->float("price");
	      $table->integer("category_id");
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
		    Schema::dropIfExists("product");
		  }
	}

}
