<?php

namespace App\Http\Controllers;

use App\Models\Loan;

class GuestLoanController extends Controller
{

    public function show($id)
    {
        $loan = Loan::where('TransDetailsLoan', $id)->first();
        return view('guest-loans.show', compact('loan'));
    }
}
