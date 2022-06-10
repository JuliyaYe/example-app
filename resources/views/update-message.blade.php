@extends('layouts.layout')

@section('title', 'Update message')

@section('content') 
    <h1>Update message</h1>
    
    <form action="{{ route('message-form-submit', $data->id) }}" method="post">
        @csrf
      
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Enter your email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Enter subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" placeholder="Zeliboba" class="form-control">{{ $data->message }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>

    </form>
@endsection