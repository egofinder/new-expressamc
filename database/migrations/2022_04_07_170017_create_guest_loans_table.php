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
        Schema::create('guest_loans', function (Blueprint $table) {
            $table->id();
            $table->string('TransDetailsApplicationDate', 10)->nullable();
            $table->string('PurchaseAdviceDate', 10)->nullable();
            $table->string('TransDetailsLoan', 20)->unique();
            $table->string('BorrowerFirstName', 20)->nullable();
            $table->string('BorrowerLastName', 20)->nullable();
            $table->string('InvestorCaseLoan', 20)->nullable();
            $table->string('SubjectPropertyAddress', 100);
            $table->string('SubjectPropertyCity', 100)->nullable();
            $table->string('SubjectPropertyState', 10)->nullable();
            $table->string('SubjectPropertyZip', 15)->nullable();
            $table->string('FileContactsInvestorName', 20)->nullable();
            $table->string('WarehouseCoName', 20)->nullable();
            $table->string('RateLockBuySideBasePriceRate', 10)->nullable();
            $table->string('BuySidePriceTotAdjustment', 10)->nullable();
            $table->string('NetBuyPrice', 10)->nullable();
            $table->string('NetSellRate', 10)->nullable();
            $table->string('BaseSellPrice', 10)->nullable();
            $table->string('SellSidePriceTotAdjustment', 10)->nullable();
            $table->string('RateLockSellSideNetSellPrice', 10)->nullable();
            $table->string('SellSideSRPPaidOut', 10)->nullable();
            $table->string('SellSideDiscountYSP', 10)->nullable();
            $table->string('RateLockSellSideInvestorDeliveryDate', 10)->nullable();
            $table->string('RateLockSellSideTargetDeliveryDate', 10)->nullable();
            $table->string('RateLockSellSideTotalSellPrice', 10)->nullable();
            $table->string('GainLossPercent', 10)->nullable();
            $table->string('GainLossAmount', 12)->nullable();
            $table->string('TotalLoanAmount', 12)->nullable();
            $table->string('TotalWireTransfer', 20)->nullable();
            $table->string('LoanStatus', 30)->nullable();
            $table->string('FundsSentDate', 10)->nullable();
            $table->string('ShippingDate', 10)->nullable();
            $table->string('Occupancy', 20)->nullable();
            $table->string('BorrPresentAddr', 100)->nullable();
            $table->string('BorrPresentCity', 50)->nullable();
            $table->string('BorrPresentState', 10)->nullable();
            $table->string('BorrPresentZip', 12)->nullable();
            $table->string('LastFinishedMilestone', 20)->nullable();
            $table->string('BorrEmail', 50)->nullable();
            $table->string('BorrPhone', 20)->nullable();
            $table->string('LoanType', 50)->nullable();
            $table->string('BrokerLenderName', 100)->nullable();
            $table->string('PIPaymentAmount', 50)->nullable();
            $table->string('Underwriter', 50)->nullable();
            $table->string('UnitNumber', 20)->nullable();
            $table->string('FHACase', 50)->nullable();
            $table->string('PurchasePrice', 12)->nullable();
            $table->string('CountyName', 50)->nullable();
            $table->string('LoanPurpose', 100)->nullable();
            $table->string('AppraisedValue', 20)->nullable();
            $table->string('BorrowerMailingAddr', 100)->nullable();
            $table->string('BorrowerMailingCity', 50)->nullable();
            $table->string('BorrowerMailingState', 10)->nullable();
            $table->string('BorrowerMailingZip', 10)->nullable();
            $table->string('PropertyType', 40)->nullable();
            $table->string('AEName', 100)->nullable();
            $table->string('CountyCode', 4)->nullable();
            $table->string('TPOName', 100)->nullable();
            $table->string('TPOAddr', 100)->nullable();
            $table->string('TPOCity', 50)->nullable();
            $table->string('TPOState', 10)->nullable();
            $table->string('TPOPhone', 20)->nullable();
            $table->string('LoanProgram', 20)->nullable();
            $table->string('SignDate', 10)->nullable();
            $table->string('BorrSSN', 20)->nullable();
            $table->string('NoteRate', 10)->nullable();
            $table->string('LoanTerm', 10)->nullable();
            $table->string('LEDueDate', 10)->nullable();
            $table->string('LESentDate', 10)->nullable();
            $table->string('FileStarterEmail', 100)->nullable();
            $table->string('LoanOfficerEmail', 100)->nullable();
            $table->string('FileStarterName', 100)->nullable();
            $table->string('LoanOfficerName', 100)->nullable();
            $table->string('IntentToProceed', 10)->nullable();
            $table->timestamps();
        });

        // Schema::table('guest_loans', function ($table) {
        //     $table->primary('TransDetailsLoan');
        // });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest_loans');
    }
};
