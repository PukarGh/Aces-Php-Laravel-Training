@extends('layouts.master')

@section('content')
    @include('partials.header')
    <h1>Users List</h1>
    <p>{{ $name }}</p>
    <p>{{ $address }}</p>
@endsection
