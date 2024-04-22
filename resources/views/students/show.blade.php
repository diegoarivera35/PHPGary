@extends('layouts.admin');
@section('content')

<div class="row">
    <div class="col">
        <div class="h1 display-2">
            View {{ $student-> fname}}'s Students
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 p-1 m-1">
        <div class="card">
            <div class="card-title">
                <h2>{{ $student->fname}}{{$student->lname}}</h2>
                <p>{{$student->email}}</p>
            </div>
        </div>
    </div>
</div>

@endsection