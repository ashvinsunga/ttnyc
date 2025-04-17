@extends('layouts.main')

@section('content')
    <section>
        <div class="container mx-auto text-center">
            <h2>Register</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="register-form">
                <div class="form-group">
                    <label> Email </label>
                    <input type="text" class="form-control" id="register-email" name="email" placeholder="Email">
                </div>

                <div class="form-group">
                    <label> Password </label>
                    <input type="password" class="form-control" id="register-password" name="password"
                        placeholder="Password">
                </div>

                <div class="form-group">
                    <label> Confirm password </label>
                    <input type="password" class="form-control" id="register-confirm" name="confirmPassword"
                        placeholder="Password">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn" id="register-btn" value="Register"">
                </div>

                <div class="form-group">
                    <a id="login-url" class="btn">Already have an account? Login here</a>
                </div>
            </form>
        </div>
    </section>
@endsection
