@extends('layouts.master')

@section('content')
@include('partials/navbar')
<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{ Auth()->user()}}
                    <br>
                    My name : {{ Auth()->user()->name}}
                    <br>
                    My email : {{ Auth()->user()->email}}
                    <br><br><br>

                    <a href="/form">Form Submission Page</a>
                    <br>
                    
                    <a href="/book">Books Page</a>
                    <br>
                </div>
              
            </div>
        </div>
    </div>
</div>
@endsection
