@extends('layouts.master')

@section('content')
    <section class="bg-blue-100">
        <h1>Users List</h1>
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
                                    Name</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Company Name</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Address</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    City</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Zip</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Phone</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Roles</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Edit</th>
                                <th
                                    class="border-b border-gray-200 bg-gray-50 px-6 py-3 text-center text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">
                                    Delete</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium leading-5 text-gray-900">
                                                    {{ $user->id }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">{{ $user->first_name }}
                                            {{ $user->last_name }}</div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $user->company }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $user->address }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $user->city }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $user->zip }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $user->phone }}
                                        </div>
                                    </td>
                                    <td class="whitespace-no-wrap border-b border-gray-200 px-6 py-4">
                                        <div class="text-center text-sm leading-5 text-gray-500">
                                            {{ $user->user_type }}
                                        </div>
                                    </td>
                                    <td
                                        class="whitespace-no-wrap border-b border-gray-200 px-6 py-4 text-center text-xl leading-5 text-blue-500">
                                        <i class="far fa-edit"></i>
                                    </td>
                                    <td
                                        class="whitespace-no-wrap border-b border-gray-200 px-6 py-4 text-center text-xl leading-5 text-red-500">
                                        <i class="fa-solid fa-trash"></i>
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
