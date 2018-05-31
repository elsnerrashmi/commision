<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Inst_ID')->unsigned()->nullable();
            $table->integer('Record_ID')->unsigned()->nullable();
            $table->integer('Flag_ID')->unsigned()->nullable();
            $table->string('FlagName')->nullable();
            $table->string('FlagDesc');
            $table->string('FlagModule');
            $table->string('FlagModuleDesc');
            $table->enum('Selected', ['true', 'false']);
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
        Schema::dropIfExists('flags');
    }
}
