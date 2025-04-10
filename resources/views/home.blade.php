@extends('layouts.main')

@section('content')
    <section id="home" class="">
        <div class="container">
            <h5>NEW ARRIVALS</h5>
            <h1><span>Best prices</span> this season</h1>
            <p>Shop offers the best producst for the most affordable prices</p>
            <button>SHOP NOW</button>
        </div>
    </section>

    <section id="brand" class="container">
        <div class="row">
            <img src="{{ asset('images/brand1.PNG') }}"class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="{{ asset('images/brand2.PNG') }}"class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="{{ asset('images/brand3.PNG') }}"class="img-fluid col-lg-3 col-md-6 col-sm-12">
            <img src="{{ asset('images/brand4.PNG') }}"class="img-fluid col-lg-3 col-md-6 col-sm-12">
        </div>
    </section>

    <section id="new" class="w-100">
        <div class="row p-0 m-0">
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
@endsection
