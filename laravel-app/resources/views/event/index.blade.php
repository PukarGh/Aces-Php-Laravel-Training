@extends('layouts.master')

@section('content')
    <div class="container mt-3">
        <h2 class="text-success">Events List</h2>
        <hr>
        @if(session()->has('message'))
            {{ session()->get('message') }}
        @endif

        <div class="row">
            @foreach($events as $event)
                <div class="col-md-4">
                    <div class="card">
                        <a href="#">
                            <img src="{{ asset('images/image.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-text">{{ $event->description }}</p>
                            <p>
                                <b>Date: </b> {{ $event->date }}
                            </p>
                            <p>
                                <b>Organized By: </b> {{ $event->user->name }}
                            </p>
                            <a href="#" class="btn btn-success btn-sm">Going</a>
                            <a href="#" class="btn btn-danger btn-sm">Not Going</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
