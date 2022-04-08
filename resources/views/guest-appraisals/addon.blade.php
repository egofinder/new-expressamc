@extends('layouts.master')

@section('content')
    <form action="{{ url('guest-appraisals/' . $id) }}" method="POST" enctype="multipart/form-data" id="form">
        <input type="hidden" name="guest_appraisal_id" value="{{ $id }}">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="bg-white shadow-lg">
                <tr>
                    <th class="border bg-blue-500 px-8 py-4 text-left">
                        Appraisal Addon
                    </th>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Date</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="order_date" id="order_date" value="{{ date('Y-m-d') }}" readonly>
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Broker Email</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="order_by" id="order_by" placeholder="Broker Email" required>
                    </td>
                </tr>
            </table>

            <input type="checkbox" id="a1004D_1" name="a1004D_1" value="10000">
            <label for="a1004D_1">Order a1004D_1</label><br>
            <input type="checkbox" id="a1004D_2" name="a1004D_2" value="15000">
            <label for="a1004D_2">Order a1004D_2</label><br>
            <input type="checkbox" id="a1007" name="a1007" value="5000">
            <label for="a1007">Order a1007</label><br>
            <input type="checkbox" id="a216" name="a216" value="5000">
            <label for="a1007">Order a216</label><br>
            <input type="checkbox" id="FHA" name="FHA" value="10000">
            <label for="a1007">Order FHA</label><br>
            <input type="checkbox" id="Rush" name="Rush" value="15000">
            <label for="a1007">Order Rush Process</label><br>
            <input type="text" class="shadow-5xl mb-10 block w-80 p-2 italic placeholder-gray-400" name="fee" id="fee"
                placeholder="Fee" value="550" />



            <button class="rounded-full bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700"
                type="submit">Order</button>
    </form>
    </div>
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
                parseInt(rush);
            fee.setAttribute('value', result / 100);
        }
    </script>
@endsection
