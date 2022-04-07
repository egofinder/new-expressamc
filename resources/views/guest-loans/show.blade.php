@extends('layouts.master')

@section('content')
    <section class="bg-blue-100">
        <div class="rounded border border-blue-700 bg-blue-500 py-2 px-4 text-center font-bold text-white">
            Loan Detail
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 overflow-x-auto py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="inline-block min-w-full overflow-hidden border-b border-gray-200 align-middle shadow sm:rounded-lg">
                    <table class="min-w-full">
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Loan Number</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $loan->TransDetailsLoan }}
                            </td>
                        </tr>


                        <tr class="col-span-2">
                            <th class="border bg-blue-500 px-8 py-4 text-left">
                                Borrower Contact Information
                            </th>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">First Name</th>
                            <td class="border px-8 py-4">
                                {{ $loan->BorrowerFirstName }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Last Name</th>
                            <td class="border px-8 py-4">
                                {{ $loan->BorrowerLastName }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Borrower Phone Number</th>
                            <td class="border px-8 py-4">
                                {{ $loan->BorrPhone }}
                            </td>
                        </tr>

                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Borrower Email</th>
                            <td class="border px-8 py-4">
                                {{ $loan->BorrEmail }}
                            </td>
                        </tr>

                        <tr>
                            <th class="border bg-blue-500 px-8 py-4 text-left">
                                Subject Property
                            </th>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Loan Number</th>
                            <td class="border px-8 py-4">
                                {{ $loan->TransDetailsLoan }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Loan Program</th>
                            <td class="border px-8 py-4">
                                {{ $loan->LoanProgram }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Property Address</th>
                            <td class="border px-8 py-4">
                                {{ $loan->SubjectPropertyAddress }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Property City</th>
                            <td class="border px-8 py-4">
                                {{ $loan->SubjectPropertyCity }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Property State</th>
                            <td class="border px-8 py-4">
                                {{ $loan->SubjectPropertyState }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Property Zip</th>
                            <td class="border px-8 py-4">
                                {{ $loan->SubjectPropertyZip }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">County Name</th>
                            <td class="border px-8 py-4">
                                {{ $loan->CountyName }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Loan Purpose</th>
                            <td class="border px-8 py-4">
                                {{ $loan->LoanPurpose }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Occupancy</th>
                            <td class="border px-8 py-4">
                                {{ $loan->Occupancy }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Loan Type</th>
                            <td class="border px-8 py-4">
                                {{ $loan->LoanType }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Property Type</th>
                            <td class="border px-8 py-4">
                                {{ $loan->PropertyType }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">Unit</th>
                            <td class="border px-8 py-4">
                                {{ $loan->UnitNumber }}
                            </td>
                        </tr>
                        <tr>
                            <th class="border bg-blue-100 px-8 py-4 text-left">FHA Case Number</th>
                            <td class="border px-8 py-4">
                                {{ $loan->FHACase }}
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Order New Appraisal</th>
                            <td class="text-center">
                                <form action="/guest-appraisals/create" method="POST">
                                    @csrf
                                    @method("GET")
                                    <input type="hidden" name="loan_number" value="{{ $loan->TransDetailsLoan }}" />
                                    <button type=" submit"
                                        class="rounded border border-blue-700 bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700">Order
                                        Appraisal</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection





@section('sidebar')
    <aside class="w-64" aria-label="Sidebar">
        <div class="overflow-y-auto rounded bg-gray-50 py-4 px-3 dark:bg-gray-800">
            <div class="text-white">Ordered Appraisal</div>
            <ul class="space-y-2">
                <li>
                    @forelse($loan->Appraisal as $appraisal)
                        <a href="{{ url('guest-appraisals') . '/' . $appraisal->id }}"
                            class="flex items-center rounded-lg p-2 text-base font-normal text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                            {{ $appraisal->id }} {{ $appraisal->payment }}
                        </a>
                    @empty
                        <p>There is No Ordered Appraisal</p>
                    @endforelse
                </li>
            </ul>
        </div>
    </aside>
@endsection
