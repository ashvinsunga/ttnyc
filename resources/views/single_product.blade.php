@extends('layouts.main')

@section('content')
    <section class="single-product my-5 pt-5">
        <div class="container">

            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img src="{{ asset('images/featured1.jpg') }}" id="mainImg" class="img-fluid pb-1">
                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="{{ asset('images/featured2.jpg') }}" class="small-img w-100">
                        </div>
                        <div class="small-img-col">
                            <img src="{{ asset('images/featured3.jpg') }}" class="small-img w-100">
                        </div>
                        <div class="small-img-col">
                            <img src="{{ asset('images/featured4.jpg') }}" class="small-img w-100">
                        </div>
                        <div class="small-img-col">
                            <img src="{{ asset('images/clothes1.jpg') }}" class="small-img w-100">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h6>Men/Shoes</h6>
                    <h3 class="py-4">Men's Fashion</h3>
                    <h2>155$</h2>
                    <input type="number" value="1" />
                    <button class="buy-btn">Add to Cart</button>
                    <h4 class="mt-5 mb-5">Product Details</h4>
                    <span>The details of this product will be displayed shortly.
                        The details of this product will be displayed shortly.
                        The details of this product will be displayed shortly.
                        The details of this product will be displayed shortly.
                        The details of this product will be displayed shortly.
                    </span>
                </div>

            </div>

            {{-- Related Products --}}
            <section id="related-products" class="my-5 pb-5">
                <div class="container text-center mt-5 py-5">
                    <h3>Related Products</h3>
                    <hr class="mx-auto">
                </div>

                <div class="row mx-auto container-fluid">
                    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                        <img src="{{ asset('images/featured1.jpg') }}" class="img-fluid mb-3">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name">Sports Bags</h5>
                        <h4 class="p-price">$100.99</h4>
                        <button class="buy-btn">Buy Now</button>
                    </div>

                    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                        <img src="{{ asset('images/featured2.jpg') }}" class="img-fluid mb-3">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name">Sports Bags</h5>
                        <h4 class="p-price">$100.99</h4>
                        <button class="buy-btn">Buy Now</button>
                    </div>

                    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                        <img src="{{ asset('images/featured3.jpg') }}" class="img-fluid mb-3">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name">Sports Bags</h5>
                        <h4 class="p-price">$100.99</h4>
                        <button class="buy-btn">Buy Now</button>
                    </div>

                    <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                        <img src="{{ asset('images/featured4.jpg') }}" class="img-fluid mb-3">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name">Sports Bags</h5>
                        <h4 class="p-price">$100.99</h4>
                        <button class="buy-btn">Buy Now</button>
                    </div>

                </div>
            </section>
        </div>
    </section>

    <script>
        let mainImg = document.getElementById("mainImg");
        let smallImgs = document.getElementsByClassName("small-img");

        for (let i = 0; i < 4; i++) {
            smallImgs[i].onclick = function() {
                mainImg.src = smallImgs[i].src
            }
        }
    </script>
@endsection
