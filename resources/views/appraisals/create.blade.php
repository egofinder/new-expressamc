@extends('layouts.master')

@section('content')
    <section class="min-h-full bg-gradient-to-r from-white to-green-200">
        <div class="w-4/8 m-auto py-24">
            <div class="text-center">
                <h1 class="bold text-5xl uppercase">Request Appraisal</h1>
            </div>
        </div>

        <div class="flex justify-center pt-20">
            <form action="/appraisals" method="POST" enctype="multipart/form-data" id="form">
                @csrf
                <div class="block">
                    <input type="file" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="file" />
                    <input type="text" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="loan_number"
                        value={{ $initial_order->loan_number }} readonly />
                    <input type="text" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="order_date"
                        value={{ $initial_order->order_date }} readonly />
                    <input type="text" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="order_by"
                        value={{ $initial_order->order_by }} readonly />
                    <input type="checkbox" id="a1004D_1" name="a1004D_1" value="100">
                    <label for="a1004D_1">Order a1004D_1</label><br>
                    <input type="checkbox" id="a1004D_2" name="a1004D_2" value="150">
                    <label for="a1004D_2">Order a1004D_2</label><br>
                    <input type="checkbox" id="a1007" name="a1007" value="50">
                    <label for="a1007">Order a1007</label><br>
                    <input type="checkbox" id="a216" name="a216" value="50">
                    <label for="a1007">Order a216</label><br>
                    <input type="checkbox" id="FHA" name="FHA" value="100">
                    <label for="a1007">Order FHA</label><br>
                    <input type="checkbox" id="Rush" name="Rush" value="150">
                    <label for="a1007">Order Rush Process</label><br>
                    <input type="text" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="fee"
                        id="fee" placeholder="Fee" />
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


@section('scripts')
    <script>
        let fee = document.getElementById("fee")
        let a1004D_1 = 0
        let a1004D_2 = 0
        let a1007 = 0
        let a216 = 0
        let fha = 0
        let rush = 0
        const form = document.getElementById("form")
        form.addEventListener('click', getFee);

        function getFee() {
            if (document.getElementById("a1004D_1").checked) {
                a1004D_1 = document.getElementById("a1004D_1").value
            } else {
                a1004D_1 = 0
            }
            if (document.getElementById("a1004D_2").checked) {
                a1004D_2 = document.getElementById("a1004D_2").value
            } else {
                a1004D_2 = 0
            }
            if (document.getElementById("a1007").checked) {
                a1007 = document.getElementById("a1007").value
            } else {
                a1007 = 0
            }
            if (document.getElementById("a216").checked) {
                a216 = document.getElementById("a216").value
            } else {
                a216 = 0
            }
            if (document.getElementById("FHA").checked) {
                fha = document.getElementById("FHA").value
            } else {
                fha = 0
            }
            if (document.getElementById("Rush").checked) {
                rush = document.getElementById("Rush").value
            } else {
                rush = 0
            }
            let result = parseInt(a1004D_1) + parseInt(a1004D_2) + parseInt(a1007) + parseInt(a216) + parseInt(fha) +
                parseInt(rush)
            fee.setAttribute('value', result);
        }
    </script>
@endsection
