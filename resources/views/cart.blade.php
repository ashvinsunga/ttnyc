@extends('layouts.main')

@section('content')
    {{-- Cart --}}

    <section class="cart container py-5">
        <div class="container">
            <h2 class="font-weight-bold">Your Cart</h2>
            <hr>
        </div>
        @php $total = 0; @endphp
        @if (session('cart'))
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>

                @foreach (session('cart') as $key => $details)
                    @php $total = $total + $details['price'] * $details['quantity']; @endphp
                    <tr data-id="{{ $key }}">
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
                            <input class="quantity" type="number" name="quantity" min="1"
                                value={{ $details['quantity'] }}>
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
                    <td>{{ $total }}</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>{{ $total }}</td>
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

@section('scripts')
    <script type="text/javascript">
        $("body").on("change", ".quantity", function(e) {
            var elem = $(this);

            $.ajax({
                url: "{{ route('cart.update') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    product_id: elem.parent("tr").attr("data-id"),
                    quantity: elem.val()
                },
                success: function(response) {
                    console.log(response);
                }
            })
        })
    </script>
@endsection
