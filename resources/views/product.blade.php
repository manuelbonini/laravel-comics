@extends('layouts.app')

@section('main_section')
    
    <div class="product">

        <div class="back-blue"></div>

        <div class="small-container">
            <div class="product-img">
                <img src=" {{ $product['thumb'] }}" alt="{{ $product['series'] }} ">
            </div>

            <div class="product-info flex">

                <div class="info">
                    <h1>{{ $product['title'] }}</h1>

                    <div class="availability flex">
                        <div class="price">U.S: Price: <span class="end-price">{{ $product['price'] }}</span></div>

                        <div class="available">Available</div>

                        <div class="availability-check flex"> Check Availability <span><i class="fas fa-sort-down"></i></span></div>
                    </div>

                    <p class="description"> {!! $product['description'] !!} </p>

                </div>

                <div class="info-img">
                    <h3>ADVERTISEMENT</h3>
                    <img src=" {{ asset('img/adv.jpg')}} " alt="advisor">
                </div>

            </div>

            <div class="more-info">
                
            </div>

        </div>

    </div>

@endsection