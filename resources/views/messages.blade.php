@extends('layouts.layout')

@section('title', 'Messages')

@section('content') 
    <h1>All messages</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h1>
            <p>{{ $el->name }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('contact-message', $el->id) }}"><button class="btn btn-info">Show</button></a>
        </div>
    @endforeach

@endsection