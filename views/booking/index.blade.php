@extends('layout.main')

@section('title' , 'Booking')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Booking</h1>


                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nomor ID</th>
                            <th scope="col">Jam</th>
                            <th scope="col">IdLap</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach( $booking as $book )
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $book->nama}}</td>
                                <td>{{$book->notelp}}</td>
                                <td>{{$book->email}}</td>
                                <td>{{$book->idlapangan}}</td>
                                <td>
                                    <a href="" class="badge badge-success">Yes</a>
                                    <a href="" class="badge badge-danger">Not</a>
                                </td>
                            </tr> 
                            @endforeach                   
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
