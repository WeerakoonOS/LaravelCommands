@extends('layouts.master')

@section('content')
@include('partials/navbar')

<div class="container" style="margin-top: 50px;">
	@if(Auth::check())
		<a href="/book/create" class="btn btn-primary btn-sm">Add a Book</a><br><br>
	@endif	
	@foreach($books as $book)
    <div class="card">
        <div class="card-header">{{ $book->book_name }}</div>       	
        <div class="card-body">
        	<a href="/book/{{ $book->id }}" class="btn btn-link">Read more</a>
        </div>               
    </div>
    <br>
	@endforeach()
</div>
@endsection

