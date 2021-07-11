@extends('layouts.master')

@section('content')
    <div class="container mt-3">
        <h2 class="text-success">Edit Event</h2>
        <hr>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('event.update', ['event' => $event->id]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-row mt-3">
                        <div class="form-group col-md-12">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title of the Event" value="{{ $event->title }}">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="10" placeholder="Description about the event">{{ $event->description }}"</textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mt-3">
                        <label for="date">Event Date</label>
                        <input type="datetime-local" name="date" class="form-control" id="date" value="{{ $event->date }}">
                        @error('date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Update Event</button>
                </form>
            </div>
        </div>
    </div>
@endsection
