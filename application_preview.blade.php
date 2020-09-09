<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Application Preview</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="img/LOGO%20Asset%2013ldpi.png">
    <style>
        * {
            box-sizing: border-box;
        }

        /* page */

        html {
            font: 16px/1 'Open Sans', sans-serif;
            overflow: auto;
            padding: 0.5in;
        }

        html {
            background: #999;
            cursor: default;
        }

        body {
            box-sizing: border-box;
           /*  height: 11in; */
            margin: 0 auto;
            overflow: hidden;
            padding: 0.5in;
            width: 8.5in;
        }

        body {
            background: #FFF;
            border-radius: 1px;
            box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
        }

        @media print {
            * {
                -webkit-print-color-adjust: exact;
            }

            html {
                background: none;
                padding: 0;
            }

            body {
                box-shadow: none;
                margin: 0;
            }

            span:empty {
                display: none;
            }

            .add,
            .cut {
                display: none;
            }
        }

        @page {
            margin: 0;
        }


        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-3 {
            width: 25%;
            padding: 0 15px;
        }

        .col-6 {
            width: 50%;
            padding: 0 15px;
        }
        .col{
            width: 100%;
            padding: 0 15px;
        }

        .college-logo img {
            max-width: 100%;
        }

        .student-img {
            max-width: 35mm;
            height: 45mm;
            margin: 0 auto;
            border: 1px solid gray;
            text-align: center;
        }

        .student-img img {
            height: 100%;
            width: 100%;
        }

        .college-name {
            text-align: center;
        }

        .college-name h2 {
            margin: 0;
            margin-bottom: 13px
        }

        .application-header {
            border-bottom: 2px solid black;
            padding-bottom: 10px;
        }

        p {
            font-size: 15px;
        }

        .college-name p {
            margin: 0;
            margin-bottom: 6px;

        }

        .college-name .college-location {
            font-weight: bold;
        }
        table{
            border-collapse: collapse;
        }
        td, th{
           padding: 3px; 
        }
    </style>
</head>

