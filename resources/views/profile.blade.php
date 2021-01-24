@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <ul class="list-group mb-4 ">
            <li class="list-group-item list-group-item-primary">Name:{{$profile->name}} </li>
            <li class="list-group-item list-group-item-info">Email: {{$profile->email}}</li>
        </ul>
        <a href="{{route('editProfile')}}" class="btn btn-primary btn-lg " role="button"
           aria-pressed="true">Edit</a>

           <a href="{{route('exportProfile')}}" class="btn btn-success btn-lg " role="button"
           aria-pressed="true">Download in excel</a>

           <form action="{{route('deleteProfile')}}" method="post">
           @csrf
        <button type="submit" class="btn btn-danger mb-5">delete</button>
           </form>
    </div>
@endsection
