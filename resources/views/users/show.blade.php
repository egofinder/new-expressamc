@extends('layouts.master')

@section('content')
    <section class="bg-blue-100">
        <h1>Individual User Page</h1>
        <div>
            {{ $user->id }}
        </div>
        <div>
            {{ $user->FirstName }}
        </div>
        <div>
            {{ $user->LastName }}
        </div>

    </section>
@endsection
