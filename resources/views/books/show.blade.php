@extends('layouts.master')

@section('content')
@include('partials/navbar')
<div class="container" style="margin-top: 50px;">
    <div class="card">
        <div class="card-header">{{ $book->book_name }}</div>       	
        <div class="card-body">
        	<p class="card-text">ISBN : {{ $book->book_isbn }}</p>
        	<p class="card-text">AUTHOR : {{ $book->book_author }}</p>
        	<br>
            @if(Auth::check())
                @if(Auth()->user()->name == $book->book_author)
            	   <a href="/book/{{ $book->id }}/edit" class="btn btn-secondary btn-sm">Edit Book</a><br><br>
                    <form action="{{action('BookController@destroy', $book->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}} 
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete Book">
                    </form>
                @endif
            @endif
        </div>               
    </div>
    <br>
</div>
@endsection

