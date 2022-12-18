@extends('layout.master')

@section('content')
    <form action="/pengaduan" method="POST" class="form-pengaduan-container">
        @csrf
        <div class="pengaduan-container">
            <div class="p-1st-container">
                <div class="pengaduan-1st-container">
                    <div class="input-container">
                        <label for="nama" class="text-orange unbounded label">Nama</label>
                        <input type="text" name="nama" id="nama" class="border-bottom">
                        @if ($errors->has('nama'))
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="input-container">
                        <div class="input-label-container">
                            <label for="gender" class="text-orange unbounded label">Jenis Kelamin</label>
                            <span class="text-orange unbounded label"> & </span>
                            <label for="umur" class="text-orange unbounded label">Umur</label>
                        </div>
                        <div class="input-i-container">
                            <select name="gender" id="gender" class="input-select">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                                <option value="rahasia">Rahasia</option>
                            </select>
                            @if ($errors->has('gender'))
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </div>
                            @endif
                            <div class="text-orange unbounded label slash"> / </div>
                            <input type="number" name="umur" id="umur" class="border-bottom input-number">
                            @if ($errors->has('umur'))
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('umur') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="input-container">
                        <label for="alamat" class="text-orange unbounded label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="border-bottom">
                        @if ($errors->has('alamat'))
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </div>
                        @endif
                    </div>
                    <div class="input-container">
                        <label for="email" class="text-orange unbounded label">Email</label>
                        <input type="email" name="email" id="email" class="border-bottom">
                        @if ($errors->has('email'))
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="pengaduan-2nd-container">
                    <div class="input-container">
                        <label for="deskripsi" class="text-orange unbounded label">Deskripsi:</label>
                        <textarea name="deskripsi" id="deskripsi" cols="35" rows="19" class="full-border"></textarea>
                        @if ($errors->has('deskripsi'))
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="p-2nd-container">
                <div class="submit-container">
                    <button type="submit" class="button-submit text-white unbounded">Kirim</button>
                </div>
            </div>
        </div>
    </form>
@endsection