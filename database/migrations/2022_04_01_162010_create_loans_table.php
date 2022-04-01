<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('TransDetailsApplicationDate', 10);
            $table->string('PurchaseAdviceDate', 10);
            $table->string('TransDetailsLoan', 20)->unique();
            $table->string('BorrowerFirstName', 20);
            $table->string('BorrowerLastName', 20);
            $table->string('InvestorCaseLoan', 20);
            $table->string('SubjectPropertyAddress', 100);
            $table->string('SubjectPropertyCity', 100);
            $table->string('SubjectPropertyState', 10);
            $table->string('SubjectPropertyZip', 15);
            $table->string('FileContactsInvestorName', 20);
            $table->string('WarehouseCoName', 20);
            $table->string('RateLockBuySideBasePriceRate', 10);
            $table->string('BuySidePriceTotAdjustment', 10);
            $table->string('NetBuyPrice', 10);
            $table->string('NetSellRate', 10);
            $table->string('BaseSellPrice', 10);
            $table->string('SellSidePriceTotAdjustment', 10);
            $table->string('RateLockSellSideNetSellPrice', 10);
            $table->string('SellSideSRPPaidOut', 10);
            $table->string('SellSideDiscountYSP', 10);
            $table->string('RateLockSellSideInvestorDeliveryDate', 10);
            $table->string('RateLockSellSideTargetDeliveryDate', 10);
            $table->string('RateLockSellSideTotalSellPrice', 10);
            $table->string('GainLossPercent', 10);
            $table->string('GainLossAmount', 12);
            $table->string('TotalLoanAmount', 12);
            $table->string('TotalWireTransfer', 20);
            $table->string('LoanStatus', 30);
            $table->string('FundsSentDate', 10);
            $table->string('ShippingDate', 10);
            $table->string('Occupancy', 20);
            $table->string('BorrPresentAddr', 100);
            $table->string('BorrPresentCity', 50);
            $table->string('BorrPresentState', 10);
            $table->string('BorrPresentZip', 12);
            $table->string('LastFinishedMilestone', 20);
            $table->string('BorrEmail', 50);
            $table->string('BorrPhone', 20);
            $table->string('LoanType', 50);
            $table->string('BrokerLenderName', 100);
            $table->string('PIPaymentAmount', 50);
            $table->string('Underwriter', 50);
            $table->string('UnitNumber', 20);
            $table->string('FHACase', 50);
            $table->string('PurchasePrice', 12);
            $table->string('CountyName', 50);
            $table->string('LoanPurpose', 100);
            $table->string('AppraisedValue', 20);
            $table->string('BorrowerMailingAddr', 100);
            $table->string('BorrowerMailingCity', 50);
            $table->string('BorrowerMailingState', 10);
            $table->string('BorrowerMailingZip', 10);
            $table->string('PropertyType', 40);
            $table->string('AEName', 100);
            $table->string('CountyCode', 4);
            $table->string('TPOName', 100);
            $table->string('TPOAddr', 100);
            $table->string('TPOCity', 50);
            $table->string('TPOState', 10);
            $table->string('TPOPhone', 20);
            $table->string('LoanProgram', 20);
            $table->string('SignDate', 10);
            $table->string('BorrSSN', 20);
            $table->string('NoteRate', 10);
            $table->string('LoanTerm', 10);
            $table->string('LEDueDate', 10);
            $table->string('LESentDate', 10);
            $table->string('FileStarterEmail', 100);
            $table->string('LoanOfficerEmail', 100);
            $table->string('FileStarterName', 100);
            $table->string('LoanOfficerName', 100);
            $table->string('IntentToProceed', 10);
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
        Schema::dropIfExists('loans');
    }
};
