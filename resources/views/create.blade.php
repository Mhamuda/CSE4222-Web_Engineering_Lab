@extends('layout')
@section('page-content')

<a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
<legend>New Employee</legend>

<form action="{{route('employees.store')}}" method="POST">
@csrf
<div class="mb-2">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}">
    <div>{{ $errors->first('name') }}</div>
  </div>
  <div class="mb-2">
    <label for="job_title" class="form-label">Job Title</label>
    <input type="text" name="job_title" class="form-control" id="job_title" value="{{old('job_title')}}">
    <div>{{ $errors->first('job_title') }}</div>
  </div>
  <div class="mb-2">
    <label for="joining_date" class="form-label">Joining Date</label>
    <input type="date" name="joining_date" class="form-control" id="joining_date" value="{{old('joining_date')}}">
    <!-- <div class="invalid-feedbacks">{{ $errors->first('joining_date') }} -->
</div>
  <div class="mb-2">
    <label for="salary" class="form-label">Salary</label>
    <input type="number" name="salary" class="form-control" id="salary" value="{{old('salary')}}">
    <div class="invalid-feedbacks">{{ $errors->first('salary') }}</div>
  </div>
  <div class="mb-2">
        <label for="email">email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" >
        <div class="invalid-feedbacks">{{$errors->first('email')}}</div>
    </div>
  <div class="mb-2">
    <label for="mobile_no" class="form-label">Mobile No</label>
    <input type="number" name="mobile_no" class="form-control" id="mobile_no" value="{{old('mobile_no')}}">
    <div class="invalid-feedbacks">{{ $errors->first('mobile_no') }}
    </div>
   <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="address" value="{{old('address')}}">
    <div class="invalid-feedbacks">{{ $errors->first('address') }}
    </div>

  <div class="mb-2">
    <!-- //space on top of the button -->
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>  
</form>

@endsection