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
            $table->integer('DealBorrower_ID')->unsigned()->nullable();
            $table->integer('Inst_ID')->unsigned()->nullable();
            $table->integer('Deal_ID')->unsigned()->nullable();
            $table->integer('DealPerson_ID')->unsigned()->nullable();
            $table->integer('BorType_ID')->unsigned()->nullable();
            $table->string('OrderNumber');
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
            $table->enum('ResType', ['O', 'P', 'R', 'L'])->comment('O=Own Mortgage,P=Own No Mortgage,R=Rent,L=Living with Other');
            $table->dateTime('ResDate');
            $table->text('ResValue');
            $table->text('ResPayment');
            $table->text('ResLienHolder');
            $table->text('ResLienHolderAdd1');
            $table->text('ResLienHolderAdd2');
            $table->text('ResLienHolderCity');
            $table->text('ResLienHolderState');
            $table->text('ResLienHolderZip');
            $table->text('ResLienHolderPhone');
            $table->text('Add1');
            $table->text('Add2');
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
            $table->string('Email');
            $table->string('PrevResType');
            $table->dateTime('PrevResDate');
            $table->text('PrevAdd1');
            $table->text('PrevAdd2');
            $table->text('PrevCity');
            $table->text('PrevCounty');
            $table->text('PrevState');
            $table->text('PrevZip');
            $table->text('PrevCountry');
            $table->string('DlNumber');
            $table->string('DlState');
            $table->text('DlExpire');
            $table->dateTime('DOB');
            $table->text('Employer');
            $table->dateTime('EmployerDate');
            $table->text('EmployerIncome');
            $table->text('PrevEmployer');
            $table->text('PrevEmployerDate');
            $table->text('PrevEmployerIncome');
            $table->text('OthInc1');
            $table->text('OthIncSrc1');
            $table->text('OthInc2');
            $table->text('OthIncSrc2');
            $table->text('OthInc3');
            $table->text('OthIncSrc3');
            $table->text('DebtPay1');
            $table->text('DebtBal1');
            $table->text('DebtSrc1');
            $table->text('DebtPay2');
            $table->text('DebtBal2');
            $table->text('DebtSrc2');
            $table->text('DebtPay3');
            $table->text('DebtBal3');
            $table->text('DebtSrc3');
            $table->text('DebtType1');
            $table->text('DebtType2');
            $table->text('DebtType3');
            $table->text('Notes');
            $table->dateTime('AddDate');
            $table->dateTime('LastModified');
            $table->text('Password');
            $table->text('KeyQuestion');
            $table->text('KeyAnswer');
            $table->text('MotherMaidenName');
            $table->text('MaritalStatus');
            $table->enum('Guarantor', ['true', 'false']);
            $table->text('GuarantorFor');
            $table->text('GuarantorTo');
            $table->enum('Judgements', ['true', 'false']);
            $table->text('JudgementAmt');
            $table->text('JudgementTo');
            $table->enum('PriorBankruptcy', ['true', 'false']);
            $table->enum('BkrptDeclared', ['true', 'false']);
            $table->text('BkrptYear');
            $table->enum('BkrptFiling', ['true', 'false']);
            $table->enum('BkrptAttorney', ['true', 'false']);
            $table->enum('AppSigned', ['true', 'false']);
            $table->text('CheckingAcctNumber');
            $table->text('CheckingInst');
            $table->text('SavingsAcctNumber');
            $table->text('SavingsInst');
            $table->enum('PrevReceivedCredit', ['true', 'false']);
            $table->text('AppSignature');
            $table->dateTime('AppSignatureDate');
            $table->text('LastAppSignature');
            $table->dateTime('LastAppSignatureDate');
            $table->text('EmployerAdd1');
            $table->text('EmployerAdd2');
            $table->text('EmployerCity');
            $table->text('EmployerState');
            $table->text('EmployerCounty');
            $table->text('EmployerZip');
            $table->text('PrevEmployerAdd1');
            $table->text('PrevEmployerAdd2');
            $table->text('PrevEmployerCity');
            $table->text('PrevEmployerState');
            $table->text('PrevEmployerCounty');
            $table->text('PrevEmployerCountry');
            $table->text('PrevEmployerZip');
            $table->text('EmployerPosition');
            $table->text('PrevEmployerPosition');
            $table->enum('IncomeReduction', ['true', 'false']);
            $table->text('OthIncAgreement1');
            $table->text('OthIncAgreement2');
            $table->text('OthIncAgreement3');
            $table->text('OthIncType1');
            $table->text('OthIncType2');
            $table->text('OthIncType3');
            $table->integer('NumDependents');
            $table->text('DependentAges');
            $table->text('CheckingBalance');
            $table->text('SavingsBalance');
            $table->text('CompanyName');
            $table->text('WSGDN');
            $table->enum('RecordType', ['P', 'C'])->comment('I = Person,J = Company');
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
            $table->integer('PrevResPayment');
            $table->integer('AssetType1');
            $table->integer('AssetType2');
            $table->integer('AssetType3');
            $table->text('AssetDesc1');
            $table->text('AssetDesc2');
            $table->text('AssetDesc3');
            $table->text('AssetValue1');
            $table->text('AssetValue2');
            $table->text('AssetValue3');
            $table->text('MilesFromLot');
            $table->enum('MaritalStatusType_ID', ['1', '2', '3'])->comment('1 = Unmarried,2 = Married,3 = Separated');
            $table->string('EmployerEmail');
            $table->string('PrevEmployerEmail');
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
