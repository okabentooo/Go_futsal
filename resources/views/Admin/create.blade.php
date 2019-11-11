@extends('layout.main')

@section('title' , '+ Form')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Tambah Data</h1>

                <form method="post" action="/orders">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Lapangan</label>
                        <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                        
                        <!-- untuk feedback -->
                        @error ('nama') 
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <!-- untuk feedback -->

                    </div>
                    <div class="form-group">
                        <label for="notelp">No Telp</label>
                        <input type="text" class="form-control @error ('notelp') is-invalid @enderror" id="notelp" placeholder="Masukkan Nomor Telepon" name="notelp" value="{{ old('notelp') }}">

                        @error ('notelp') 
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </div>

                    <!-- untuk upload gambar -->
                    <div class="form-group">
                        <label for="idlapangan">Upload Gambar Lapangan</label><br>
                        <input type="file" class="form-control" name="foto" value="{{ old('idlapangan') }}">
                        <br>
                        <button class="btn btn-warning" type="submit">Upload</button>
                    </div>	


                    <button type="submit" class="btn btn-primary">Tambah Lapangan!</button>
                </form>

            </div>
        </div>
    </div>
@endsection
