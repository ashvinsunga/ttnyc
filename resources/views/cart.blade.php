@extends('layouts.main')

@section('content')
    {{-- Cart --}}

    <section class="cart container py-5">
        <div class="container">
            <h2 class="font-weight-bold">Your Cart</h2>
            <hr>
        </div>
        @if (session('cart'))
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>

                @foreach (session('cart') as $key => $details)
                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="{{ asset('images/' . $details['image']) }}">
                                <div>
                                    <p>{{ $details['name'] }}</p>
                                    <small><span>{{ $details['price'] }}</span></small>
                                    <br>
                                    <a class="remove-btn" href="#">Remove</a>
                                </div>
                            </div>
                        </td>

                        <td>
                            <input type="number" value={{ $details['quantity'] }}>
                            <a class="edit-btn" href="#">Edit</a>
                        </td>

                        <td>
                            <span>$</span>
                            <span class="product-price">{{ $details['price'] * $details['quantity'] }}</span>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
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
