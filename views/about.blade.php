@extends('layout.main')

@section('title' , 'About Me')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">{{$about}}</h1>
                </div>
        </div>
    </div>
@endsection
