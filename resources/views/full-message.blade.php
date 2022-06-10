@extends('layouts.layout')

@section('title', 'Message')

@section('content') 
    <h1>{{ $data->subject }}</h1>
        <div class="alert alert-info">
            <p>{{ $data->message }}</p>            
            <p>{{ $data->name }} - {{ $data->email }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <a href="{{ route('contact-data') }}"><button class="btn btn-success">Return</button></a>
            <a href="{{ route('message-update', $data->id) }}"><button class="btn btn-info">Update</button></a>
            <a href="{{ route('message-delete', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
        </div>
    

@endsection