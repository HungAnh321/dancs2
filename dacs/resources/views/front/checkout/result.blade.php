@extends('front.layout.masters')
@section('title', 'Result')
@section('body1')

    <!-- Shopping Cart Section Begin -->
    <section class="checkout-section spad">
        <div class="container">

                <div class="row">
                        <div class="col-lg-12">
                            <h4>{{$notification}}</h4>
                        </div>
                    <a href="./shop" class="primary-btn mt-5">Continue Shopping</a>
                </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->
@endsection
