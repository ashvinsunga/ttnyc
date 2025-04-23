@if (session('cart'))
    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
        @php $total = 0; @endphp
        @foreach (session('cart') as $key => $details)
            @php $total = $total + $details['price'] * $details['quantity']; @endphp
            <tr data-id={{ $key }}>
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
                    <input class="form-control quantity" type="number" name="quantity" min="1"
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
@endif
