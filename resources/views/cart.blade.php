@extends('layouts.main')

@section('content')
    {{-- Cart --}}

    <section class="cart container py-5">
        <div class="container">
            <h2 class="font-weight-bold">Your Cart</h2>
            <hr>
        </div>
        <div id="cart-items">
            @include('cart_items')
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
                    product_id: elem.parents("tr").attr("data-id"),
                    quantity: elem.val()
                },
                success: function(response) {
                    $("#cart-items").html(response.success)
                    console.log(response);
                }
            })
        })
    </script>
@endsection
