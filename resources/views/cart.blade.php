@extends('layouts.main')

@section('content')
    {{-- Cart --}}

    <section class="cart container py-5">
        <div class="container">
            <h2 class="font-weight-bold">Your Cart</h2>
            <hr>
        </div>

        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <tr>
                <td>
                    <div class="product-info">
                        <img src="{{ asset('images/featured1.jpg') }}">
                        <div>
                            <p>White Shoes</p>
                            <small><span>$155</span></small>
                            <br>
                            <a class="remove-btn" href="#">Remove</a>
                        </div>
                    </div>
                </td>

                <td>
                    <input type="number" value="1">
                    <a class="edit-btn" href="#">Edit</a>
                </td>

                <td>
                    <span>$</span>
                    <span class="product-price">155</span>
                </td>
            </tr>
        </table>

        <div class="cart-total">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$155</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$155</td>
                </tr>
            </table>
        </div>

        <div class="checkout-container">
            <button class="btn checkout-btn">
                CHECKOUT
            </button>
        </div>
    </section>
@endsection
