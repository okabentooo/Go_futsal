@extends('layout.main')

@section('title' , 'Order')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Orderan</h1>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $order->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $order->notelp }}</h6>
                        <p class="card-text">{{ $order->email }}</p>
                        <p class="card-text">{{ $order->idlapangan }}</p>

                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="#" class="card-link">Card link</a>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
