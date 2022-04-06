<?php

namespace App\Http\Controllers;

use App\Models\Appraisal;
use App\Models\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppraisalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->user_type === 'admin') {
            $appraisals = Appraisal::all();

        } else {
            $id         = auth()->user()->id;
            $appraisals = Appraisal::where('order_by', $id)->get();

        }

        return view('appraisals.index')->with('appraisals', $appraisals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request);
        return view('appraisals.create')->with('initial_order', $request);
    }

    // Receive Appraisal order from pacbaylending.com/pac2/appraisal.php
    public function externalcreate(Request $request)
    {
        $initial_order = Loan::where('TransDetailsLoan', $request->keyword)->first();
        if (is_null($initial_order)) {
            return "No Loan Found!";
        }
        if (strlen($initial_order->IntentToProceed) < 8) {
            return "The Borrower Intent to Proceed Date is Missing \n Please have your borrower complete the disclosure package.\n Or Contact your Lending Company\'s Disclosure Department.";
        }
        if ($initial_order->LoanType == "VA") {
            return "We are not able to order VA loans here at Express AMC. All VA appraisals MUST be ordered through VA Portal, \n Please contact your Loan Broker about it. Thanks";
        }
        return view('appraisals.externalcreate')->with('initial_order', $initial_order);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file'        => 'mimes:jpg,png,jpeg,pdf,txt,docx,doc|max:5048',
            'loan_number' => 'required|exists:loans,TransDetailsLoan',
            'order_date'  => 'required|date_format:Y-m-d',
            'fee'         => 'required|integer|min:0|max:2021',

        ]);

        if ($request->file) {
            $newFileName = time() . '-' . $request->file->getClientOriginalName() . '.' .
            $request->file->extension();
            if (!Storage::exists(public_path('uploaded'))) {
                Storage::makeDirectory('uploaded');
            }
            $request->file->move(public_path('uploaded'), $newFileName);
        }

        Appraisal::create([
            'loan_number' => $request->input('loan_number'),
            'order_date'  => $request->input('order_date'),
            'fee'         => $request->input('fee'),
            'order_by'    => auth()->user()->id,

        ]);

        return redirect('/appraisals');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function payment($id)
    {

        $intent = auth()->user()->createSetupIntent();
        return view('appraisals.payment')->with('id', $id)->with('intent', $intent);
    }

    public function purchase(Request $request)
    {
        $appraisal     = Appraisal::find($request->id);
        $payer         = $request->input('card_holder_name');
        $user          = $request->user();
        $paymentMethod = $request->input('payment_method');
        $amount        = $appraisal->fee;
        $user->createOrGetStripeCustomer();
        $user->updateDefaultPaymentMethod($paymentMethod);
        $payment = $user->charge($amount * 100, $request->payment_method, ['description' => $payer]);
        // dd($payment);
        $appraisal->paid_by    = $payer;
        $appraisal->payment    = 'Paid';
        $appraisal->payment_id = $payment->id;
        $appraisal->save();

        return redirect('appraisals')->with('message', 'Product purchased successfully!');
    }

    public function refund(Request $request)
    {
        // dd($request);
        $appraisal = Appraisal::find($request->appraisal_id);
        $user      = $request->user();
        $user->refund($appraisal->payment_id);
        $appraisal->payment = 'Refunded';
        $appraisal->save();
        return redirect('appraisals')->with('message', 'Product refund successfully!');

    }
}
