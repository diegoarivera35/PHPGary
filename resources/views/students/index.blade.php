@extends('layouts.admin');
@section('content')

<div class="row">
    <div class="col">
        <div class="h3 display-2">
            All Students
        </div>
    </div>
</div>

<div class="row">
    @foreach ($students as $student)
    <div class="col-md-2 p-1 m-1">
        <div class="card p-2 bg-light">
            <div class="card-title">
                <h4>{{ $student->fname}}{{$student->lname}}</h2>
                <p>{{$student->email}}</p>
                <p>{{$student->course}}</p>
                <button class="btn btn-primary" href="{{ route('students.trash', $student -> id )}}" class="card-link">Delete</button>
                <button class="btn btn-primary" href="{{ route('students.trash', $student -> id )}}" class="card-link">Edit</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection