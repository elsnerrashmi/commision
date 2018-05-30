<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('dealid')->references('id')->on('deals');
            $table->integer('DealBorrower_ID')->unsigned()->nullable();
            $table->integer('Inst_ID')->unsigned()->nullable();
            $table->integer('Deal_ID')->unsigned()->nullable();
            $table->integer('DealPerson_ID')->unsigned()->nullable();
            $table->integer('BorType_ID')->unsigned()->nullable();
            $table->integer('OrderNumber');
            $table->integer('RefType_ID')->unsigned()->nullable();
            $table->string('BuyerType');
            $table->enum('Active', ['true', 'false']);
            $table->string('SSN');
            $table->string('Salutation');
            $table->string('LName');
            $table->string('FName');
            $table->string('MName');
            $table->string('Suffix');
            $table->string('Gender');
            $table->enum('ResType', ['O', 'P','R','L'])->comment('O=Own Mortgage,P=Own No Mortgage,R=Rent,L=Living with Other');
            $table->dateTime('ResDate');
             $table->string('ResValue');
            $table->string('ResPayment');
            $table->string('ResLienHolder');
            $table->string('ResLienHolderAdd1');
            $table->string('ResLienHolderAdd2');
            $table->string('ResLienHolderCity');
            $table->string('ResLienHolderState');
            $table->string('ResLienHolderZip');
            $table->string('ResLienHolderPhone');
            $table->string('Add1');
            $table->string('Add2');
            $table->string('Add2');
            $table->string('City');
            $table->string('County');
            $table->string('State');
            $table->string('Zip');
            $table->string('Country');
            $table->string('HPhone1');
            $table->string('HPhone2');
            $table->string('BPhone1');
            $table->string('BPhone1');
            $table->string('BPhone2');
            $table->string('CPhone');
            $table->string('Pager');
            
            $table->string('Email');
            $table->string('PrevResType');
            $table->dateTime('PrevResDate');
            $table->string('PrevAdd1');
            $table->string('PrevAdd2');
            $table->string('PrevCity');
            $table->string('PrevCounty');
            $table->string('PrevState');
            $table->string('PrevZip');
            $table->string('PrevCountry');
            $table->string('DlNumber');
            $table->string('DlState');
            $table->dateTime('DlExpire');
            $table->dateTime('DOB');
            $table->string('Employer');
            $table->dateTime('EmployerDate');
            $table->string('EmployerIncome');
            $table->string('PrevEmployer');
            $table->string('PrevEmployerDate');
            $table->string('PrevEmployerIncome');
                
            $table->string('OthInc1');
            $table->string('OthIncSrc1');
            $table->string('OthInc2');
            $table->string('OthIncSrc2');
            $table->string('OthInc3');
            $table->string('OthIncSrc3');
            $table->string('DebtPay1');
            $table->string('DebtBal1');
            $table->string('DebtSrc1');
            $table->string('DebtPay2');
            $table->string('DebtBal2');
            $table->string('DebtSrc2');
            $table->string('DebtPay3');
            $table->string('DebtBal3');
            $table->string('DebtSrc3');
            $table->string('DebtType1');
            $table->string('DebtType2');
            $table->string('DebtType3');
            $table->string('Notes');
            
            $table->dateTime('AddDate');
            $table->dateTime('LastModified');
            $table->string('Password');
            $table->string('KeyQuestion');
            $table->string('KeyAnswer');
            $table->string('MotherMaidenName');
            $table->string('MaritalStatus');
            $table->enum('Guarantor', ['true', 'false']);
            $table->string('GuarantorFor');
            $table->string('GuarantorTo');
            $table->enum('Judgements', ['true', 'false']);
            $table->string('JudgementAmt');
            $table->string('JudgementTo');
            $table->enum('PriorBankruptcy', ['true', 'false']);
            $table->enum('BkrptDeclared', ['true', 'false']);
            $table->string('BkrptYear');
            $table->enum('BkrptFiling', ['true', 'false']);
            $table->enum('BkrptAttorney', ['true', 'false']);
            $table->enum('AppSigned', ['true', 'false']);
            $table->string('CheckingAcctNumber');
            $table->string('BkrptYear');
            $table->string('CheckingInst');
            $table->string('SavingsAcctNumber');
            $table->string('SavingsInst');
            $table->enum('PrevReceivedCredit', ['true', 'false']);
            $table->string('AppSignature');
            $table->dateTime('AppSignatureDate');
            $table->string('LastAppSignature');
            $table->dateTime('LastAppSignatureDate');
            $table->string('EmployerAdd1');
            $table->string('EmployerAdd2');
            $table->string('EmployerCity');
            $table->string('EmployerState');
            $table->string('EmployerCounty');
            $table->string('EmployerZip');
            $table->string('PrevEmployerAdd1');
            $table->string('PrevEmployerAdd2');
            $table->string('PrevEmployerCity');
            $table->string('PrevEmployerState');
            $table->string('PrevEmployerCounty');
            $table->string('PrevEmployerCountry');
            $table->string('PrevEmployerZip');
            $table->string('EmployerPosition');
            $table->string('PrevEmployerPosition');
            $table->enum('IncomeReduction', ['true', 'false']);
            
            $table->string('OthIncAgreement1');
            $table->string('OthIncAgreement2');
            $table->string('OthIncAgreement3');
            $table->string('OthIncType1');
            $table->string('OthIncType2');
            $table->string('OthIncType3');
            $table->integer('NumDependents');
            $table->string('DependentAges');
            $table->string('CheckingBalance');
            $table->string('SavingsBalance');
            $table->string('CompanyName');
            $table->string('WSGDN');
            $table->enum('RecordType', ['P','C'])->comment('I = Person,J = Company');
            $table->integer('MasterPerson_ID')->unsigned()->nullable();
            $table->enum('MasterUpdated', ['true', 'false']);
            $table->dateTime('CreatedBy');
            $table->integer('BExtension1');
            $table->integer('BExtension2');
            $table->integer('TimeAtAddress_Years');
            $table->integer('TimeAtAddress_Months');
            $table->integer('TimeAtEmployment_Years');
            $table->integer('TimeAtEmployment_Months');
            $table->integer('PrevTimeAtEmployment_Years');
            $table->integer('PrevTimeAtEmployment_Months');
            $table->string('RedFlag_Status');
            $table->dateTime('RedFlag_StatusDate');
            $table->dateTime('RedFlag_SubmitDate');
            $table->string('RedFlag_Compliant');
            $table->string('RedFlag_NonCompliant');
            $table->string('RedFlag_NotResolved');
            $table->string('RedFlag_NotApplicable');
            $table->string('RedFlag_Score');
            $table->string('RedFlag_Compliant');
            $table->enum('PriorRepo', ['true', 'false']);
            $table->dateTime('PriorRepoDate');
            $table->string('PriorRepoReason');
            $table->string('BkrptType');
            $table->string('BkrptReason');
            $table->dateTime('BkrptDischargeDate');
            $table->enum('IsBusiness', ['true', 'false']);
            $table->string('BusinessName');
            $table->string('BusinessDBA');
            $table->integer('BusinessFedId');
            $table->integer('AlternateIdTypeId');
            $table->string('AlternateIdState');
            $table->string('AlternateIdCountry');
            $table->string('EmployerIncomeFrequency');
            $table->string('PrevResLienHolder');
            $table->string('AlternateIdNumber');
            $table->string('PrevEmployerIncomeFrequency');
            $table->string('PrevResLienHolderPhone');
            $table->enum('EmploymentType', ['F', 'H','P','R','S'])->comment('F = Person,H = Company,');
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
        Schema::dropIfExists('applicants');
    }
}
