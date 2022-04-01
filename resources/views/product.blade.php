@extends('layouts.base')

@section('pageTitle', $fumetto['title'])

@section('content')
    <div class="product-content">
        <div class="img-string">
            <div class="content-width">
                <img src="{{$fumetto['thumb']}}" alt="">
            </div>
        </div>

        <div class="comic-text content-width">
            <div class="detail-comic">
                <h1>{{$fumetto['title']}}</h1>
                <div class="price-string">
                    <span>U.S. Price: {{$fumetto['price']}}</span>
                </div>
                <div class="description-text">
                    <p>{{$fumetto['description']}}</p>
                </div>
            </div>
            <div class="advertise-img">
                <img src="{{ asset('img/adv.jpg') }}" alt="Advertise">
            </div>
        </div>
    </div>
@endsection