<body>

    <!--start application area-->
    <section class="application-header">
        <div class="row">
            <div class="col-3">
                <div class="college-logo">
                     <img src="{{ asset('public/fontend/websetting/') }}/{{ $sitesetting->logo }}" alt="Image">
                </div>
            </div>
            <div class="col-6">
                <div class="college-name" style="margin-top: 15px">
                    <h2>{{ $sitesetting->schoolname }}</h2>
                    <p class="college-location">{{ $sitesetting->localaddress }}</p>
                    <p style="font-size: 14px">CODE : 5204 (Honours), 7250 (College)</p>
                    <p style="font-size: 14px">EIIN : {{ $sitesetting->eiin }}</p>
                </div>
            </div>
            <div class="col-3">
                <div class="student-img">
                    <img src="{{   asset('public/fontend/images/user.jpg') }}" alt="Student Photo">
                </div>
            </div>
        </div>
    </section>

    <section class="basic-information">
        <h4 style="margin: 10px 0;">Basic Information <span style="float: right">College Copy</span></h4>
        <table border="1" style="width: 100%;">
            <tr>
                <th style="width: 20%;text-align:left;">Application ID</th>
                <td colspan="3"> {{ $student->student_sid }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Recipt No</th>
                <td>{{ $student->recipt_no }}</td>
                <th style="width: 20%;text-align:left;">Amount</th>
                <td>{{ $student->amount }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Name</th>
                <td>{{ $student->name }}</td>
                <th style="width: 20%;text-align:left;">Gender</th>
                <td>{{ $student->gender }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Father's Name</th>
                <td>{{ $student->father }}</td>
                <th style="width: 20%;text-align:left;">Religion</th>
                <td>{{ $student->religion }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Mother's Name</th>
                <td>{{ $student->mother }}</td>
                <th style="width: 20%;text-align:left;">Nationality</th>
                <td>{{ $student->nationality }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">BirthDay</th>
                <td>{{ $student->birthday }}</td>
                <th style="width: 20%;text-align:left;">Blood Group</th>
                <td>{{ $student->bgroup }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Care Of</th>
                <td>{{ $student->careof }}</td>
                <th style="width: 20%;text-align:left;">Marital Status</th>
                <td>{{ $student->maritalstatus }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Personal Number</th>
                <td>{{ $student->ownmobile }}</td>
                <th style="width: 20%;text-align:left;">Guardian Number</th>
                <td>{{ $student->gradianmobile }}</td>
            </tr>
            <tr>
                <th colspan="2" style="text-align: left">Father's/Mother's/Guardian's Annual Income</th>
                <td colspan="2">{{ $student->gradianincome }}</td>
            </tr>
            <tr>
                <th colspan="2" style="text-align: left">Occupation</th>
                <td colspan="2">{{ $student->occupation }}</td>
            </tr>
        </table>
        <h4 style="margin: 10px 0;">Academic Information</h4>
        <table border="1" style="width: 100%;">
            <tr>
                <th style="width: 20%;text-align:left;">Class</th>
                <td>{{ $student->class_name }}</td>
                <th style="width: 20%;text-align:left;">Session</th>
                <td>{{ $student->session_name }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Subject</th>
                <td>{{  $student->groupes_name }}</td>
                <th style="width: 20%;text-align:left;">Type</th>
                <td> 
                    @if($student->student_status_type==1)
                     Regular
                    @elseif($student->student_status_type==2)
                    Irregular
                    @else
                    TC
                    @endif
                </td>
            </tr>
        </table>

        <table border="1" style="width: 100%; margin-top: 10px;">
            <tr>
                <th style="text-align:left;">SSC/Equivalent</th>
                <th style="text-align:left;">Roll</th>
                <td>{{ $student->preroll }}</td>
                <th style="text-align:left;">Board</th>
                <td>{{ $student->pre_board }}</td>
                <th style="text-align:left;">Year</th>
                <td>{{ $student->pre_session }}</td>
                <th style="text-align:left;">GPA</th>
                <td>{{ $student->preresult }}</td>
            </tr>
            <tr>
                <th style="text-align:left;">HSC/Equivalent</th>
                <th style="text-align:left;">Roll</th>
                <td></td>
                <th style="text-align:left;">Board</th>
                <td></td>
                <th style="text-align:left;">Year</th>
                <td></td>
                <th style="text-align:left;">GPA</th>
                <td></td>
            </tr>

        </table>
        <table border="1" style="width: 100%; margin-top: 10px;">
            <tr style="background: #ddd">
                <th style="text-align:left;" colspan="4">Permanent Address</th>
                <th style="text-align:left;" colspan="4">Present Address</th>
            </tr>
            <tr>
                 
                <td style="width: 50%;" colspan="4">{{ $student->permanentaddress }}</td>
                <td style="width: 50%;" colspan="4">{{ $student->address }}</td>
                
            </tr>
            

        </table>
        <h4 style="margin: 10px 0;">HSC Subject List With HSC Subject Code List Seience, Arts, Commerce:</h4>

        <table border="1" style="width: 100%; margin-top: 10px;">
            <tr>
                <th style="text-align:left; width: 25%;">Compulsory  Subject</th>
                <td>
                    @foreach($commonsubject as $subject)
                        <span style="margin-right: 7px;">{{ $subject->subject->name }}</span> <br>
                    @endforeach
 
                   
                </td>
            </tr>
            <tr>
                <th style="text-align:left; width: 25%">Science</th>
                <td>
                    @foreach($groupsubject as $subject)
                        <span style="margin-right: 7px;">{{ $subject->subject->name }}</span> <br>
                    @endforeach


                </td>
            </tr>
            <tr>
                <th style="text-align:left; width: 25%">Optional Subject</th>
                <td>
                   @foreach($optionalsubject as $subject)
                        <span style="margin-right: 7px;">{{ $subject->subject->name }}</span> <br>
                    @endforeach
                </td>

            </tr>
        </table>
        <div class="row" style="margin-top: 35px;">
            <div class="col-6">
                <h4 style="border-top: 1px dotted black; padding-top:3px;width:60%;">Signature of the student</h4>
            </div>
            <div class="col-6">
                <h4 style="border-top: 1px dotted black; padding-top:3px;width:70%; text-align: right;">Signature of the Dept. Head</h4>
            </div>
        </div>
        <div class="row" style="margin-top: 15px; text-align: right;">
           <div class="col-6">
               
           </div>
            <div class="col-6">
                <h4 style="border-top: 1px dotted black; padding-top:3px;width:82%;">Signature of the college principal</h4>
            </div>
        </div>
    </section>
    <!--end application area--> 

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <!--start application area-->
    <section class="application-header">
        <div class="row">
            <div class="col-3">
                <div class="college-logo">
                    <img src="{{ asset('public/fontend/websetting/') }}/{{ $sitesetting->logo }}" alt="Image">
                </div>
            </div>
            <div class="col-6">
                <div class="college-name" style="margin-top: 15px">
                    <h2>{{ $sitesetting->schoolname }}</h2>
                    <p class="college-location">{{ $sitesetting->localaddress }}</p>
                    <p style="font-size: 14px">CODE : 5204 (Honours), 7250 (College)</p>
                    <p style="font-size: 14px">EIIN : {{ $sitesetting->eiin }}</p>
                </div>
            </div>
            <div class="col-3">
                <div class="student-img">
                    <img src="{{   asset('public/fontend/images/user.jpg') }}" alt="Student Photo">
                </div>
            </div>
        </div>
    </section>

    <section class="basic-information">
        <h4 style="margin: 10px 0;">Basic Information <span style="float: right">Student Copy</span></h4>
        <table border="1" style="width: 100%;">
            <tr>
                <th style="width: 20%;text-align:left;">Application ID</th>
                <td colspan="3"> {{ $student->student_sid }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Recipt No</th>
                <td>{{ $student->recipt_no }}</td>
                <th style="width: 20%;text-align:left;">Amount</th>
                <td>{{ $student->amount }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Name</th>
                <td>{{ $student->name }}</td>
                <th style="width: 20%;text-align:left;">Gender</th>
                <td>{{ $student->gender }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Father's Name</th>
                <td>{{ $student->father }}</td>
                <th style="width: 20%;text-align:left;">Religion</th>
                <td>{{ $student->religion }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Mother's Name</th>
                <td>{{ $student->mother }}</td>
                <th style="width: 20%;text-align:left;">Nationality</th>
                <td>{{ $student->nationality }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">BirthDay</th>
                <td>{{ $student->birthday }}</td>
                <th style="width: 20%;text-align:left;">Blood Group</th>
                <td>{{ $student->bgroup }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Care Of</th>
                <td>{{ $student->careof }}</td>
                <th style="width: 20%;text-align:left;">Marital Status</th>
                <td>{{ $student->maritalstatus }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Personal Number</th>
                <td>{{ $student->ownmobile }}</td>
                <th style="width: 20%;text-align:left;">Guardian Number</th>
                <td>{{ $student->gradianmobile }}</td>
            </tr>
            <tr>
                <th colspan="2" style="text-align: left">Father's/Mother's/Guardian's Annual Income</th>
                <td colspan="2">{{ $student->gradianincome }}</td>
            </tr>
            <tr>
                <th colspan="2" style="text-align: left">Occupation</th>
                <td colspan="2">{{ $student->occupation }}</td>
            </tr>
        </table>
        <h4 style="margin: 10px 0;">Academic Information</h4>
        <table border="1" style="width: 100%;">
            <tr>
                <th style="width: 20%;text-align:left;">Class</th>
                <td>{{ $student->class_name }}</td>
                <th style="width: 20%;text-align:left;">Session</th>
                <td>{{ $student->session_name }}</td>
            </tr>
            <tr>
                <th style="width: 20%;text-align:left;">Subject</th>
                <td>{{  $student->groupes_name }}</td>
                <th style="width: 20%;text-align:left;">Type</th>
                <td> 
                    @if($student->student_status_type==1)
                     Regular
                    @elseif($student->student_status_type==2)
                    Irregular
                    @else
                    TC
                    @endif
                </td>
            </tr>
        </table>

        <table border="1" style="width: 100%; margin-top: 10px;">
            <tr>
                <th style="text-align:left;">SSC/Equivalent</th>
                <th style="text-align:left;">Roll</th>
                <td>{{ $student->preroll }}</td>
                <th style="text-align:left;">Board</th>
                <td>{{ $student->prereg }}</td>
                <th style="text-align:left;">Year</th>
                <td>{{ $student->pre_session }}</td>
                <th style="text-align:left;">GPA</th>
                <td>{{ $student->preresult }}</td>
            </tr>
            <tr>
                <th style="text-align:left;">HSC/Equivalent</th>
                <th style="text-align:left;">Roll</th>
                <td></td>
                <th style="text-align:left;">Board</th>
                <td></td>
                <th style="text-align:left;">Year</th>
                <td></td>
                <th style="text-align:left;">GPA</th>
                <td></td>
            </tr>

        </table>
        <table border="1" style="width: 100%; margin-top: 10px;">
            <tr style="background: #ddd">
                <th style="text-align:left;" colspan="4">Permanent Address</th>
                <th style="text-align:left;" colspan="4">Present Address</th>
            </tr>
            <tr>
                 
                <td style="width: 50%;" colspan="4">{{ $student->permanentaddress }}</td>
                <td style="width: 50%;" colspan="4">{{ $student->address }}</td>
                
            </tr>
            

        </table>
        <h4 style="margin: 10px 0;">HSC Subject List With HSC Subject Code List Seience, Arts, Commerce:</h4>

        <table border="1" style="width: 100%; margin-top: 10px;">
            <tr>
                <th style="text-align:left; width: 25%;">Common Subject</th>
                <td>
                    <span style="margin-right: 7px;">1. Bangla</span>
                    <span style="margin-right: 7px;">2. English</span>
                    <span style="margin-right: 7px;">3. Information and communications technology (ICT)</span>
                </td>
            </tr>
            <tr>
                <th style="text-align:left; width: 25%">Science</th>
                <td>
                    <span style="margin-right: 7px;">1. Physics</span>
                    <span style="margin-right: 7px;">2. Chemistry</span>
                    <span style="margin-right: 7px;">3. Biology</span>
                </td>
            </tr>
            <tr>
                <th style="text-align:left; width: 25%">Optional Subject</th>
                <td>
                <span style="margin-right: 7px;">Higher Maths</span>
                </td>

            </tr>
        </table>
        <div class="row" style="margin-top: 35px;">
            <div class="col-6">
                <h4 style="border-top: 1px dotted black; padding-top:3px;width:60%;">Signature of the student</h4>
            </div>
            <div class="col-6">
                <h4 style="border-top: 1px dotted black; padding-top:3px;width:70%; text-align: right;">Signature of the Dept. Head</h4>
            </div>
        </div>
        <div class="row" style="margin-top: 15px; text-align: right;">
           <div class="col-6">
               
           </div>
            <div class="col-6">
                <h4 style="border-top: 1px dotted black; padding-top:3px;width:82%;">Signature of the college principal</h4>
            </div>
        </div>
    </section>
    <!--end application area-->





</body>
</html>
