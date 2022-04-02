@extends('layouts.master')

@section('content')
    <section class="bg-blue-100">
        <div class="bg-orange-400 px-6 text-center text-3xl">
            <a href="/appraisals/create">Order Appraisal</a>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 overflow-x-auto py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="inline-block min-w-full overflow-hidden border-b border-gray-200 align-middle shadow sm:rounded-lg">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    ID</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Loan Number</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Order By</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Order Date</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Fee</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Payment</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Paid By</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Make Payment</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach ($appraisals as $appraisal)
                                <tr>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm font-medium leading-5 text-gray-900">
                                            {{ $appraisal->id }}
                                            {{-- <a
                                                        href="{{ url('appraisals/' . $appraisal->id) }}">{{ $appraisal->id }}</a> --}}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $appraisal->loan_number }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $appraisal->users->email }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $appraisal->order_date }}

                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $appraisal->fee }}

                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $appraisal->payment }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $appraisal->paid_by }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm font-bold leading-5 text-blue-500">
                                            <a href={{ url('appraisals/' . $appraisal->id . '/payment') }}>
                                                Pay</a>
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


    <script src="https://js.stripe.com/v3/"></script>

    <script>
        const stripe = Stripe('stripe-public-key');

        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');
    </script>
@endsection
