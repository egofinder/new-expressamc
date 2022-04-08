@extends('layouts.master')

@section('content')
    <section class="bg-blue-100">
        <div class="white py-16">
            <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                <h2 class="mb-12 text-center text-2xl font-bold text-gray-900 md:text-4xl">Loan Details</h2>
                <div class="grid gap-4 md:grid-rows-2 lg:grid-cols-2">
                    <div class="row-span-2 rounded-xl border border-gray-100 bg-gray-50 p-6 text-center sm:p-8">
                        <div class="flex flex-col justify-center space-y-4">
                            <h1 class="mb-12 text-center text-2xl font-bold text-blue-500 md:text-4xl">
                                Loan Information</h1>
                            <div class="grid grid-cols-2 gap-1">
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Loan Number</div>
                                <div class="mb-2 text-center text-xl font-bold">
                                    {{ $loan->TransDetailsLoan }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Loan Program</div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->LoanProgram }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Loan Purpose
                                </div>
                                <div class="mb-2 bg-red-400 text-center text-xl">
                                    {{ $loan->LoanPurpose }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Loan Type
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->LoanType }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    FHA Case Number
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->FHACase }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-2 rounded-xl border border-gray-100 bg-gray-50 p-6 text-center sm:p-8">
                        <div class="flex flex-col justify-center space-y-4">
                            <h1 class="mb-12 text-center text-2xl font-bold text-blue-500 md:text-4xl">
                                Borrower Information</h1>
                            <div class="grid grid-cols-2 gap-1">
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">First Name</div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->BorrowerFirstName }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Last Name
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->BorrowerLastName }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Borrower Phone Number
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->BorrPhone }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Borrower Email
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->BorrEmail }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-2 rounded-xl border border-gray-100 bg-gray-50 p-6 text-center sm:p-8">
                        <div class="flex flex-col justify-center space-y-4">
                            <h1 class="mb-12 text-center text-2xl font-bold text-blue-500 md:text-4xl">
                                Property Information</h1>
                            <div class="grid grid-cols-2 gap-1">
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Property Address</div>
                                <div class="mb-2 bg-red-400 text-center text-xl">
                                    {{ $loan->SubjectPropertyAddress }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Property City
                                </div>
                                <div class="mb-2 bg-red-400 text-center text-xl">
                                    {{ $loan->SubjectPropertyCity }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Property State
                                </div>
                                <div class="mb-2 bg-red-400 text-center text-xl">
                                    {{ $loan->SubjectPropertyState }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Property Zip
                                </div>
                                <div class="mb-2 bg-red-400 text-center text-xl">
                                    {{ $loan->SubjectPropertyZip }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    County Name
                                </div>
                                <div class="mb-2 bg-red-400 text-center text-xl">
                                    {{ $loan->CountyName }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Occupancy
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->Occupancy }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Property Type
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->PropertyType }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Number of Units
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->UnitNumber }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-2 rounded-xl border border-gray-100 bg-gray-50 p-6 text-center sm:p-8">
                        <div class="flex flex-col justify-center space-y-4">
                            <h1 class="mb-12 text-center text-2xl font-bold text-blue-500 md:text-4xl">
                                Appraisal Information</h1>
                            <div class="grid grid-cols-2 gap-1">
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Order Number</div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->GuestAppraisal->id }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Order Date</div>
                                <div class="mb-2 bg-red-400 text-center text-xl">
                                    {{ $loan->GuestAppraisal->order_date }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Order By</div>
                                <div class="mb-2 bg-red-400 text-center text-xl">
                                    {{ $loan->GuestAppraisal->order_by }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Fee</div>
                                <div class="mb-2 bg-red-400 text-center text-xl">
                                    {{ $loan->GuestAppraisal->fee }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Email</div>
                                <div class="mb-2 text-center text-xl">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Company Name</div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->GuestAppraisal->company }}

                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Tel.</div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->GuestAppraisal->phone }}

                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Fax</div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->GuestAppraisal->fax }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Paid By</div>
                                <div class="mb-2 bg-red-400 text-center text-xl">
                                    {{ $loan->GuestAppraisal->paid_by }}
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Status</div>
                                <div class="mb-2 text-center text-xl">
                                    {{ $loan->GuestAppraisal->payment }}
                                </div>


                                <!-- Button Part -->

                                <a class="block w-full rounded border border-blue-700 bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                                    href="{{ url('guest-appraisals/' . $loan->GuestAppraisal->id . '/addon') }}">Appraisal
                                    Addon</a>

                                <a class="block w-full rounded border border-blue-700 bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                                    href="{{ url('guest-appraisals/' . $loan->GuestAppraisal->id . '/payment') }}">Pay
                                    Appraisal
                                </a>
                                {{-- <form action="{{ url('guest-appraisals/' . $loan->GuestAppraisal->id . '/payment') }}"
                                    method="POST" id="payment">
                                    @csrf
                                    @method("GET")
                                    <input type="hidden" name="loan_number" value="{{ $loan->TransDetailsLoan }}" />
                                    <button type=" submit" form="payment"
                                        class="block w-full rounded border border-blue-700 bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700">
                                        Pay Appraisal
                                    </button>
                                </form> --}}
                            </div>
                        </div>
                    </div>

                    @forelse($loan->GuestAppraisal->Addon as $indexKey => $addon)
                        <div class="row-span-2 rounded-xl border border-gray-100 bg-gray-50 p-6 text-center sm:p-8">
                            <div class="flex flex-col justify-center space-y-4">
                                <h1 class="mb-12 text-center text-2xl font-bold text-blue-500 md:text-4xl">
                                    Appraisal Addon #{{ $indexKey + 1 }}</h1>
                                <div class="grid grid-cols-2 gap-1">
                                    <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Order Date</div>
                                    <div class="mb-2 text-center text-xl">
                                        {{ $addon->order_date }}
                                    </div>
                                    <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Order By</div>
                                    <div class="mb-2 text-center text-xl">
                                        {{ $addon->order_by }}
                                    </div>
                                    <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Fee</div>
                                    <div class="mb-2 text-center text-xl">
                                        {{ $addon->fee }}
                                    </div>
                                    <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Paid By</div>
                                    <div class="mb-2 bg-red-400 text-center text-xl">
                                        {{ $addon->paid_by }}
                                    </div>
                                    <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Status</div>
                                    <div class="mb-2 text-center text-xl">
                                        {{ $addon->payment }}
                                    </div>
                                    <div class="col-span-2">
                                        <a class="block w-full rounded border border-blue-700 bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                                            href="{{ url('guest-appraisals/' . $addon->id . '/addonpayment') }}">Pay
                                            Addon
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse



                </div>
    </section>
@endsection
