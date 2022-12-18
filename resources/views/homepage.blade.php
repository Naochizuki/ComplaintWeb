@extends('layout.master')

@section('content')
    <div class="container">
        <div class="title-container">
            <div class="title text-orange metrophobic">SiPEKA</div>
            <div class="subtitle text-orange metrophobic">SISTEM PENGADUAN HAK ASASI MANUSIA</div>
        </div>
        <div>
            <a href="/pengaduan">
                <div class="img-container">
                    <img src="img/ufuty.png" alt="SiPEKA" class="icon-img">
                </div>
            </a>
        </div>
        <a href="/" class="button-logout text-orange unbounded">
            <div class="logout-container">
                Log out
            </div>
        </a>
    </div>
@endsection