@extends('layouts.auth')

@section('content')
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card">
                <form class="theme-form login-form" method="POST" action="{{ route('admin.login') }}">
                    @csrf
                    <h4>Admin Login</h4>
                    <h6>Welcome back! Log in to your admin account.</h6>
                    <div class="form-group">
                        <label>Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="icon-email"></i></span>
                            <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com" value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="icon-lock"></i></span>
                            <input class="form-control" type="password" name="password" required="" placeholder="********">
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <input id="checkbox1" type="checkbox">
                            <label class="text-muted" for="checkbox1">Remember password</label>
                        </div><a class="link" href="#">Forgot password?</a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection