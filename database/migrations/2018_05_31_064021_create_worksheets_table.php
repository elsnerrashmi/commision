<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worksheets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Worksheet_ID')->unsigned()->nullable();
            $table->integer('Inst_ID')->unsigned()->nullable();
            $table->integer('Deal_ID')->unsigned()->nullable();
            $table->integer('SalesLocation_ID')->unsigned()->nullable();
            $table->integer('Lender_ID')->unsigned()->nullable();
            $table->string('WorksheetType');
            $table->dateTime('AddDate');
            $table->dateTime('LastModified');
            $table->enum('Status', ['0','1','2','3','4','5','6','7','8','9','10'])->comment('0 = Working,1 = Pending Decision,2 = Acknowledged,3 = Approved,4 = Declined,5 = Conditional Approval,6 = Cancelled,7 = Withdrawn,8 = Pending,9 = Error,10 = More Info Needed');
            $table->dateTime('StatusDate');
            $table->integer('ContractStatus');
            $table->dateTime('ContractStatusDate');
            $table->string('ContractState');
            $table->string('RegistrationState');
            $table->dateTime('ContractDate');
            $table->string('SalesPrice');
            $table->string('CashDown');
            $table->string('ManfRebate');
            $table->string('DealerRebate');
            $table->enum('UseMaxRate', ['true', 'false']);
            $table->string('LoanRate');
            $table->integer('Contract_ID')->unsigned()->nullable();
            $table->enum('SalesTaxDeferred', ['true', 'false']);
            $table->string('DTCompoundPeriod');
            $table->string('DTAmortizationMethod');
            $table->string('DTYearLength');
            $table->string('DTComplianceLevel');
            $table->enum('UseManfRebate', ['true', 'false']);
            $table->enum('UseDealerRebate', ['true', 'false']);
            $table->enum('AllowServiceContract', ['true', 'false']);
            $table->enum('AllowCreditLife', ['true', 'false']);
            $table->enum('AllowCreditDisability', ['true', 'false']);
            $table->enum('AllowUnemploymentIns', ['true', 'false']);
            $table->enum('AllowGAP', ['true', 'false']);
            $table->enum('AllowPropertyIns', ['true', 'false']);
             
            $table->decimal('NumberOfDefDowns', 8, 2);
            $table->decimal('DeferredSalesTax', 8, 2);
            $table->decimal('AmountFinanced', 8, 2);
            $table->decimal('FinanceCharge', 8, 2);
            $table->decimal('RegzAPR', 8, 2);
            $table->decimal('TotalTradeIn', 8, 2);
            $table->decimal('TotalTradeInACV', 8, 2);
            $table->decimal('TotalTradeInPayoff', 8, 2); 
            $table->decimal('TotalTradeInCashBack', 8, 2); 
            $table->decimal('TotalDefDown', 8, 2);

            $table->decimal('TotalInventoryCost', 8, 2);
            $table->decimal('TotalProductPrice', 8, 2);
            $table->decimal('TotalProductCost', 8, 2);
            $table->decimal('TotalFees', 8, 2);
            $table->decimal('TotalTaxes', 8, 2);

            $table->decimal('FindersFee', 8, 2);
            $table->decimal('PackFee', 8, 2);
            $table->decimal('FlatDiscount', 8, 2);
            $table->decimal('DiscountPercentage', 8, 2);
            $table->decimal('Discount', 8, 2);
            $table->enum('CalcDlrReserve', ['true', 'false']);
            $table->decimal('FlatDlrReserve', 8, 2);
            $table->decimal('BuyRate', 8, 2);
            $table->decimal('BuyRateDlrReserve', 8, 2);
            $table->decimal('DlrReservePercentage', 8, 2);
            $table->decimal('GrossDlrReserve', 8, 2);
            
            $table->string('NetDlrReserve');
            $table->string('SalesGrossCommPercent');
            $table->string('CommGrossCommPercent');
            $table->string('BackEndCommPercent');
            $table->string('DownPaymentCommPercent');
            $table->string('DlrReserveCommPercent');
            $table->string('SalesGrossCommission');
            $table->string('CommGrossCommission');
            $table->string('BackEndCommission');
            $table->string('DownPaymentCommission');
            $table->string('DefDownPaymentCommission');
            $table->string('DlrReserveCommission');
            $table->string('Profit_SalesGrossProfit');
            $table->string('Profit_CommGrossProfit');
            $table->string('Profit_DealGrossProfit');
            $table->string('Profit_DealNetProfit');
            $table->enum('IsDirty_ProfitCalculation', ['true', 'false']);
            $table->dateTime('LastSendDate');
            $table->string('CB_By');
            $table->string('CB_FlatDiscount');
            $table->string('CB_DiscountPercentage');
            $table->string('CB_FlatDlrReserve');
            $table->string('CB_BuyRate');
 
            $table->string('CB_AmountFinanced');
            $table->string('CB_TotalDown');
            $table->string('CB_LoanRate');
            $table->string('CB_Payment');
            $table->string('CB_NumPayments');
            $table->enum('CommercialUse', ['true', 'false']);
            $table->enum('Funded', ['true', 'false']);
            $table->dateTime('FundedDate');

            $table->string('CB_MaxMileage');
            $table->string('CB_MinYearModel');
            $table->string('CB_Notes');
            $table->string('CB_Phone');
            $table->string('CB_AcqFee');
            $table->string('AcqFee');
            $table->dateTime('CB_ExpDate');

            $table->string('EscrowFee');
            $table->string('FEXTier_ID');
            $table->string('LG_AmountFinanced');
            $table->string('LG_TotalDown');
            $table->string('LG_LoanRate');
            $table->string('LG_NumPayments');

            $table->string('SalesPriceDiscount');
            $table->string('ProductMenu');
            $table->string('CB_MaxPayment');
            $table->string('LenderVSI');
            $table->string('PrepaidFinanceCharge');
            $table->enum('AllowLenderVSI', ['true', 'false']);
            $table->enum('AllowPrepaidFinanceCharge', ['true', 'false']);
           
            $table->string('CB_MaxLTV');
            $table->string('LHName');
            $table->string('LHContact');
            $table->string('LHAdd1');
            $table->string('LHAdd2');
            $table->string('LHCity');
            $table->string('LHCounty');
            $table->string('LHState');
            $table->string('LHZip');
            $table->string('LHPhone1');
            $table->string('LHFax1');
            $table->string('LHGDN');
        
            $table->integer('FundingStatus_ID')->unsigned()->nullable();
            $table->string('FundingNotes');
            $table->dateTime('FundingStatusDate');
            $table->string('TotalDown');
            $table->string('SalesLocationName');
            $table->string('SalesLocationDesc');
            $table->string('LenderName');
            $table->string('LenderDesc');
            $table->enum('FinanceType', ['I', 'C','O'])->comment('I=In House,C=Cash,O=Outside');

            $table->string('StatusDesc');
            $table->string('InvDesc');
            $table->integer('inventory_id')->unsigned()->nullable();
            $table->string('VROXCertificate');
            $table->integer('FEXLender_ID')->unsigned()->nullable();
            $table->string('NumPayments');
            $table->decimal('RegPayment', 8, 2);
            $table->enum('UsesEscrow', ['true', 'false']);
            $table->string('fundingstatusdesc');
            $table->string('Funding_HTML_Style');

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
        Schema::dropIfExists('worksheets');
    }
}
