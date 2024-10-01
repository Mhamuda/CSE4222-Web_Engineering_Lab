@extends('layout')
@section('page-content')

<a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
    <h1>Hello from show.blade.php</h1>

    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <td>{{ $employee->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $employee->name }}</td>
        </tr>
        <tr>
            <th>Job Title</th>
            <td>{{ $employee->job_title }}</td>
        </tr>
        <tr>
            <th>Joining Date</th>
            <td>{{ $employee->joining_date }}</td>
        </tr>
        <tr>
            <th>Salary</th>
            <td>{{ $employee->salary }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $employee->email }}</td>
        </tr>
        <tr>
            <th>Mobile No</th>
            <td>{{ $employee->mobile_no }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $employee->address }}</td>
        </tr>
    </table>

@endsection