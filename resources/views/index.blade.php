@extends('layout')

@section('page-content')

  <!-- <h1>Employee List</h1> -->

    <p class="text-end">
        <a href=" {{route('employees.create')}}" class="btn btn-primary">Add Employee</a>
    </p>

    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Job Title</th>
            <th>Joining Date</th>
            <th>Salary</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->job_title }}</td>
            <td>{{ $employee->joining_date }}</td>
            <td>{{ $employee->salary }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->mobile_no }}</td>
            <td>{{ $employee->address }}</td>
            <td class="d-flex justify-content-center">
                <a href="{{ route('employees.show', $employee->id)}}" class="btn btn-success ms-1"> Show </a>
                <form method="POST" action="{{ route('employees.destroy', $employee->id) }}" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger ms-1">Delete</button>
                </form>
            </td>
            
        </tr>
        @endforeach
    </table>

    {{ $employees->links() }}

@endsection