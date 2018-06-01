<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('Inst_ID')->unsigned()->nullable();
            $table->integer('Deal_ID')->unsigned()->nullable();
            $table->integer('Acct_ID')->unsigned()->nullable();
            $table->integer('EnteredByDTUser_ID')->unsigned()->nullable();
            $table->string('EnteredByDTUserName');
            $table->enum('status', ['0', '1', '5', '6', '7', '8', '98', '99'])->comment('0=Prospect,1=Working,5=Contracted,6=Spot Delivered,7=Cancelled,8=Contracted/Booked,98=Transferred-Failed,99=Transferred');
            $table->string('StatusDesc');
            $table->dateTime('StatusDate');
            $table->dateTime('DateCreated');
            $table->integer('CreationMethod_ID')->unsigned()->nullable();
            $table->string('CreationMethodDesc');
            $table->dateTime('LastModified');
            $table->string('AssignedLocationName');
            $table->string('DesiredDealTypeDesc');
            $table->string('SalesPerson1Name');
            $table->string('SalesPerson2Name');
            $table->string('FIPersonName');
            $table->string('SalesManagerName');
            $table->string('SpecialComments');
            $table->string('DealDesc');
            $table->string('ReferralCode');
            $table->integer('AssignedLocation_ID')->unsigned()->nullable();
            $table->enum('DesiredDealType', ['F', 'I','C','D','O'])->comment('F=Finance Deal,I=In-House Finance Deal,C=Cash Deal,D=Wholesale,O=Outside Finance Deal');

            $table->integer('DesiredInventory_ID')->unsigned()->nullable();
            $table->string('DesiredYearModel');
            $table->string('DesiredMake');
            $table->string('DesiredModel');
            $table->integer('DesiredMileageMin');
            $table->integer('DesiredMileageMax');
            $table->string('DesiredColor');
            $table->string('DesiredPayment');
            $table->string('DesiredDownPayment');
            $table->string('PolicyNumber');

            $table->integer('InsCompany_ID')->unsigned()->nullable();
            $table->string('InsCompanyName');
            $table->string('InsCompanyDesc');
            $table->string('InsCompanyAdd1');
            $table->string('InsCompanyAdd2');
            $table->string('InsCompanyCity');
            $table->string('InsCompanyCounty');
            $table->string('InsCompanyState'); 
            $table->string('InsCompanyZip');
            $table->string('InsCompanyPhone1');
            $table->string('InsCompanyFax1');
          
            $table->integer('InsAgent_ID')->unsigned()->nullable();
            $table->string('InsAgentName');
            $table->string('InsAgentDesc');
            $table->string('InsAgentAdd1');
            $table->string('InsAgentAdd2');
            $table->string('InsAgentCity');
            $table->string('InsAgentCounty');
            $table->string('InsAgentState'); 
            $table->string('InsAgentZip');
            $table->string('InsAgentPhone1');
            $table->string('InsAgentFax1');

            $table->integer('ColDeductible');
            $table->integer('CompDeductible');
            $table->dateTime('EffDate');
            $table->dateTime('ExpDate');
            $table->integer('SalesPerson1_ID')->unsigned()->nullable();
            $table->integer('SalesPerson2_ID')->unsigned()->nullable();
            $table->integer('SalesPerson1Percentage');
            $table->integer('SalesPerson2Percentage');
            $table->integer('FIPerson_ID')->unsigned()->nullable();
            $table->enum('AppType', ['I','J'])->comment('I = Individual,J = Joint');
            $table->enum('DealType', ['F', 'I','C','D','O'])->comment('F=Finance Deal,I=In-House Finance Deal,C=Cash Deal,D=Wholesale,O=Outside Finance Deal');

            $table->string('HasTradeIn');
            $table->integer('Wholesaler_ID')->unsigned()->nullable();
            $table->string('WholesalerName');
            $table->string('Funded');
            $table->dateTime('FundedDate');
            $table->dateTime('FirstContactDate');
            $table->dateTime('FollowupDate');
            
            $table->integer('LeadReceiptMethod_ID')->unsigned()->nullable();
            $table->string('LeadReceiptMethodDesc');


            $table->string('ReferralTypeDesc');
            $table->string('ReferralName');
          
            $table->integer('CancelReason_ID')->unsigned()->nullable();
            $table->string('CancelReasonDesc');
            $table->string('ClosingProbability');
            
            $table->dateTime('LastMainDate');
            $table->integer('LastMain_ID')->unsigned()->nullable();
            $table->dateTime('LastNoteDate');
            $table->integer('LastNote_ID')->unsigned()->nullable();
            $table->dateTime('LastContactDate');
            $table->integer('LastContact_ID')->unsigned()->nullable();

            $table->string('DealTypeDesc');
            $table->string('AppTypeDesc');
        
            $table->integer('SalesManager_ID')->unsigned()->nullable();
            $table->integer('Applicant_MasterPerson_ID')->unsigned()->nullable();
            $table->string('Applicant_FName');
            $table->string('Applicant_LName');

            $table->integer('CoApplicant_MasterPerson_ID')->unsigned()->nullable();
            $table->string('CoApplicant_FName');
            $table->string('CoApplicant_LName');

            $table->integer('TradeIn1_Inventory_ID')->unsigned()->nullable();
            $table->integer('TradeIn2_Inventory_ID')->unsigned()->nullable();
            $table->string('TradeIn1_AssignedStockNumber');
            $table->string('TradeIn2_AssignedStockNumber');

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
        Schema::dropIfExists('deals');
    }
}
