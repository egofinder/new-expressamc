<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->user_type === 'admin') {
            $loans = Loan::all();
        } else {
            $user  = auth()->user()->id;
            $loans = Loan::where('created_by', $user)->get();

        }
        return view('loans.index')->with('loans', $loans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Loan::create([
            'TransDetailsLoan'       => $request->input('loan_number'),
            'LoanProgram'            => $request->input('program'),
            'BrokerLenderName'       => $request->input('lenderbroker'),
            'AEName'                 => $request->input('ae_name'),
            'LoanOfficerName'        => $request->input('processor'),
            'SubjectPropertyAddress' => $request->input('property_address'),
            'created_by'             => auth()->user()->id,
        ]);

        return redirect('loans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $loan = Loan::find($id);
        return view('loans.show')->with('loan', $loan);
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
}
