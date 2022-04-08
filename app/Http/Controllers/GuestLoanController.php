<?php

namespace App\Http\Controllers;

use App\Models\GuestLoan;
use Illuminate\Http\Request;

class GuestLoanController extends Controller
{

    public function show(GuestLoan $guest_loan_number, Request $request)
    {

        if ($guest_loan_number->SubjectPropertyZip == $request->zip) {
            return view('guest-loans.show')->with('loan', $guest_loan_number);
        } else {
            return 'Please Enter Valid info';
        }

    }
}
