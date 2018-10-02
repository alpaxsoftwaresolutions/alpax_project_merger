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
    @import url("https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700");
    @media print{@page {size: landscape}}
    body {
        font-family: 'Raleway', sans-serif;
        background: #fff;
        padding: 20px;
    }

    p {
        font-family: 'Raleway', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #000;
        margin-bottom: -3px;
    }

    .row{
        font-family: 'Raleway', sans-serif;
    }

    h1, h2, h3, h4, h5{
        font-family: 'Raleway';
        font-weight: 800;
    }

    .brand-header{
        margin-bottom: -3px;
    }

    .border-thin {
        border-width: thin !important;
    }

    .border-medium {
        border-width: #000 medium !important;
    }

    .border-thick {
        border-width: thick !important;
    }
    .small-text{
        font-size: 9px;
        margin-left: 0 !important;
    }
    .text-content{
        font-size: 12px;
    }

    .smaller-text{
        font-size: 10px;
        margin-left: 0 !important;
    }

</style>
</head>

<body>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
            <div class="row">
                <img src="{{asset('img/logo/Social_Security_System_(SSS).svg')}}" style="height: 60px;">
                <h3 class="mt-3 ml-1"><span class="align-middle">R-1A</span></h3>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4 text-center">
            <h6 class="brand-header">Republic of the Philippines</h6>
            <h5 class="brand-header">SOCIAL SECURITY SYSTEM</h5>
            <h4 class="brand-header">EMPLOYMENT REPORT</h4>
        </div>

        <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
        </div>
        <small class="small-text">COV-01229 (12-2015)</small>
    </div>

    <div class="row">

        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 border">
            <div class="row border justify-content-start">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 text-center small">
                    THIS FORM MAY BE REPRODUCED AND IS NOT FOR SALE. THIS CAN ALSO BE DOWNLOADED THRU THE SSS WEBSITE AT www.sss.gov.ph
                </div>
            </div>

            <div class="row border justify-content-start">
                <small class="small-text">PLEASE READ THE INSTRUCTIONS AT THE BACK BEFORE FILLING OUT THIS FORM. PRINT ALL INFORMATION IN CAPITAL LETTERS AND <strong>USE BLACK INK ONLY</strong>.</small>
            </div>

            <div class="row border border-medium justify-content-center small">
                <strong class="small-text">PART I - TO BE FILLED OUT BY THE EMPLOYER</strong>
            </div>

            <div class="row">

                <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                    <div class="row text-center">
                        <small class="small-text">EMPLOYER ID NUMBER</small>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 border">
                    <div class="row">
                        <small class="small-text">EMPLOYER NAME</small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                    <div class="row">
                        <small class="small-text">TYPE OF EMPLOYER</small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                    <div class="row">
                        <small class="small-text">TYPE OF REPORT</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-11 col-md-11 col-xs-11 col-sm-11 border">
                    <div class="row">
                        <small class="small-text">ADDRESS <span class="ml-5">(RM./FLR./UNIT NO. & BLDG. NAME)</span> <span class="ml-5">(STREET NAME)</span> <span class="ml-5">(SUBDIVISION)</span> <span class="ml-5">(BARANGAY/DISTRICT/LOCALITY)</span> <span class="ml-5">(CITY/MUNICIPALITY)</span><span class="ml-5">(PROVINCE)</span></small>
                    </div>
                </div>

                <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                    <div class="row">
                        <small class="small-text">ZIP CODE</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-md-10 col-xs-10 col-sm-10 border">
                    <div class="row">
                        <small class="small-text">FOREIGN ADDRESS (IF APPLICABLE)</small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                    <div class="row">
                        <small class="small-text">COUNTRY</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                    <div class="row">
                        <small class="small-text">TELEPHONE NO. <span class="smaller-text">(AREA CODE TEL NO.)</span></small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                    <div class="row">
                        <small class="small-text">MOBILE/CELLPHONE NUMBER</small>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                    <div class="row">
                        <small class="small-text">E-MAIL ADDRESS</small>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                    <div class="row">
                        <small class="small-text">WEBSITE</small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                    <div class="row">
                        <small class="small-text">TAX IDENTIFICATION NUMBER</small>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                    <div class="row justify-content-center text-center">
                        <small class="small-text">SS NUMBER</small>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                    <div class="row justify-content-center text-center">
                        <small class="small-text">NAME OF EMPLOYEE</small>
                    </div>
                </div>

                <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                    <div class="row justify-content-center text-center">
                        <small class="small-text">DATE OF BIRTH</small>
                    </div>
                </div>

                <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                    <div class="row justify-content-center text-center">
                        <small class="small-text">DATE OF EMPLOYMENT</small>
                    </div>
                </div>

                <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                    <div class="row justify-content-center text-center">
                        <small class="small-text">DATE OF SEPARATION</small>
                    </div>
                </div>

                <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                    <div class="row justify-content-center text-center">
                        <small class="small-text">MONTHLY COMPENSATION</small>
                    </div>
                </div>

                <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                    <div class="row justify-content-center  text-center">
                        <small class="small-text">POSITION / <br> NATURE OF WORK</small>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                    <div class="row justify-content-center text-center">
                        <small class="small-text">FOR SSS USE</small>
                    </div>
                </div>
            </div>

            <!-- Employee Template -->

            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row">
                                <span class="text-content">0|2|0|3|6|9|8|2|6|4</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-xs-3 col-sm-3 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1 border">
                            <div class="row justify-content-center text-center">
                                <span class="text-content"></span>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 border">
                            <div class="row justify-content-center">
                                <span class="text-content"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- /Employee Template -->

            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 border">
                    <div class="row">                    
                        <small class="small-text">TOTAL <br> NUMBER OF REPORTED EMPLOYEES</small>
                        15
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 border">
                    <div class="row">
                        <small class="small-text">NAME OF OWNER/MANAGING PARTNER/ <br> PRESIDENT/CHAIRMAN/CORPORATE SECRETARY</small>
                        <div class="col-lg-12 justify-content-center text-center mt-3">
                            <h6>ISABELA S. LUIG</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 border">
                    <div class="row justify-content-center text-center">
                        <small class="small-text">I certify that the information provided in this form are true and correct.</small>

                        <div class="col-xs-4">
                            <small class="small-text border-top">PRINTED NAME</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/solid.min.js')}}"></script>

</html>