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
             <div class="col-md-12 offest-md-3">
                  <div class="card">
                      <div class="card-body">
                         <form class="personal-info" method="POST" action="{{ route('personalinfo.create') }}" enctype="multipart/form-data">
                             @csrf
                    <fieldset>
                        <div class="form-section">
                            <div class="card-header text-white bg-info">
                                <h4>Personal Details</h4>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="Fname"><strong>First Name</strong></label>
                                    <div class="form-floating mb-1">
                                        <input type="text" name="first_name" class="form-control" placeholder="First name"/>
                                        <label for="floatingInput">First name</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Mname"><strong>Middle Name</strong></label>
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" id="floatingInput" name="middle_name" placeholder="Middle name">
                                        <label for="floatingInput">Middle name</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Lname"><strong>Last Name</strong></label>
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" id="floatingInput" name="last_name" placeholder="Last name">
                                        <label for="floatingInput">Last name</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Gender"><strong>Gender</strong></label>
                                    <br>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1"><strong>Male</strong></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2"><strong>Female</strong></label>
                                    </div>

{{--                                    <div class="form-check form-check-inline">--}}
{{--                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">--}}
{{--                                        <label class="form-check-label" for="inlineRadio3"><strong>Prefer not to say</strong></label>--}}
{{--                                    </div>--}}


                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone_no"><strong>Phone No</strong></label>
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" id="floatingInput" name="phone" placeholder="Phone no">
                                        <label for="floatingInput">Phone No</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4"><strong>Email Address</strong></label>
                                    <div class="form-floating mb-1">
                                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email Address">
                                        <label for="floatingInput">Email Address</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="national_id"><strong>National ID/Passport no</strong></label>
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" id="floatingInput" name="national_id" placeholder="National ID/Passport no">
                                        <label for="floatingInput">National ID/Passport no</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="kra"><strong>Tax PIN no</strong></label>
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" id="floatingInput" name="kra_pin" placeholder="Tax PIN no">
                                        <label for="floatingInput">Tax PIN no</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nhif"><strong>NHIF no</strong></label>
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" id="floatingInput" name="nhif_no" placeholder="NHIF no">
                                        <label for="floatingInput">NHIF no</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nssf"><strong>NSSF no</strong></label>
                                    <div class="form-floating mb-1">
                                        <input type="text" class="form-control" id="floatingInput" name="nssf_no" placeholder="NSSF no">
                                        <label for="floatingInput">NSSF no</label>
                                    </div>
                                </div>
{{--                                <button type="button" class="next btn btn-info float-right">Next</button>--}}
                            </div>
                        </div>
                    </fieldset>


                   <fieldset>
                       <div class="form-section">
                           <div class="card-header text-white bg-info">
                               <h4>Location Details</h4>
                           </div>
                           <br>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4"><strong>Address</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="address" placeholder="P.O. Box">
                                       <label for="floatingInput">P.O. Box</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4"><strong>Area Code</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="code" placeholder="Area Code">
                                       <label for="floatingInput">Area Code</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4"><strong>County/Town</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="town" placeholder="County/Town">
                                       <label for="floatingInput">County/Town</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4"><strong>Current area of residence</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="residence" placeholder="Current area of residence">
                                       <label for="floatingInput">Current area of residence</label>
                                   </div>
                               </div>
{{--                               <button type="button" class="previous btn btn-info float-left">Previous</button>--}}
{{--                               <button type="button" class="next btn btn-info float-right">Next</button>--}}

                           </div>
                       </div>
                   </fieldset>


                   <fieldset>
                       <div class="form-section">
                           <div class="card-header text-white bg-info">
                               <h4>Next of Kin Details</h4>
                           </div>
                           <br>
                           <div class="form-row">
                               <div class="form-group col-md-4">
                                   <label for="inputEmail4"><strong>Next of Kin First Name</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="kin_first_name" placeholder="Next of Kin First Name">
                                       <label for="floatingInput">Next of Kin First Name</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-4">
                                   <label for="inputEmail4"><strong>Next of Kin Last Name</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="kin_last_name" placeholder="Next of Kin Last Name">
                                       <label for="floatingInput">Next of Kin Last Name</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-4">
                                   <label for="inputEmail4"><strong>Nature of Relationship</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="relationship" placeholder="Nature of Relationship">
                                       <label for="floatingInput">Nature of Relationship</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-4">
                                   <label for="inputEmail4"><strong>Next of Kin Phone No</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="kin_phone" placeholder="Next of Kin Phone No">
                                       <label for="floatingInput">Next of Kin Phone No</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-4">
                                   <label for="inputEmail4"><strong>Address</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="kin_address" placeholder="Address">
                                       <label for="floatingInput">Address</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-4">
                                   <label for="inputEmail4"><strong>Area Code</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="kin_code" placeholder="Area Code">
                                       <label for="floatingInput">Area Code</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-4">
                                   <label for="inputEmail4"><strong>County/Town</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="kin_town" placeholder="County/Town">
                                       <label for="floatingInput">County/Town</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-4">
                                   <label for="inputEmail4"><strong>Current area of residence</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="kin_residence" placeholder="Current area of residence">
                                       <label for="floatingInput">Current area of residence</label>
                                   </div>
                               </div>
{{--                               <button type="button" class="previous btn btn-info float-left">Previous</button>--}}
{{--                               <button type="button" class="next btn btn-info float-right">Next</button>--}}


                           </div>
                       </div>
                   </fieldset>


                   <fieldset>
                       <div class="form-section">
                           <div class="card-header text-white bg-info">
                               <h4>HELB Details</h4>
                           </div>
                           <br>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4"><strong>University/College/TVET</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="institution" placeholder="Name of the associated Institution of Higher Learning">
                                       <label for="floatingInput">Name of the associated Institution of Higher Learning</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4"><strong>Registration No</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="reg_no" placeholder="Registration No">
                                       <label for="floatingInput">Registration No</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="deductions">
                                       <strong>Outstanding amount</strong>
                                   </label>
                                   <div class="input-group mb-3">
                                       <span class="input-group-text"><strong>Ksh</strong></span>
                                       <input type="number" class="form-control" name="amount" placeholder="Outstanding amount">
                                   </div>
                               </div>

                               <div class="form-group col-md-6">
                                   <label for="deductions">
                                       <strong>Monthly Deductions</strong>
                                   </label>
                                   <div class="input-group mb-3">
                                       <span class="input-group-text"><strong>Ksh</strong></span>
                                       <input type="number" class="form-control" name="deductions" placeholder="Monthly deductions">
                                   </div>
                               </div>
{{--                               <button type="button" class="previous btn btn-info float-left">Previous</button>--}}
{{--                               <button type="button" class="next btn btn-info float-right">Next</button>--}}

                           </div>
                       </div>
                   </fieldset>


                   <fieldset>
                       <div class="form-section">
                           <div class="card-header text-white bg-info">
                               <h4>Bank Details</h4>
                           </div>
                           <br>
                           <div class="form-row">
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4"><strong>Account Name</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="acc_name" placeholder="Account Name">
                                       <label for="floatingInput">Account Name</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4"><strong>Account No</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="acc_no" placeholder="Account No">
                                       <label for="floatingInput">Account No</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4"><strong>Bank Name</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="bank_name" placeholder="Bank Name">
                                       <label for="floatingInput">Bank Name</label>
                                   </div>
                               </div>
                               <div class="form-group col-md-6">
                                   <label for="inputEmail4"><strong>Branch name</strong></label>
                                   <div class="form-floating mb-1">
                                       <input type="text" class="form-control" id="floatingInput" name="branch_name" placeholder="Branch name">
                                       <label for="floatingInput">Branch name</label>
                                   </div>
                               </div>
{{--                               <button type="button" class="previous btn btn-info float-left">Previous</button>--}}
{{--                               <button type="submit" class="btn btn-success float-right">Submit</button>--}}
                           </div>
                       </div>
                   </fieldset>


                    <div class="form-navigation">
                        <button type="button" class="previous btn btn-info float-left">Previous</button>
                        <button type="button" class="next btn btn-info float-right">Next</button>
                        <button type="submit" class="btn btn-success float-right">Submit</button>
                    </div>
                    </form>
                          @csrf
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
