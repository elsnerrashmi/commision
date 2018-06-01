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
            $table->enum('ReferenceType_ID', ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34'])->comment('0 = Unknown,1 = Husband,2 = Wife,3 = Daughter,4 = Sister,5 = Mother,6 = Mother-In-Law,7 = Daughter-In-Law,8 = Sister-In-Law,9 = Grandfather,10 = Granddaughter,11 = Uncle,12 = Nephew,13 = Friend,14 = Other,15 = Son,16 = Brother,17 = Father,18 = Father-In-Law,19 = Son-In-Law,20 =Brother-In-Law,21 = Grandmother,22 = Grandson,23 = Aunt,24 = Niece,25 = Cousin,26 = Parent,27 = Grandparent,28 = Grandchild,29 = Sibling,30 = Spouse,31 = In-Law,32 = Relative,33 = Child,34 = Co Worker');
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
