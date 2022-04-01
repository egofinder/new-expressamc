@extends('layouts.master')

@section('content')
    <section class="min-h-full bg-gradient-to-r from-white to-green-200">
        <div class="w-4/8 m-auto py-24">
            <div class="text-center">
                <h1 class="bold text-5xl uppercase">Request Appraisal</h1>
            </div>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/appraisals" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="block">
                    <input type="file" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="file" />
                    <input type="text" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="loan_number"
                        placeholder="Loan Number" />
                    <input type="text" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="order_date"
                        placeholder="Order Date" />
                    <input type="text" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="fee"
                        placeholder="Fee" />
                    <input type="text" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="payment"
                        placeholder="Payment" />
                    <input type="text" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="paid_by"
                        placeholder="Paid By" />
                    <input type="hidden" class="shadow-5xl mb-10 block w-80 p-2 italic text-black" name="order_by"
                        value="{{ Auth::user()->id }}" readonly />

                    <button type="submit"
                        class="shadow-5xl uppoercase mb-10 block w-80 bg-green-500 p-2 font-bold">Submit</button>
                </div>
            </form>
        </div>
        @if ($errors->any())
            <div class="w-4/8 m-auto text-center">
                @foreach ($errors->all() as $error)
                    <li class="list-none text-red-500">
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        @endif
    </section>
@endsection
