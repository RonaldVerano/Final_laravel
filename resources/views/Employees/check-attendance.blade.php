@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h1>Check Attendance {{ date('m-d-Y', strtotime($todaysDate)) }}</h1>
            <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Is Present</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{$employee->full_name}}</td>
                        <td>@if($employee->is_present($todaysDate)) Present @else Absent @endif</td>
                        <td>
                            @if(!$employee->is_present($todaysDate))
                                <form action="{{ route('employees.attendance-present', array('id'=>$employees->id)) }}" method="POST">
                                    @csrf 
                                    <input type="hidden" value="{{ $todaysDate }}" name="todays_date"/>
                                    <button type="submit" class="btn btn-warning">Present?</button>
                                </form>
                            @else
                            <form action="{{ route('employees.attendance-absent', array('id'=>$employees->id))  }}" method="POST">
                                    @csrf 
                                    <input type="hidden" value="{{ $todaysDate }}" name="todays_date"/>
                                    <button type="submit" class="btn btn-danger">Absent?</button>
                                </form>
                            @endif
                        </td>
                    </tr>   
                @endforeach
            <tbody>   
            </table> 
        </div>
    </div>
</div>
@endsection


