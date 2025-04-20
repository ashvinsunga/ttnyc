@extends('layouts.main')

@section('content')
    {{-- Home --}}
    <section id="home" class="">
        <div class="container">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best prices</span> this season</h1>
            <p>Shop offers the best producst for the most affordable prices</p>
            <button>SHOP NOW</button>
        </div>
    </section>

    {{-- Brands --}}
    <section id="brand" class="container">
        <div class="row">
            <img src="{{ asset('images/brand1.PNG') }}"class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="{{ asset('images/brand2.PNG') }}"class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="{{ asset('images/brand3.PNG') }}"class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="{{ asset('images/brand4.PNG') }}"class="img-fluid col-lg-3 col-md-6 col-sm-12">
        </div>
    </section>

    {{-- New Arrivals --}}
    <section id="new" class="w-100">
        <div class="row p-0 m-0 m-auto">
            {{-- One --}}
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="{{ asset('images/1.jpg') }}" alt="">
                <div class="details">
                    <h2>The best and awesome shoes</h2>
                    <button>Shop now</button>
                </div>
            </div>

            {{-- Two --}}
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="{{ asset('images/2.jpg') }}" alt="">
                <div class="details">
                    <h2>50% off watches</h2>
                    <button>Shop now</button>
                </div>
            </div>

            {{-- Three --}}
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="{{ asset('images/3.jpg') }}" alt="">
                <div class="details">
                    <h2>The best and awesome bag</h2>
                    <button>Shop now</button>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Products --}}
    <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Featured</h3>
            <hr class="mx-auto">
            <p>Please check our featured products</p>
        </div>

        <div class="row mx-auto container-fluid">

            @foreach ($products as $product)
                <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                    <img src="{{ asset('images/' . $product->product_image) }}" class="img-fluid mb-3">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">{{ $product->product_name }}</h5>
                    <h4 class="p-price">{{ $product->product_price }}</h4>
                    <button class="buy-btn">Buy Now</button>
                </div>
            @endforeach

        </div>
    </section>

    {{-- Banner --}}
    <section id="banner">
        <div class="container">
            <h4>MID SEASON SALE</h4>
            <h1>Spring Collection <br> Up to 50% off</h1>
            <button>SHOP NOW</button>
        </div>
    </section>

    {{-- Clothes --}}
    <section id="clothes" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Dresses & Coats</h3>
            <hr class="mx-auto">
            <p>Please check our amazing collection of clothes</p>
        </div>

        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="{{ asset('images/clothes1.jpg') }}" class="img-fluid mb-3">
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
                <img src="{{ asset('images/clothes2.jpg') }}" class="img-fluid mb-3">
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
                <img src="{{ asset('images/clothes3.jpg') }}" class="img-fluid mb-3">
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
                <img src="{{ asset('images/clothes4.jpg') }}" class="img-fluid mb-3">
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

    {{-- Shoes --}}
    <section id="shoes" class="my-5 pb-5">
        <div class="container text-center">
            <h3>Shoes</h3>
            <hr class="mx-auto">
            <p>Please check our amazing collection of shoes</p>
        </div>

        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="{{ asset('images/shoes1.jpg') }}" class="img-fluid mb-3">
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
                <img src="{{ asset('images/shoes2.jpg') }}" class="img-fluid mb-3">
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
                <img src="{{ asset('images/shoes3.jpg') }}" class="img-fluid mb-3">
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
                <img src="{{ asset('images/shoes4.jpg') }}" class="img-fluid mb-3">
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

    {{-- Watches --}}
    <section id="watches" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
            <h3>Best Watches</h3>
            <hr class="mx-auto">
            <p>Please check our unique collection of watches</p>
        </div>

        <div class="row mx-auto container-fluid">
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
                <img src="{{ asset('images/watch1.jpg') }}" class="img-fluid mb-3">
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
                <img src="{{ asset('images/watch2.jpg') }}" class="img-fluid mb-3">
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
                <img src="{{ asset('images/watch3.jpg') }}" class="img-fluid mb-3">
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
                <img src="{{ asset('images/watch4.jpg') }}" class="img-fluid mb-3">
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
@endsection
