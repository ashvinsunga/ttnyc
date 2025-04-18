@extends('layouts.main')

@section('content')
    <section class="my-5 py-5">
        <div class="row container mx-auto">
            <div class="text-center mt-3 pt-5 col-lg-6 col-m-12 col-sm-12">
                <h3 class="font-weight-bold">Account Info</h3>
                <hr class="mx-auto">
                <div class="account-info">
                    <p>Name<span>John</span></p>
                    <p>Email<span>test@email.com</span></p>
                    <p><a href="" id="order-btn">Your orders</a></p>
                    <p><a href="" id="logout-btn">Logout</a></p>
                </div>
            </div>

            <div class="text-center mt-3 pt-5 col-lg-6 col-m-12 col-sm-12">
                <form id="account-form">
                    <h3>Change Password</h3>
                    <hr class="mx-auto">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="account-password" name="password"
                            placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" id="account-password-confirm" name="confirm-password"
                            placeholder="Confirm Password">
                    </div>

                    <div class="form-group">
                        <input type="submit" id="change-pass-btn" class="btn" value="Change Password">
                    </div>

                </form>
            </div>


            {{-- Orders --}}

            <section class="orders container py-5">
                <div class="container">
                    <h2 class="font-weight-bold text-center">Your Orders</h2>
                    <hr class="mx-auto">
                </div>

                <table>
                    <tr>
                        <th>Product</th>
                        <th>Date</th>
                    </tr>

                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="{{ asset('images/featured1.jpg') }}">
                                <div>
                                    <p class="mt-3">White Shoes</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <span>2025-04-20</span>
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </section>
@endsection
