@extends('layouts.master')

@section('content')
    <section class="bg-blue-100">
        <h1>loan Detail</h1>
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
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Ordered Appraisal</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    Apprasal ID:
                                    @forelse($loan->Appraisal as $apprasal)
                                        {{ $apprasal->id }}
                                    @empty
                                        <p>There is No Ordered Appraisal</p>
                                    @endforelse
                            </td>
                        </tr>

                    </table>
                    {{-- <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                loan PDF</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $loan->loanDetails->loanPDF ?? 'None' }}
                                    @if (asset('files/' . $loan->id . '/' . $loan->loanDetails->loanPDF))
                                        <a
                                            href="{{ asset('files/' . $loan->id . '/' . $loan->loanDetails->loanPDF) }}">Download</a>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <form action="/loans/{{ $loan->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="relative text-gray-700">
                                        <input type="hidden" name="type" value="loanPDF">
                                        <input type="file"
                                            class="focus:shadow-outline h-10 w-full rounded-lg border pl-3 pr-8 text-base placeholder-gray-600"
                                            name="file" />
                                        <button type="submit"
                                            class="absolute inset-y-0 right-0 flex items-center rounded-r-lg bg-indigo-600 px-4 font-bold text-white hover:bg-indigo-500 focus:bg-indigo-700">Upload</button>
                                    </div>
                            </td>
                        </tr> --}}


                </div>
            </div>
        </div>
    </section>
@endsection
