<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('counties', function(Blueprint $table) {
			$table->increments('id');
			$table->string('stateId', 300);
			$table->string('stateAb', 20);
    		$table->string('remoteTableId', 300);
    		$table->string('countyName', 200);
    		$table->string('countyNameConcat', 100);
    		$table->string('nestedMapColumnName', 50);
    		$table->string('active', 20);
    	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('counties');
	}

}
