@extends('layouts.admin')

@section('title')
    Contact-us
@endsection

@section('content')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Contact Us</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
{{--        @extends('layouts.admin')--}}

{{--        @section('content')--}}
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header">
                                <strong>E-Message Contact Form</strong>
                            </div>
                            <div class="card-body">
                                @if(Session::get('message_sent'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('message_sent')}}
                                    </div>
                                @endif
                                <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">
                                            <strong>Name:</strong>
                                        </label>
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">
                                            <strong>Email Address:</strong>
                                        </label>
                                        <input type="email" name="email" value= "support@centum.co.ke" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">
                                            <strong>Phone:</strong>
                                        </label>
                                        <input type="text" name="phone" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="msg">
                                            <strong>Message:</strong>
                                        </label>
                                        <textarea name="msg" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">
                                        <strong>Send</strong>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    </body>
</html>
@endsection



