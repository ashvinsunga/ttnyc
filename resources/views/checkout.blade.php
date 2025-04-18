@extends('layouts.main')

@section('content')
    <section>
        <div class="container mx-auto text-center">
            <h2>Checkout</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="checkout-form">

                <div class="form-group checkout-small-element">
                    <label> Name </label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Password" required>
                </div>

                <div class="form-group checkout-small-element">
                    <label> Email </label>
                    <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email"
                        required>
                </div>

                <div class="form-group checkout-small-element">
                    <label> Phone </label>
                    <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone">
                </div>

                <div class="form-group checkout-small-element">
                    <label> City </label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City">
                </div>

                <div class="form-group checkout-large-element">
                    <label> Address </label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address">
                </div>

                <div class="form-group checkout-btn-container">
                    <input type="submit" class="btn" id="checkout-btn" value="Checkout"">
                </div>

            </form>
        </div>
    </section>
@endsection
