<?php

namespace App\Http\Controllers;

use App\Models\Appraisal;
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
        $appraisals = Appraisal::all();
        return view('appraisals.index')->with('appraisals', $appraisals);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appraisals.create');
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
            'order_by'    => 'required|integer|min:0|max:2021',
            'fee'         => 'required|integer|min:0|max:2021',
            'payment'     => 'required|string',
            'paid_by'     => 'required|string',

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
            'order_by'    => $request->input('order_by'),
            'fee'         => $request->input('fee'),
            'payment'     => $request->input('payment'),
            'paid_by'     => $request->input('paid_by'),

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

}
