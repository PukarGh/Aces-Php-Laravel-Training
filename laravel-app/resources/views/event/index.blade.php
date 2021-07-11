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
                            <p>
                                Going: {{ $event->going_participants_count }} <br>
                                Not Going: {{ $event->not_going_participants_count }} <br>
                            </p>
                            @auth
                                <form action="{{ route('event.respond', $event->id) }}" class="d-inline" method="post">
                                    @csrf
                                    <input type="hidden" value="1" name="response">
                                    <button class="btn btn-sm btn-success" type="submit">Going</button>
                                </form>

                                <form action="{{ route('event.respond', $event->id) }}" class="d-inline" method="post">
                                    @csrf
                                    <input type="hidden" value="0" name="response">
                                    <button class="btn btn-danger btn-sm" type="submit">Not Going</button>
                                </form>

                                @if($event->user_id == auth()->id())
                                    <a href="{{ route('event.edit', ['event' => $event->id ]) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('event.delete', ['event' => $event->id]) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">Delete</button>
                                    </form>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
