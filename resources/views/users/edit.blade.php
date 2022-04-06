@extends('layouts.master')

@section('content')
    <section class="bg-blue-100">
        <div class="rounded border border-blue-700 bg-blue-500 py-2 px-4 text-center font-bold text-white">
            User Detail
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 overflow-x-auto py-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <form action="{{ url('users/' . $user->id) }}" method="POST">
                    @csrf
                    @method("PATCH")
                    <table class="min-w-full">
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Type</th>
                            <th
                                class="border-b border-gray-200 bg-green-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Current Value</th>
                            <th
                                class="border-b border-gray-200 bg-yellow-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                New Value</th>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                User#</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $user->id }}
                                </div>
                            </td>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $user->id }}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Name</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $user->first_name }}, {{ $user->last_name }}
                                </div>
                            </td>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    <input type="text" name="first_name" id="first_name" placeholder="First Name">
                                    <input type="text" name="last_name" id="last_name" placeholder="Last Name">
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Company Name</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $user->company }}
                                </div>
                            </td>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    <input type="text" name="company" id="company" placeholder="Company Name">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                Phone Number</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $user->phone }}
                                </div>
                            </td>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th
                                class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                User Type</th>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    {{ $user->user_type }}
                                </div>
                            </td>
                            <td class="whitespace-no-wrap border-b border-gray-200 bg-white px-6 py-4">
                                <div class="text-center text-sm leading-5 text-gray-500">
                                    <label for="user_type">Choose a User Type:</label>
                                    <select id="user_type" name="user_type" required>
                                        <option value="" selected hidden disabled>User Type</option>
                                        <option value="admin">Admin</option>
                                        <option value="Broker">Broker</option>
                                        <option value="Lender">Lender</option>
                                        <option value="Borrower">Borrower</option>
                                        <option value="Appraisal">Appraisal</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="text-center">
                        <button type="submit"
                            class="inset-y-0 right-0 items-center rounded-lg bg-indigo-600 px-4 text-4xl font-bold text-white hover:bg-indigo-500 focus:bg-indigo-700">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
