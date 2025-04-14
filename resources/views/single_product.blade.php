@extends('layouts.main')

@section('content')
    <section id="single-product my-5 pt-5">
        <div class="container">

            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <img src="{{ asset('images/featured1.jpg') }}" alt="" class="img-fluid pb-1">
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

            </div>
        </div>
    </section>
@endsection
