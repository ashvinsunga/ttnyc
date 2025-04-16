@extends('layouts.main')

@section('content')
    <section>
        <div class="container mx-auto text-center">
            <h2>Login</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="login-form">
                <div class="form-group">
                    <label> Email </label>
                    <input type="text" class="form-control" id="login-email" name="email" placeholder="Email">
                </div>

                <div class="form-group">
                    <label> Password </label>
                    <input type="password" class="form-control" id="login-password" name="password" placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn" id="login-btn" value="Login"">
                </div>

                <div class="form-group">
                    <a id="register-url" class="btn">Don't have account? Register</a>
                </div>
            </form>
        </div>
    </section>
@endsection
