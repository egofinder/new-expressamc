@extends('layouts.master')

@section('content')
    <section class="bg-blue-100">
        <div class="rounded border border-blue-700 bg-blue-500 py-2 px-4 text-center font-bold text-white">
            Appraisal Detail
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 overflow-x-auto py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="inline-block min-w-full overflow-hidden border-b border-gray-200 align-middle shadow sm:rounded-lg">
                    <table class="min-w-full">

                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Invoice#</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $appraisal->AppraisalDetails->InvoiceID ?? 'None' }}
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Loan#</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $appraisal->TransDetailsLoan }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Borrower Email</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $appraisal->BorrEmail }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Invoice Number</th>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Product Type</th>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Status</th>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Appoinment Set</th>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Inspection Done</th>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Appraisal PDF</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $appraisal->AppraisalDetails->AppraisalPDF ?? 'None' }}
                                    @if (asset('files/' . $appraisal->id . '/' . $appraisal->AppraisalDetails->AppraisalPDF))
                                        <a
                                            href="{{ asset('files/' . $appraisal->id . '/' . $appraisal->AppraisalDetails->AppraisalPDF) }}">Download</a>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <form action="/appraisals/{{ $appraisal->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="relative text-gray-700">
                                        <input type="hidden" name="type" value="AppraisalPDF">
                                        <input type="file"
                                            class="focus:shadow-outline h-10 w-full rounded-lg border pl-3 pr-8 text-base placeholder-gray-600"
                                            name="file" />
                                        <button type="submit"
                                            class="absolute inset-y-0 right-0 flex items-center rounded-r-lg bg-indigo-600 px-4 font-bold text-white hover:bg-indigo-500 focus:bg-indigo-700">Upload</button>
                                    </div>
                            </td>
                        </tr>


                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Appraisal XML</th>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Invoice</th>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                1004D PDF</th>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                1004D XML</th>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Customer Email</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
