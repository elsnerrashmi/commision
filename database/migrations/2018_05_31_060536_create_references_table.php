<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('IsDirty', ['true', 'false']);
            $table->integer('Inst_ID')->unsigned()->nullable();
            $table->integer('PersonReference_ID')->unsigned()->nullable();
            $table->integer('Person_ID')->unsigned()->nullable();
            $table->integer('Reference_ID')->unsigned()->nullable();
            $table->integer('ReferenceType_ID')->unsigned()->nullable();
            $table->string('SSN');
            $table->string('Salutation');
            $table->string('LName');
            $table->string('FName');
            $table->string('MName');
            $table->string('Suffix');
            $table->string('Gender');
            $table->string('DlNumber');
            $table->string('DlState');
            $table->string('DlExpire');
            $table->dateTime('DOB');
            $table->string('Email');
            $table->string('OtherUID');
            $table->string('FullName');
            $table->string('ListingName');
            $table->string('ReferenceTypeDesc');
            $table->string('Add1');
            $table->string('Add2');
            $table->string('City');
            $table->string('County');
            $table->string('State');
            $table->string('Zip');
            $table->string('Country');
            $table->string('HPhone1');
            $table->string('HPhone2');
            $table->string('BPhone1');
            $table->string('BPhone2');
            $table->string('CPhone');
            $table->string('Pager');
            $table->string('OPhone');
            $table->string('Fax1');
            $table->string('Fax2');
            $table->string('BExtension1');
            $table->string('BExtension2');

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
        Schema::dropIfExists('references');
    }
}
