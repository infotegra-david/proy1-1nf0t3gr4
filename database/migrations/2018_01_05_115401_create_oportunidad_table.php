<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOportunidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oportunidad', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 100);
			$table->dateTime('cierre_postulacion')->nullable();
			$table->text('descripcion', 65535)->nullable();
			$table->string('sitio_web', 191)->nullable();
			$table->boolean('nativo')->nullable();
			$table->integer('campus_id')->unsigned()->index('fk_oportunidad_campus1_idx');
			$table->integer('estado_id')->nullable()->default(1);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oportunidad');
	}

}
