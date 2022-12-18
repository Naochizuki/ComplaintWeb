@extends('layout.master')

@section('content')
    <div class="form-container">
        @if ($errors->has('msg'))
            <div class="credential-invalid">
                <strong>{{ $errors->first('msg') }}</strong>
            </div>
        @endif
        <form action="/homepage" method="post" class="form">
            @csrf
            <div class="input-container">
                <label for="email" class="text-orange unbounded label">Email</label>
                <input type="email" name="email" id="email" class="border-bottom">
                @if ($errors->has('email'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                @endif
            </div>
            <div class="input-container">
                <label for="password" class="text-orange unbounded label">Password</label>
                <input type="password" name="password" id="password" class="border-bottom">
                @if ($errors->has('password'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                @endif
            </div>
            <div class="button-container">
                <button type="submit" class="text-white unbounded button-login" name="button" value="login">Login</button>
                <button type="submit" class="text-orange unbounded button-signup" name="button" value="signup">Sign Up</button>
            </div>
        </form>
    </div>
@endsection