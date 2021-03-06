@extends('layout.main')

@section('title' , 'Add')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Tambah Lapangan</h1>

                <a href="/orders/create" class="btn btn-primary my-1">Tambah Data</a>


                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                

                <ul class="list-group">
                    @foreach ($Admin as $order)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $order->nama }}
                        <br>
                        {{ $order->notelp }}
                        <a href="/orders/{{ $order->id }}" class="badge badge-info">detail</a>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection
