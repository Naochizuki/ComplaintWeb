@extends('layout.master')

@section('content')
    <div class="form-container">
        <form action="/homepage" method="post" class="form">
            @csrf
            <div class="input-container">
                <label for="email" class="text-orange unbounded label">Email</label>
                <input type="email" name="email" id="email" class="border-bottom">
            </div>
            <div class="input-container">
                <label for="password" class="text-orange unbounded label">Password</label>
                <input type="password" name="password" id="password" class="border-bottom">
            </div>
            <div class="button-container">
                <button type="submit" class="text-white unbounded button-login">Login</button>
                <button type="submit" class="text-orange unbounded button-signup">Sign Up</button>
            </div>
        </form>
    </div>
@endsection