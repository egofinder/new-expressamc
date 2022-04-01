@extends('layouts.master')

@section('content')
    <section class="bg-blue-100">
        <h1>Loans List</h1>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 overflow-x-auto py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="inline-block min-w-full overflow-hidden border-b border-gray-200 align-middle shadow sm:rounded-lg">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Loan#</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Program</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Lender/Broker</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    AE Name</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Processor</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    AM Name</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Property Address</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    City</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Zip</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Unit</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Occupancy</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Purpose</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Bor.Name</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Email</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Loan Amount</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Appraised Value</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Report</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach ($loans as $loan)
                                <tr>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900">
                                                    <a
                                                        href="{{ url('loans/' . $loan->id) }}">{{ $loan->TransDetailsLoan }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->LoanProgram }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->BrokerLenderName }}


                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->AEName }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            Processor
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            AM
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->SubjectPropertyAddress }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->SubjectPropertyCity }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->SubjectPropertyZip }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->UnitNumber }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->Occupancy }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->LoanPurpose }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->BorrowerFirstName }}, {{ $loan->BorrowerLastName }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->BorrEmail }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->TotalLoanAmount }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $loan->AppraisedValue }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            Received
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
