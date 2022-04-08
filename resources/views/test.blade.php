@extends('layouts.master')

@section('content')
    <section>
        <div class="white py-16">
            <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                <h2 class="mb-12 text-center text-2xl font-bold text-gray-900 md:text-4xl">What's our customers say</h2>
                <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
                    <div class="row-span-2 rounded-xl border border-gray-100 bg-gray-50 p-6 text-center sm:p-8">
                        <div class="flex h-full flex-col justify-center space-y-4">
                            Test1
                        </div>
                    </div>

                    <div class="rounded-xl border border-gray-100 bg-gray-50 p-6 sm:flex sm:space-x-8 sm:p-8">
                        Test2
                    </div>
                    <div class="rounded-xl border border-gray-100 bg-gray-50 p-6 sm:flex sm:space-x-8 sm:p-8">
                        Test3
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
