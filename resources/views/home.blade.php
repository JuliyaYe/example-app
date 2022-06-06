@extends('layouts.layout')

@section('title', 'Home')

@section('content') 
    <h1>Main page</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo earum labore consequuntur odio, sunt rerum. Fugit dolorum illum, voluptatem rem culpa adipisci tenetur pariatur? Laudantium libero itaque non similique omnis.</p>
@endsection

@section('aside')
    @parent
    <p>Extra text</p>
@endsection
