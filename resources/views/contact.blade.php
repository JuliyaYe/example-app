@extends('layouts.layout')

@section('title', 'Contact')

@section('content') 
    <h1>Contact</h1>
    
    <form action="{{ route('contact-form') }}" method="post">
        @csrf
      
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="Enter your email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" placeholder="Enter subject" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" placeholder="Zeliboba" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>

    </form>
@endsection