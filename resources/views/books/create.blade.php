@extends('layouts.master')

@section('content')
@include('partials/navbar')
<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Submission</div>

                <div class="card-body">
                    <form action="{{action('BookController@store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Name : </label>
                            <div class="col-md-6">
                                <input type="text" name="book_name" class="form-control">
                            </div>  
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">ISBN : </label>
                            <div class="col-md-6">
                                <input type="text" name="book_isbn" class="form-control">
                            </div>  
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Author : </label>
                            <div class="col-md-6">
                                <input type="text" name="book_author" class="form-control">
                            </div>  
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" class="btn btn-primary" value="submit">
                            </div>

                        </div>     
                        <a href="/book" class="btn btn-link">Back to Books</a>                   
                        <br>
                    </form>
                </div>               
            </div>
        </div>
    </div>
</div>
@endsection
