{{ $initial_order }}
<div class="container">
    <form id="basic_math" enctype='multipart/form-data' name="basic_math" method="post">
        <table>
            <tr>
                <td COLSPAN=2>
                    <H2>Appraisal Order</H2>
                </td>
            </tr>
            <tr>
                <td>Date</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="testdatepicker" NAME='DATE'
                        VALUE="{{ date('m/d/Y') }}">
                </td>
            </tr>

            <tr>
                <td>Broker Email</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="ORDERBY" NAME='ORDERBY' size=15>
                </td>
            </tr>

            <tr>
                <td>Company Name</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="COMPANYNAME" NAME='COMPANYNAME'
                        size=15>
                </td>
            </tr>

            <tr>
                <td>Tel</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="COMPANYPHONE" NAME='COMPANYPHONE'
                        size=15>
                </td>
            </tr>

            <tr>
                <td>Fax</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="COMPANYFAX" NAME='COMPANYFAX'
                        VALUE='' size=15>
                </td>
            </tr>

            <tr>
                <td COLSPAN=2>
                    <H2>Borrower Contact Information</H2>
                </td>
            </tr>

            <tr>
                <td>Borrower' Name</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="BORROWER" NAME='BORROWER' size=15
                        value="{{ $initial_order->BorrowerFirstName }}, {{ $initial_order->BorrowerLastNAme }}">
                </td>
            </tr>

            <tr>
                <td>Borrower' Phone</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="BORRPHONE" NAME='BORRPHONE' size=15>
                </td>
            </tr>

            <tr>
                <td>Borrower' Email</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="BORREMAIL" NAME='BORREMAIL' size=15>
                </td>
            </tr>

            <tr>
                <td>Agent Name</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="AGENT" NAME='AGENT' size=15>
                </td>
            </tr>

            <tr>
                <td>Agent Phone</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="AGENTPHONE" NAME='AGENTPHONE'
                        size=15>
                </td>
            </tr>

            <tr>
                <td>Agent Email</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="AGENTEMAIL" NAME='AGENTEMAIL'
                        size=15>
                </td>
            </tr>
        </TABLE>

        <TABLE class="table">

            <tr>
                <td COLSPAN=2>
                    <H2>Subject Property</H2>
                </td>
            </tr>

            <tr>
                <td>Loan Number</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="PACLOAN" NAME='PACLOAN' size=15>
                </td>
            </tr>

            <tr>
                <td>Subject Address</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="ADDRESS" NAME='ADDRESS' size=15>
                </td>
            </tr>

            <tr>
                <td>Subject City</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="CITY" NAME='CITY' size=15>
                </td>
            </tr>

            <tr>
                <td>Subject State</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="STATE" NAME='STATE' size=15>
                </td>
            </tr>

            <tr>
                <td>Subject Zip</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="ZIP" NAME='ZIP' size=15>
                </td>
            </tr>
            <tr>
                <td>County Name</td>
                <td>
                    <SELECT class="form-control input-sm text-right" NAME="CountyCode">
                        <OPTION value=''>Select County</OPTION>
                        <OPTION value='37'>Los Angeles</OPTION>
                        <OPTION value='59'>Orange</OPTION>
                        <OPTION value='71'>San Bernardino</OPTION>
                        <OPTION value='73'>San Diego</OPTION>
                        <OPTION value='111'>Ventura</OPTION>
                        <OPTION value='71'>San Bernardino</OPTION>
                        <OPTION value='999'>Other</OPTION>
                    </SELECT>
                </td>
            </tr>

            <INPUT TYPE="HIDDEN" NAME='CountyCode'>
            <tr>
                <td>County Name</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="COUNTYNAME" NAME='COUNTYNAME'
                        size=15>
                </td>
            </tr>

            <tr>
                <td>Loan Purpose</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="LOANPURPOSE" NAME='LOANPURPOSE'
                        size=15>
                </td>
            </tr>

            <tr>
                <td>Occupancy</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="OCCUPANCY" NAME='OCCUPANCY' size=15>
                </td>
            </tr>
            <tr>
                <td>Loan Type</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="LOANTYPE" NAME='LOANTYPE' size=15>
                </td>
            </tr>

            <tr>
                <td>Property Type</td>
                <td>
                    <SELECT class="form-control input-sm text-right" NAME="PROPERTYTYPE">
                        <OPTION value=''>Select Property Type</OPTION>
                        <OPTION value='Attached-PUD'>Attached-PUD</OPTION>
                        <OPTION value='Attached-Condo'>Attached-Condo</OPTION>
                        <OPTION value='Attached-Multi-Unit'>Attached-Multi-Unit</OPTION>
                    </SELECT>
                </td>
            </tr>
            <tr>
                <td>Property Type</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="PROPERTYTYPE" NAME='PROPERTYTYPE'
                        size=15>
                </td>
            </tr>


            <tr>
                <td>Number of Unit</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="UNITNUMBER" NAME='UNITNUMBER'
                        size=15>
                </td>
            </tr>

            <tr>
                <td>FHA Case Number</td>
                <td>
                    <INPUT TYPE="TEXT" class="form-control input-sm text-right" id="FHACASE" NAME='FHACASE' size=15>
                </td>
            </tr>
            <tr>
                <td>Larger than 3,000sf?</td>
                <td>
                    <input type="radio" name="SizeCharge" value="Y">Yes
                    <input type="radio" name="SizeCharge" value="N">No
                </td>
            </tr>
        </TABLE>

        <input type="submit" class="btn" name="signup-form-submit" value="ORDER"> <a
            href="javascript:history.go(-1)" class="btn">Cancel</a>
    </form>
</div>
