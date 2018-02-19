@extends('layouts.master')

@section('content')

    <h1>Users</h1>

    @foreach($users as $user)
        {{$user->name}} - {{$user->email}}
    @endforeach


@endsection