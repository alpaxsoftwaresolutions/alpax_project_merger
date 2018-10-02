<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <script type="text/javascript" src="{{asset('js/solid.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/animate.min.js')}}"></script>

    <title>{{config('app.name', 'Merger')}}</title>

    <style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700");
    body {
        font-family: 'Poppins', sans-serif;
        background: #fff;
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #000;
        margin-bottom: -3px;
    }

    .row{
        font-family: 'Poppins', sans-serif;
    }

    h1, h2, h3, h4, h5{
        font-family: 'Poppins';
        font-weight: 800;
    }

    .brand-header{
        margin-bottom: -2px;
    }
</style>
</head>

<body>

    <div class="container mt-4 mb-4">
       <div class="row justify-content-center py-10">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-center">
            <div class="d-flex">
                <div>
                    <img src="{{asset('img/logo/soliman logo.png')}}" style="height: 70px;">
                </div>

                <div class="ml-auto">
                    <h6 class="brand-header">SOLIMAN SECURITY SERVICES INC.</h6>
                    <h6 class="brand-header">Soliman Centre Building</h6>
                    <h6 class="brand-header">2182 Don Chino Roces Avenue, Makati City</h6>
                    <h6 class="brand-header">Tel. No. 892-8881</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 mb-4">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="d-flex">
                <div>
                    <h6>DUTY DETAIL ORDER No.</h6>
                    <h6><span id="duty_details_order_no">2018-09-0001</span></h6>
                </div>

                <div class="ml-auto">
                    <h6>Printed Date</h6>
                    <h6 class="text-primary text-right"><?php echo date("F d, Y"); ?></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-2 mb-2">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h6 class="font-weight-bold">1. References:</h6>
            <p class="text-dark ml-4">a. Section 4, Rule VII of the 2003 Revised Implementing Rules and Regulations of RA 5487, as amended; and</p>
            <p class="text-dark ml-4">b. RA 10591, Comprehensive Firearms and Ammuniation Regulation Act.</p>

            <br>

            <h6 class="font-weight-bold">2. Purpose of Details: <span class="text-primary">Post Security Service Duties</span></h6>

            <br>

            <h6 class="font-weight-bold">
                3. Duration / Inclusive Dates of Details: <span class="text-primary">From</span><span id="from_date" class="text-primary"></span>  <span class="text-primary"> To </span> <span id="to_date" class="text-primary"></span>
            </h6>

            <br>

            <p class="text-justify"><span class="font-weight-bold">4.</span> The following security guards (SGs) are hereby assigned to render <span class="font-weight-bold">post security service duties in place/s indicated and are hereby issued agency / company owned firearms (FAs):</span></p>

        </div>
    </div>

    <div class="row mt-2 mb-2">
        <table class="table table-bordered table-md mt-3 table-responsive" style="font-size: 12px;">
            <thead class="text-center">
                <tr>
                    <th class="align-middle" scope="col" width="15%" rowspan="2">NAME OF GUARD/S</th>
                    <th class="align-middle" scope="col" width="12%" rowspan="2" style="text-align: center">DESIGNATION</th>
                    <th class="align-middle" scope="col" width="15%" rowspan="2">PLACE OF GUARD DUTY</th>
                    <th class="align-middle" scope="col" width="8%" rowspan="2">TIME OF SHIFT</th>
                    <th class="align-middle" scope="col" width="50%"  colspan="4">FIREARMS INFORMATION</th>
                </tr>
                <tr>
                    <th class="align-middle" scope="col">Kind</th>
                    <th class="align-middle" scope="col">Make-Cal</th>
                    <th class="align-middle" scope="col">FAs Serial No.</th>
                    <th class="align-middle" scope="col">Validity of FAs License</th>
                </tr>
            </thead>

            <tbody class="text-primary">
                <tr>
                    <td>Cuevas, Mark Dherrick</td>
                    <td class="text-center">Duty Guard</td>
                    <td class="text-center">MOF Company (Subic), INC Bldg. 1460 Argonaut Highway Cubi Point, Subic Bay Freeport Zone, Olongapo City</td>
                    <td class="text-center"></td>
                    <td class="text-center">REVOLVER 15 rds</td>
                    <td class="text-center">SMITH WESSON - .38</td>
                    <td class="text-center">B45105</td>
                    <td class="text-center">May 12, 2020</td>
                </tr>
            </tbody>
        </table>
    </div>

     <div class="row mt-2 mb-2">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h6 class="font-weight-bold">5. Specific Instructions:</h6>

            <p class="ml-4 text-justify">
                a. Security Guards in this Duty Detail Order (DDO) must be in SG prescribed uniform and shall carry the issued firearm onlywhen they are in actual performance of guard duty and within the compound of the establishment or property of their client in the place and time specified in this DDO.
            </p>

            <br>

            <p class="ml-4 text-justify">
                b. This Duty Detail Order is not an authority for security guards to carry their issued firearm outside the premises of the specified post / station nor shall the firearm described herein leave client post / station. Except under the following circumstances while the security guards are in the following conduction security service duties, a seperate DDO shall be issued with a duration of not more than <span class="font-weight-bold">twenty-four (24) hours: </span> 
            </p>

            <br>

            <p class="ml-5 text-justify">
                i. While escorting big amount of cash or valuables outside its jurisdiction or area of operation with or without the use of armored vehicles;
            </p>

            <br>

            <p class="ml-5 text-justify">
                ii. When trasporting agency / company license firearms from agency / company office vault to post and back for posting, for routine replacement of firearms, repair and recall of PSA firearms.
            </p>

            <br>

            <p class="ml-4 text-justify">
                c. The transport of FAs for routine rotation, posting, repair, etc. beyond 24 hours will require the appropriate Transport Permit from FEO;
            </p>

            <br>

            <p class="ml-4 text-justify">
                d. The issued firearms due to the guards are licensed and a copy must be in the possession of the guards.
            </p>

            <br>

            <h6 class="font-weight-bold">6. For strict compliance.</h6>

        </div>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="d-flex">

                <div class="">
                    <img src="{{asset('img/digital_signatures/dupaya_signature.png')}}" style="height: 80px;">
                    <h6 class="text-primary font-weight-bold">ATTY. JULIANO R. DUPAYA, JR.</h6>
                    <h6 class="font-weight-bold">Authorized Bonded Firearms Custodian</h6>
                    <p style="font-size: 12px; margin-top: -3px;">(Signature over printed name)</p>
                </div>

                <div class="ml-auto">
                    <img src="{{asset('img/digital_signatures/dupaya_signature.png')}}" style="height: 80px;" alt="digital_signature">
                    <h6 class="text-primary font-weight-bold"><span id="signatory_name">RICHARD MACATLANG</span></h6>
                    <h6 class="font-weight-bold"><span id="signatory_position">OPERATIONS MANAGER</span></h6>
                    <p style="font-size: 12px; margin-top: -3px;">(Signature over printed name)</p>
                </div>

            </div>
        </div>
    </div>

</div>

</body>

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/solid.min.js')}}"></script>

</html>