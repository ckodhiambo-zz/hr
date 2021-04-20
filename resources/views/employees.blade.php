@extends('layouts.admin')

@section('title')
    Employees
@endsection

@section('content')
    <section style="padding-top: 10px">
        <form action="/checkbox" method="post">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>LIST OF ALL EMPLOYEES</strong>
                                <br>
                                <br>
                                <div class="justify-content-between form-inline">
                                    <div>
                                        <a href="/add-post" class="btn btn-success">Add a New Employee</a>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-success">On-board</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('post_created'))
                                    <div class="alert alert-success" role="alert">
                                        {{Session::get('post_created')}}
                                    </div>
                                @endif

                                @if(Session::has('post_deleted'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('post_deleted') }}
                                    </div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Position</th>
                                            <th>On-boarding Date</th>
                                            <th>On-boarding</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($employees as $employee)

                                            <tr>
                                                <td>{{$employee -> id}}</td>
                                                <td>{{$employee -> first_name}}</td>
                                                <td>{{$employee -> last_name}}</td>
                                                <td>{{$employee -> position}}</td>
                                                <td>{{$employee -> onboarding_date }}</td>
                                                <td class="justify-content-center d-flex">
                                                    <input class="form-check-input" type="checkbox" value="{{$employee->id}}" name="onboard[]">
                                                </td>
                                                <td>
                                                    <a href="/employees/{{ $employee -> id }}" class="btn  btn-info">
                                                        Details
                                                    </a>
                                                    <a href="/edit-post/{{ $employee -> id }}" class="btn btn-success">
                                                        Edit
                                                    </a>
                                                    <a href="/delete-post/{{ $employee -> id }}" class="btn btn-danger">
                                                        Delete
                                                    </a>
                                                    <a href="/download-pdf/{{ $employee -> id }}" class="btn btn-success">
                                                        PDF
                                                    </a>
                                                    <!-- {{--                                                <div class="form-check">--}}
                                                    {{--                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
                                                    {{--                                                    <label class="form-check-label" for="flexCheckDefault">--}}
                                                    {{--                                                        On-boarded--}}
                                                    {{--                                                    </label>--}}
                                                    {{--                                                </div>--}} -->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection
