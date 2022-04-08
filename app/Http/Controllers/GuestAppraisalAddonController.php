<?php

namespace App\Http\Controllers;

use App\Models\GuestAppraisal;
use App\Models\GuestAppraisalAddon;
use App\Models\User;
use Illuminate\Http\Request;

class GuestAppraisalAddonController extends Controller
{
    public function payment($id)
    {
        dd($id);
        $user   = User::find(1);
        $intent = $user->createSetupIntent();
        return view('guest-appraisals.addonpayment')->with('id', $id)->with('intent', $intent);
    }

    public function purchase(Request $request)
    {
        $user          = User::find(1);
        $appraisal     = GuestAppraisalAddon::find($request->id);
        $payer         = $request->input('card_holder_name');
        $paymentMethod = $request->input('payment_method');
        $amount        = $appraisal->fee;
        $user->createOrGetStripeCustomer();
        $user->updateDefaultPaymentMethod($paymentMethod);
        $payment               = $user->charge($amount, $request->payment_method, ['description' => $payer]);
        $appraisal->paid_by    = $payer;
        $appraisal->payment    = 'Paid';
        $appraisal->payment_id = $payment->id;
        $appraisal->save();

        $loan_number = $appraisal->loan_number;
        return redirect('guest-loans/' . $loan_number);
    }

    public function store(Request $request)
    {
        $loan_number = GuestAppraisal::find($request->input('guest_appraisal_id'))->loan_number;
        GuestAppraisalAddon::create([
            'order_date'         => $request->input('order_date'),
            'order_by'           => $request->input('order_by'),
            'fee'                => $request->input('fee'),
            'guest_appraisal_id' => $request->input('guest_appraisal_id'),
            'loan_number'        => $loan_number,
        ]);

        return redirect('guest-loans/' . $loan_number);
    }

    public function addon($id)
    {
        return view('guest-appraisals.addon')->with('id', $id);
    }
}
