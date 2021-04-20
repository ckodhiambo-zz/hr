@extends('layouts.admin')

@section('title')
    onboarded-employees
@endsection

@section('content')
    <section style="padding-top: 10px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>LIST OF ALL ON-BOARDED EMPLOYEES</strong>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Position</th>
                                        <th>On-boarding Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td>{{$employee->employees->id}}</td>
                                            <td>{{$employee->employees->first_name}}</td>
                                            <td>{{$employee->employees->last_name}}</td>
                                            <td>{{$employee->employees->position}}</td>
                                            <td>{{$employee->employees->onboarding_date }}</td>
                                            <td>
                                                <a href="/destroy-post/{{ $employee->employees->id }}" class="btn btn-danger">
                                                    Delete
                                                </a>
                                                <!-- <a href="/delete-post/{{ $employee -> employee_id }}" class="btn btn-danger">
                                                        Delete
                                                </a> -->
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
    </section>

@endsection
