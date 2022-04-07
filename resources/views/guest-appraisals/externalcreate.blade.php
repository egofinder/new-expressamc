@extends('layouts.master')

@section('content')
    <form action="/guest-appraisals" method="POST" enctype="multipart/form-data" id="form">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="bg-white shadow-lg">
                <tr>
                    <th class="border bg-blue-500 px-8 py-4 text-left">
                        Appraisal Order
                    </th>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Date</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="order_date" id="order_date" value="{{ date('Y-m-d') }}">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Broker Email</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="order_by" id="order_by" placeholder="Broker Email">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Company Name</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="company" id="compnay" placeholder="Company Name">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Phone Number</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="broker_phone" id="broker_phone" placeholder="Phone Number">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Fax Number</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="broker_fax" id="broker_fax" placeholder="Fax Number">
                    </td>
                </tr>


                <tr>
                    <th class="border bg-blue-500 px-8 py-4 text-left">
                        Borrower Contact Information
                    </th>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">First Name</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="first_name" id="first_name" placeholder="First Name"
                            value="{{ $initial_order->BorrowerFirstName }}">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Last Name</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="last_name" id="last_name" placeholder="Last Name"
                            value="{{ $initial_order->BorrowerLastName }}">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Borrower Phone Number</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="borrower_phone" id="borrower_phone" placeholder="Phone Number"
                            value="{{ $initial_order->BorrPhone }}">
                    </td>
                </tr>

                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Borrower Email</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="borrower_email" id="borrower_email" placeholder="Email"
                            value="{{ $initial_order->BorrEmail }}">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Agent Name</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="agent_name" id="agent_name" placeholder="Agent Name">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Agent Phone</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="agent_phone" id="agent_phone" placeholder="Agent Phone Number">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Agent Email</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="agent_email" id="agent_email" placeholder="Agent Email">
                    </td>
                </tr>



                <tr>
                    <th class="border bg-blue-500 px-8 py-4 text-left">
                        Subject Property
                    </th>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Loan Number</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="loan_number" id="loan_number" placeholder="Loan Number"
                            value="{{ $initial_order->TransDetailsLoan }}">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Property Address</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="property_address" id="property_address" placeholder="Address"
                            value="{{ $initial_order->SubjectPropertyAddress }}">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Property City</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="property_city" id="property_city" placeholder="City"
                            value="{{ $initial_order->SubjectPropertyCity }}">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Property State</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="property_state" id="property_state" placeholder="State"
                            value="{{ $initial_order->SubjectPropertyState }}">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Property Zip</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="property_zip" id="property_zip" placeholder="ZIP"
                            value="{{ $initial_order->SubjectPropertyZip }}">
                    </td>
                </tr>

                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">County Code</th>
                    <td class="border px-8 py-4">
                        @if (is_null($initial_order->CountyCode))
                            <select id="county_code" name="county_code">
                                <option value=''>Select County</option>
                                <option value='37'>Los Angeles<optionn>
                                <option value='59'>Orange</option>
                                <option value='71'>San Bernardino</option>
                                <option value='73'>San Diego</option>
                                <option value='111'>Ventura</option>
                                <option value='71'>San Bernardino</option>
                                <option value='999'>Other</option>
                            </select>
                        @else
                            {{ $initial_order->CountyCode }}
                        @endif
                    </td>
                </tr>

                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">County Name</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="county_name" id="county_name" placeholder="County Name"
                            value="{{ $initial_order->CountyName }}">
                    </td>
                </tr>

                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Loan Purpoase</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="loan_purpose" id="loan_purpose" placeholder="Loan Purpose"
                            value={{ $initial_order->LoanPurpose }}>
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Occupancy</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="occupancy" id="occupancy" placeholder="Occupancy"
                            value="{{ $initial_order->Occupancy }}">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Loan Type</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="loan_type" id="loan_type" placeholder="Loan Type"
                            value="{{ $initial_order->LoanType }}">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Property Type</th>
                    <td class="border px-8 py-4">
                        @if (is_null($initial_order->PropertyType))
                            <select id="property_type" name="property_type">
                                <option value=''>Select Property Type</option>
                                <option value='Attached-PUD'>Attached-PUD</option>
                                <option value='Attached-Condo'>Attached-Condo</option>
                                <option value='Attached-Multi-Unit'>Attached-Multi-Unit</option>
                            </select>
                        @else
                            {{ $initial_order->PropertyType }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Number of Units</th>
                    <td class="border px-8 py-4">
                        <input type="text" name="number_of_unit" id="number_of_unit" placeholder="Number of Units">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">FHA Case Number
                    <td class="border px-8 py-4">
                        <input type="text" name="fha_case_number" id="fha_case_number" placeholder="FHA Case Number"
                            value="{{ $initial_order->FHACase }}">
                    </td>
                </tr>
                <tr>
                    <th class="border bg-blue-100 px-8 py-4 text-left">Property Size
                    <td class="border px-8 py-4">
                        <input type="radio" id="under" name="property_size" value="under">
                        <label for="under">Under 3000sf</label>
                        <input type="radio" id="over" name="property_size" value="over">
                        <label for="over">Over 3000sf</label>
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
        let county_code_charge = 0
        let number_of_unit_charge = 0
        let property_size_charge = 0
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
            switch (document.getElementById("county_code")) {
                case '73':
                    county_code_charge = '49500';
                    break;
                case '111':
                    county_code_charge = '47000';
                    break;
                case '37':
                    county_code_charge = '45000';
                    break;
                case '59':
                    county_code_charge = '45000';
                    break;
                case '65':
                    county_code_charge = '45000';
                    break;
                case '071':
                    county_code_charge = '45000';
                    break;
                case '037':
                    county_code_charge = '45000';
                    break;
                case '059':
                    county_code_charge = '45000';
                    break;
                case '065':
                    county_code_charge = '45000';
                    break;
                case '071':
                    county_code_charge = '45000';
                    break;
                default:
                    county_code_charge = '55000';
                    break;
            }


            switch (document.getElementById("number_of_unit").value) {
                case '4':
                    number_of_unit_charge = '77000';
                    break;
                case '3':
                    number_of_unit_charge = '72000';
                    break;
                case '2':
                    number_of_unit_charge = '62000';
                    break;
                default:
                    number_of_unit_charge = 0;
                    break;
            }

            let result = parseInt(a1004D_1) + parseInt(a1004D_2) + parseInt(a1007) + parseInt(a216) + parseInt(fha) +
                parseInt(rush) + parseInt(county_code_charge) + parseInt(number_of_unit_charge)
            fee.setAttribute('value', result / 100);
        }
    </script>
@endsection
