@extends('layouts.admin');
@section('content')

<div class="row">
    <div class="col d-flex justify-content-center">
        <div class="h1 display-2">
            Create new student
        </div>
    </div>
</div>

<div class="row d-flex justify-content-center">
    <div class="col-md-6">
    <form action="{{ route('students.store')}}" method="POST">

    @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif

    {{ csrf_field() }}

    <div class="form-group mb-3">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="forstNameHelp" placeholder="Enter name">
  </div>


  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="LastNamehelp" placeholder="Enter last name">
  </div>



  <div class="form-group mb-3">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>


  <div class="form-group mb-3">
    <label for="course">Select Course</label>
    <select id="course" name="course" aria-describedby="courseHelp" placeholder="Courses">
      @foreach($courses as $course)
      <option value="{{ $course -> id }}">
        {{ $course -> courseName}}
</option>

      @endforeach
</select>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>

@endsection