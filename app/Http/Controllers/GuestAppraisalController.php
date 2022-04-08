<?php

namespace App\Http\Controllers;

use App\Models\GuestAppraisal;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;

class GuestAppraisalController extends Controller
{

    public function index()
    {
        return "hihih";
    }

    public function show($id)
    {
        $appraisal = GuestAppraisal::find($id);
        $loan      = Loan::where('TransDetailsLoan', $appraisal->loan_number)->first();
        return view('guest-appraisals.show', compact('appraisal', 'loan'));
    }

    public function create(Request $request)
    {
        $user          = User::find(1);
        $initial_order = Loan::where('TransDetailsLoan', $request->loan_number)->first();

        return view('guest-appraisals.externalcreate', compact('user', 'initial_order'));
    }

    // Receive Appraisal order from pacbaylending.com/pac2/appraisal.php
    public function externalcreate(Request $request)
    {
        $user          = User::find(1);
        $appraisal     = GuestAppraisal::where('loan_number', $request->keyword)->first();
        $initial_order = Loan::where('TransDetailsLoan', $request->keyword)->first();

        if (isset($appraisal)) {
            return redirect('guest-loans/' . $request->keyword);
        }
        if (is_null($initial_order)) {
            return "No Loan Found!";
        }
        if (strlen($initial_order->IntentToProceed) < 8) {
            return "The Borrower Intent to Proceed Date is Missing \n Please have your borrower complete the disclosure package.\n Or Contact your Lending Company\'s Disclosure Department.";
        }
        if ($initial_order->LoanType == "VA") {
            return "We are not able to order VA loans here at Express AMC. All VA appraisals MUST be ordered through VA Portal, \n Please contact your Loan Broker about it. Thanks";
        }
        if ($request->keyzip != $initial_order->SubjectPropertyZip) {
            return "Loan Number mismakes with property Zip!";
        }
        return view('guest-appraisals.externalcreate', compact('user', 'initial_order'));

    }

    public function store(Request $request)
    {

        $request->validate([
            'file'        => 'mimes:jpg,png,jpeg,pdf,txt,docx,doc|max:5048',
            'loan_number' => 'required|exists:loans,TransDetailsLoan',
            'order_date'  => 'required|date_format:Y-m-d',
            'fee'         => 'required|integer|min:0|max:2021',

        ]);

        GuestAppraisal::create([
            'loan_number' => $request->input('loan_number'),
            'order_date'  => $request->input('order_date'),
            'fee'         => $request->input('fee'),
            'order_by'    => $request->input('order_by'),
            'company'     => $request->input('company'),
            'phone'       => $request->input('broker_phone'),
            'fax'         => $request->input('broker_fax'),
        ]);

        return redirect('guest-loans/' . $request->input('loan_number'));
    }

    public function payment($id)
    {
        $user   = User::find(1);
        $intent = $user->createSetupIntent();
        return view('guest-appraisals.payment')->with('id', $id)->with('intent', $intent);
    }

    public function purchase(Request $request)
    {
        $user          = User::find(1);
        $appraisal     = GuestAppraisal::find($request->id);
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

        return redirect('guest-loans/' . $appraisal->loan_number);
    }

}
