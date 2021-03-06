<?php 
use Illuminate\Support\Facades\Schema;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Generated By PlantUML Command
class CreateVotes extends Migration{
	public function up(){ 
 		Schema::create('votes', function (Blueprint $table) { 
			$table->bigIncrements('code');
			$table->unsignedBigInteger('code_candidate');
			$table->foreign('code_candidate')->references('code')->on('candidates');
			$table->unsignedBigInteger('code_cabin');
			$table->foreign('code_cabin')->references('code')->on('cabins');
			$table->date('date');
			$table->timestamps();
		});
 	} 
	public function down(){
 
	} 
}