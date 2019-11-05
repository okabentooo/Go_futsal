@extends('layout.main')

@section('title' , '+ Form')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Tambah Data</h1>

                <form method="post" action="/orders/create">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="notelp">No Telp</label>
                        <input type="text" class="form-control" id="notelp" placeholder="Masukkan Nomor Telepon" name="notelp">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan Email Anda" name="email">
                    </div>
                    <div class="form-group">
                        <label for="idlapangan">ID Lapangan</label>
                        <input type="text" class="form-control" id="idlapangan" placeholder="Masukkan ID Lapangan" name="idlapangan">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>

            </div>
        </div>
    </div>
@endsection
