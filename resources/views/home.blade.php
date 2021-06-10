@extends('layouts.app')

@section('title')
    Homepage
@endsection

{{-- HOMEPAGE MAIN  --}}
@section('main_section')

    <div class="main-container">
        <div class="container">
            <div class="current">
                <h2>CURRENT SERIES</h2>
            </div>

            <div class="comic flex">
                @foreach($comics as $item)

                {{-- Single Box --}}
                <div class="single-box">

                    <div class="image-box">
                        <a href="{{ route('product', ['id' => $item['id']]) }}">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                        </a>
                    </div>

                    <h3> {{ $item['series'] }} </h3>

                </div>
                {{-- End Single Box --}}

             @endforeach
            </div>
        </div>


        <button class="load-button">Load More</button>

        <div class="back-blue">

            <div class="container flex">

                <div class="single-item flex">
                    <img src=" {{ asset('img/buy-comics-digital-comics.png')}} " alt="comic">
                    <p>digital comics</p>
                </div>

                <div class="single-item flex">
                    <img src=" {{ asset('img/buy-comics-merchandise.png')}} " alt="comic">
                    <p>dc merchandise</p>
                </div>

                <div class="single-item flex">
                    <img src=" {{ asset('img/buy-comics-subscriptions.png')}} " alt="comic">
                    <p>subscription</p>
                </div>

                <div class="single-item flex">
                    <img src=" {{ asset('img/buy-comics-shop-locator.png')}} " alt="comic">
                    <p>comic shop locator</p>
                </div>

                <div class="single-item flex">
                    <img src=" {{ asset('img/buy-dc-power-visa.svg')}} " alt="comic">
                    <p>dc power visa</p>
                </div>

            </div>
        </div>
    </div>

@endsection