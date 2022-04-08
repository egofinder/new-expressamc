@extends('layouts.master')

@section('content')
    <form action="/guest-appraisals" method="post" enctype="multipart/form-data" id="form">
        <input type="hidden" name="loan_number" id="loan_number" value="{{ $loan->TransDetailsLoan }}">
        <div class="white py-16">
            <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                <h2 class="mb-12 text-center text-2xl font-bold text-gray-900 md:text-4xl">Appraisal Order From</h2>
                <div class="grid gap-4 md:grid-rows-2 lg:grid-cols-2">
                    <div class="row-span-2 rounded-xl border border-gray-100 bg-gray-50 p-6 text-center sm:p-8">
                        <div class="flex flex-col justify-center space-y-4">
                            <h1 class="mb-12 text-center text-2xl font-bold text-blue-500 md:text-4xl">
                                Broker & Agent Infomation</h1>

                            <div class="grid grid-cols-2 gap-1">
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Order Date</div>
                                <div class="mb-2 text-center text-xl font-bold">
                                    <input type="text" name="order_date" id="order_date" value="{{ date('Y-m-d') }}"
                                        readonly>
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Broker Email</div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="order_by" id="order_by" placeholder="Broker Email" required>
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Company Name
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="company" id="company" placeholder="Company Name" required>
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Phone Number
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="broker_phone" id="broker_phone" placeholder="Phone Number"
                                        required>
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Fax Number
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="broker_fax" id="broker_fax" placeholder="Fax Number" required>
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Agent Name
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="agent_name" id="agent_name" placeholder="Agent Name">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Agent Phone Number
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="agent_phone" id="agent_phone" placeholder="Agent Phone Number">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Agent Email
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="agent_email" id="agent_email" placeholder="Agent Email">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-2 rounded-xl border border-gray-100 bg-gray-50 p-6 text-center sm:p-8">
                        <div class="flex flex-col justify-center space-y-4">
                            <h1 class="mb-12 text-center text-2xl font-bold text-blue-500 md:text-4xl">
                                Borrower Contact Information</h1>
                            <div class="grid grid-cols-2 gap-1">
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">First Name</div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="first_name" id="first_name" placeholder="First Name"
                                        value="{{ $loan->BorrowerFirstName }}">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Last Name
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="last_name" id="last_name" placeholder="Last Name"
                                        value="{{ $loan->BorrowerLastName }}">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Borrower Phone Number
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="borrower_phone" id="borrower_phone" placeholder="Phone Number"
                                        value="{{ $loan->BorrPhone }}">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Borrower Email
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="borrower_email" id="borrower_email" placeholder="Email"
                                        value="{{ $loan->BorrEmail }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-2 rounded-xl border border-gray-100 bg-gray-50 p-6 text-center sm:p-8">
                        <div class="flex flex-col justify-center space-y-4">
                            <h1 class="mb-12 text-center text-2xl font-bold text-blue-500 md:text-4xl">
                                Property Information</h1>
                            <div class="grid grid-cols-2 gap-1">
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">Property Address</div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="property_address" id="property_address" placeholder="Address"
                                        value="{{ $loan->SubjectPropertyAddress }}">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Property City
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="property_city" id="property_city" placeholder="City"
                                        value="{{ $loan->SubjectPropertyCity }}">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Property State
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="property_state" id="property_state" placeholder="State"
                                        value="{{ $loan->SubjectPropertyState }}">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Property Zip
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="property_zip" id="property_zip" placeholder="ZIP"
                                        value="{{ $loan->SubjectPropertyZip }}">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    County Name
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="county_name" id="county_name" placeholder="County Name"
                                        value="{{ $loan->CountyName }}">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    County Code
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    @if (is_null($loan->CountyCode))
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
                                        {{ $loan->CountyCode }}
                                    @endif
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Loan Purpose
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="loan_purpose" id="loan_purpose" placeholder="Loan Purpose"
                                        value={{ $loan->LoanPurpose }}>
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Occupancy
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="occupancy" id="occupancy" placeholder="Occupancy"
                                        value="{{ $loan->Occupancy }}">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Property Type
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    @if (is_null($loan->PropertyType))
                                        <select id="property_type" name="property_type">
                                            <option value=''>Select Property Type</option>
                                            <option value='Attached-PUD'>Attached-PUD</option>
                                            <option value='Attached-Condo'>Attached-Condo</option>
                                            <option value='Attached-Multi-Unit'>Attached-Multi-Unit</option>
                                        </select>
                                    @else
                                        {{ $loan->PropertyType }}
                                    @endif
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Number Of Units
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="number_of_unit" id="number_of_unit"
                                        placeholder="Number of Units">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    FHA Case Number
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="fha_case_number" id="fha_case_number"
                                        placeholder="FHA Case Number" value="{{ $loan->FHACase }}">
                                </div>

                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Property Size
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <select
                                        class="focus:shadow-outline h-10 appearance-none rounded-lg border pl-3 pr-6 text-base placeholder-gray-600"
                                        name="property_size" id="property_size">
                                        <option value="Over">Over 3000sq</option>
                                        <option value="Under">Under 3000sq</option>
                                    </select>
                                </div>

                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Loan Type
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input type="text" name="loan_type" id="loan_type" placeholder="Loan Type"
                                        value="{{ $loan->LoanType }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-span-2 rounded-xl border border-gray-100 bg-gray-50 p-6 text-center sm:p-8">
                        <div class="flex flex-col justify-center space-y-4">
                            <h1 class="mb-12 text-center text-2xl font-bold text-blue-500 md:text-4xl">
                                Options</h1>
                            <div class="grid grid-cols-2 gap-1">
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Order a1004D_1
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input
                                        class="form-check-input float-center mt-1 mr-2 h-4 w-4 cursor-pointer appearance-none rounded-sm border border-gray-300 bg-white bg-contain bg-center bg-no-repeat align-top transition duration-200 checked:border-blue-600 checked:bg-blue-600 focus:outline-none"
                                        type="checkbox" id="a1004D_1" name="a1004D_1" value="10000">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Order a1004D_2
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input
                                        class="form-check-input float-center mt-1 mr-2 h-4 w-4 cursor-pointer appearance-none rounded-sm border border-gray-300 bg-white bg-contain bg-center bg-no-repeat align-top transition duration-200 checked:border-blue-600 checked:bg-blue-600 focus:outline-none"
                                        type="checkbox" id="a1004D_2" name="a1004D_2" value="15000">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Order a1007
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input
                                        class="form-check-input float-center mt-1 mr-2 h-4 w-4 cursor-pointer appearance-none rounded-sm border border-gray-300 bg-white bg-contain bg-center bg-no-repeat align-top transition duration-200 checked:border-blue-600 checked:bg-blue-600 focus:outline-none"
                                        type="checkbox" id="a1007" name="a1007" value="5000">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Order a216
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input
                                        class="form-check-input float-center mt-1 mr-2 h-4 w-4 cursor-pointer appearance-none rounded-sm border border-gray-300 bg-white bg-contain bg-center bg-no-repeat align-top transition duration-200 checked:border-blue-600 checked:bg-blue-600 focus:outline-none"
                                        type="checkbox" id="a216" name="a216" value="5000">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Order FHA
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input
                                        class="form-check-input float-center mt-1 mr-2 h-4 w-4 cursor-pointer appearance-none rounded-sm border border-gray-300 bg-white bg-contain bg-center bg-no-repeat align-top transition duration-200 checked:border-blue-600 checked:bg-blue-600 focus:outline-none"
                                        type="checkbox" id="FHA" name="FHA" value="10000">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Order Rush Process
                                </div>
                                <div class="mb-2 text-center text-xl">
                                    <input
                                        class="form-check-input float-center mt-1 mr-2 h-4 w-4 cursor-pointer appearance-none rounded-sm border border-gray-300 bg-white bg-contain bg-center bg-no-repeat align-top transition duration-200 checked:border-blue-600 checked:bg-blue-600 focus:outline-none"
                                        type="checkbox" id="Rush" name="Rush" value="15000">
                                </div>
                                <div class="mb-2 bg-gray-300 text-center text-xl font-bold">
                                    Total Appraisal Fee
                                </div>
                                <input type="text"
                                    class="focus:shadow-outline mb-3 appearance-none rounded border py-2 px-3 text-center font-bold leading-tight text-gray-700 shadow focus:outline-none"
                                    name="fee" id="fee" placeholder="Fee" value="550" readonly />
                            </div>
                        </div>
                    </div>
                </div>
    </form>
    <button class="rounded-full bg-blue-500 py-2 px-4 font-bold text-white hover:bg-blue-700" type="submit"
        form="form">Order</button>
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
