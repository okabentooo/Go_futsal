@extends('layout.main')

@section('title' , '+ Form')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Ubah Data</h1>

                <!-- <form method="post" action="/orders"> -->
                <form method="post" action="/orders/{{ $order->id }}">
                @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $order->nama }}">
                        
                        <!-- untuk feedback -->
                        @error ('nama') 
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <!-- untuk feedback -->

                    </div>
                    <div class="form-group">
                        <label for="notelp">No Telp</label>
                        <input type="text" class="form-control @error ('notelp') is-invalid @enderror" id="notelp" placeholder="Masukkan Nomor Telepon" name="notelp" value="{{ $order->notelp }}">

                        @error ('notelp') 
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="Masukkan Email Anda" name="email" value="{{ $order->email }}">

                        @error ('email') 
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="idlapangan">ID Lapangan</label>
                        <input type="text" class="form-control @error ('idlapangan') is-invalid @enderror" id="idlapangan" placeholder="Masukkan ID Lapangan" name="idlapangan" value="{{ $order->idlapangan }}">

                        @error ('idlapangan') 
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>
                    <button type="submit" class="btn btn-primary">ubah Data!</button>
                </form>

            </div>
        </div>
    </div>
@endsection
