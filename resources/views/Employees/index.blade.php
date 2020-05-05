@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Employees</h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-employees-modal" >Add Employee</button>
            @include('Employees.modals._add-employees-modal')    

            
        

            <table class="table">
            <thead>
                <tr>
                    <th>Attendance</th>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Cell Phone Number</th>
                    <th>Salary</th>
                    <th>Days Present</th>
                </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                    <tr>
                        
                        <td><a href="{{action('EmployeesController@addPoint')}}" method="post">Present</a></td>
           
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$employee->full_name}}</td>
                        <td>{{ $employee->age }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->cp_number }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>{{ $employee->days_present}}</td>
                    </tr>
            @endforeach
            </tbody>   
            </table> 
        </div>
    </div>
</div>
@endsection


