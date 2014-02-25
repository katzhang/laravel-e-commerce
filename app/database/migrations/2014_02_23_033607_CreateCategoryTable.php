<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * 
	 */
	public function up()
	{
	    Schema::create("category", function($table)
	    {
	      $table->engine = "InnoDB";
	      
	      $table->increments("id");
	      $table->string("name");
	      // $table->dateTime("created_at");
	      // $table->dateTime("updated_at");
	      $table->timestamps();
	      $table->softDeletes();
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * 
	 */
	public function down()
	{
	  {
	    Schema::dropIfExists("category");
	  }

	}

}
