@extends('layout.master')

@section('content')
    <form action="/pengaduan" method="POST" class="form-pengaduan-container">
        @csrf
        <div class="pengaduan-container">
            <div class="pengaduan-1st-container">
                <div class="input-container">
                    <label for="nama" class="text-orange unbounded label">Nama</label>
                    <input type="text" name="nama" id="nama" class="border-bottom">
                </div>
                <div class="input-container">
                    <label for="gender_umur" class="text-orange unbounded label">Jenis Kelamin & Umur</label>
                    <input type="text" name="gender_umur" id="gender_umur" class="border-bottom">
                </div>
                <div class="input-container">
                    <label for="alamat" class="text-orange unbounded label">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="border-bottom">
                </div>
                <div class="input-container">
                    <label for="email" class="text-orange unbounded label">Email</label>
                    <input type="email" name="email" id="email" class="border-bottom">
                </div>
            </div>
            <div class="pengaduan-2nd-container">
                <div class="input-container">
                    <label for="deskripsi" class="text-orange unbounded label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
                </div>
                <div class="submit-container">
                    <button type="submit" class="button-submit text-white unbounded">Kirim</button>
                </div>
            </div>
        </div>
    </form>
@endsection