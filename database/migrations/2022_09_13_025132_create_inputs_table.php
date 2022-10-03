<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('weather',5);
            $table->string('name',10);
            $table->string('First_class',10);
            $table->string('First_content',20);
            $table->string('First_impression',50);
            $table->string('Secound_class',10);
            $table->string('Secound_content',20);
            $table->string('Secound_impression',50);
            $table->string('Third_class',10);
            $table->string('Third_content',20);
            $table->string('Third_impression',50);
            $table->string('Total_impression',200);
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
        Schema::dropIfExists('inputs');
    }
}
