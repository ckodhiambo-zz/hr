<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multi Step Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>
    <style>
        section
        {
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .container
        {
            margin: 0 auto; /* Added */
            float: none; /* Added */
            margin-bottom: 10px; /* Added */

        }
        .form-section
        {
            padding-left: 0px;
            display: none;
        }
        .form-section.current
        {
            display: inherit;
        }
        .btn-info, .btn-success
        {
            margin-top: 10px;
            width: 200px;
        }
        .parsley-errors-list
        {
            margin: 2px 0 3px;
            padding: 0;
            list-style-type:none;
            color: red;
        }
    </style>
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offest-md-3">
                <div class="card">

                    <div class="card-body">
                        <form class="personal-info" method="post" action="{{ route('form.formsubmit') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header text-white bg-info">
                                <h4><strong>Personal Information</strong></h4>
                            </div>
                            <br>
                            <div class="form-section">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="Fname">
                                            <strong>First Name</strong>
                                        </label>
                                        <input type="text" name="first_name" class="form-control" placeholder="First name"/>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Mname">
                                            <strong>Middle Name</strong>
                                        </label>
                                        <input type="text" name="middle_name" class="form-control" placeholder="Middle name"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="Lname">
                                            <strong>Last Name</strong>
                                        </label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Last name"/>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="gender">
                                            <strong>Gender</strong>
                                        </label>
                                        <input type="text" name="gender" class="form-control" placeholder="Gender" >
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="phone_no">
                                            <strong>Phone No</strong>
                                        </label>
                                        {{--                                            <input type="text" name="phone_no" class="form-control" placeholder="Phone Number"/>--}}
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="floatingInput" name="phone" placeholder="Phone Number">
                                            <label for="floatingInput">Phone number</label>
                                        </div>

                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="phone_no">
                                            <strong>Email Address</strong>
                                        </label>
                                        {{--                                            <input type="email" name="email" class="form-control" placeholder="Email Address"/>--}}
                                        <div class="form-floating mb-1">
                                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email Address">
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="national_id">
                                            <strong>National ID/Passport no</strong>
                                        </label>
                                        {{--                                            <input type="text" name="national_id" class="form-control" placeholder="National ID/Passport no"/>--}}
                                        <div class="form-floating mb-1">
                                            <input type="text" class="form-control" id="floatingInput" name="national_id" placeholder="National ID/Passport no">
                                            <label for="floatingInput">National ID/Passport no</label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="kra">
                                            <strong>Tax PIN no</strong>
                                        </label>
                                        <input type="text" name="kra" class="form-control" placeholder="Tax Pin Number"/>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="nhif">
                                            <strong>NHIF no</strong>
                                        </label>
                                        <input type="text" name="nhif" class="form-control" placeholder="NHIF number"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nhif">
                                            <strong>NSSF no</strong>
                                        </label>
                                        <input type="text" name="nssf" class="form-control" placeholder="NSSF number"/>
                                    </div>

                                </div>


                            </div>


                            <div class="form-section">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="box">
                                            <strong>Address</strong>
                                        </label>
                                        <input type="text" name="box" class="form-control" placeholder="P.O. Box"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="box">
                                            <strong>Area Code</strong>
                                        </label>
                                        <input type="text" name="code" class="form-control" placeholder="Area Code"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="box">
                                            <strong>County/Town</strong>
                                        </label>
                                        <input type="text" name="county" class="form-control" placeholder="County/Town"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="residence">
                                            <strong>Current area of residence</strong>
                                        </label>
                                        <input type="text" name="residence" class="form-control" placeholder="Residential Area"/>
                                    </div>

                                </div>

                            </div>

                            <div class="form-section">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Fname">
                                            <strong>Next of Kin's First Name</strong>
                                        </label>
                                        <input type="text" name="first_name_kin" class="form-control" placeholder="First name"/>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Lname">
                                            <strong>Next of Kin's Last Name</strong>
                                        </label>
                                        <input type="text" name="last_name_kin" class="form-control" placeholder="Last name"/>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="relationship">
                                            <strong>Nature of Relationship</strong>
                                        </label>
                                        <input type="text" name="relationship" class="form-control" placeholder="Nature of Relationship"/>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="phoneno">
                                            <strong>Next of Kin's Phone No</strong>
                                        </label>
                                        <input type="tel" name="phone_no" class="form-control" placeholder="Phone Number"/>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="box">
                                            <strong>Address</strong>
                                        </label>
                                        <input type="text" name="box" class="form-control" placeholder="P.O. Box"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="code">
                                            <strong>Area Code</strong>
                                        </label>
                                        <input type="text" name="code" class="form-control" placeholder="Area Code"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="box">
                                            <strong>County/Town</strong>
                                        </label>
                                        <input type="text" name="county" class="form-control" placeholder="County/Town"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="residence">
                                            <strong>Current area of residence</strong>
                                        </label>
                                        <input type="text" name="residence" class="form-control" placeholder="Residential Area"/>
                                    </div>
                                </div>


                            </div>
                            <div class="form-section">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="university">
                                            <strong>University/College/TVET</strong>
                                        </label>
                                        <input type="text" name="university" class="form-control" placeholder="Name of the associated Institution of Higher Learning"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="RegNo">
                                            <strong>Registration No</strong>
                                        </label>
                                        <input type="text" name="reg_no" class="form-control" placeholder="Registration Number"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="deductions">
                                            <strong>Outstanding amount</strong>
                                        </label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Ksh</span>
                                            <input type="number" class="form-control" name="amount" placeholder="Outstanding amount">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="deductions">
                                            <strong>Monthly Deductions</strong>
                                        </label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Ksh</span>
                                            <input type="number" class="form-control" name="deductions" placeholder="Monthly deductions">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="accname">
                                            <strong>Account Name</strong>
                                        </label>
                                        <input type="text" name="acc_name" class="form-control" placeholder="Account Name"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="accno">
                                            <strong>Account No</strong>
                                        </label>
                                        <input type="text" name="acc_no" class="form-control" placeholder="Account Number"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="bank">
                                            <strong>Name of the bank</strong>
                                        </label>
                                        <input type="text" name="bank_name" class="form-control" placeholder="Name of the Bank"/>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="university">
                                            <strong>Branch name</strong>
                                        </label>
                                        <input type="text" name="branch" class="form-control" placeholder="Branch"/>
                                    </div>
                                </div>
                            </div>
                            {{--                                <div class="form-section">--}}
                            {{--                                    <div class="row">--}}
                            {{--                                        <div class="form-group col-md-12">--}}
                            {{--                                            <label for="file">--}}
                            {{--                                                <strong>Copy of National ID</strong>--}}
                            {{--                                            </label>--}}
                            {{--                                            <input type="file" name="file" class="form-control"/>--}}
                            {{--                                        </div>--}}

                            {{--                                        <div class="form-group col-md-12">--}}
                            {{--                                            <label for="file">--}}
                            {{--                                                <strong>Resume</strong>--}}
                            {{--                                            </label>--}}
                            {{--                                            <input type="file" name="file" class="form-control"/>--}}
                            {{--                                        </div>--}}

                            {{--                                        <div class="form-group col-md-12">--}}
                            {{--                                            <label for="file">--}}
                            {{--                                                <strong>Academic Certificate/Transcript/Letter</strong>--}}
                            {{--                                            </label>--}}
                            {{--                                            <input type="file" name="file" class="form-control"/>--}}
                            {{--                                        </div>--}}

                            {{--                                        <div class="form-group col-md-12">--}}
                            {{--                                            <label for="file">--}}
                            {{--                                                <strong>HELB Certificate</strong>--}}
                            {{--                                            </label>--}}
                            {{--                                            <input type="file" name="file" class="form-control"/>--}}
                            {{--                                        </div>--}}

                            {{--                                        <div class="form-group col-md-12">--}}
                            {{--                                            <label for="file">--}}
                            {{--                                                <strong>CRB Clearance certificate</strong>--}}
                            {{--                                            </label>--}}
                            {{--                                            <input type="file" name="file" class="form-control"/>--}}
                            {{--                                        </div>--}}

                            {{--                                        <div class="form-group col-md-12">--}}
                            {{--                                            <label for="file">--}}
                            {{--                                                <strong>Police Clearance Certificate</strong>--}}
                            {{--                                            </label>--}}
                            {{--                                            <input type="file" name="file" class="form-control"/>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            <div class="form-navigation">
                                <button type="button" class="previous btn btn-info float-left">Previous</button>
                                <button type="button" class="next btn btn-info float-right">Next</button>
                                <button type="submit" class="btn btn-success float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(function ()
    {
        var $sections=$('.form-section');

        function navigateTo(index)
        {
            $sections.removeClass('current').eq(index).addClass('current');
            $('.form-navigation .previous').toggle(index>0);
            var atTheEnd = index >= $sections.length - 1;
            $('.form-navigation .next').toggle(!atTheEnd);
            $('.form-navigation [type = submit]').toggle(atTheEnd);
        }

        function curIndex()
        {
            return $sections.index($sections.filter('.current'));
        }

        $('.form-navigation .previous').click(function ()
        {
            navigateTo(curIndex()-1);
        });

        $('.form-navigation .next').click(function ()
        {
            $('.personal-info').parsley().whenValidate(
                {
                    group: 'block-' + curIndex()
                }).done(function ()
            {
                navigateTo(curIndex()+1)
            });
        });

        $sections.each(function (index,section)
        {
            $(section).find(':input').attr('data-parsley-group','block-'+ index);
        });

        navigateTo(0);

    });
</script>

</body>
</html>
