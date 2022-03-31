@extends('layouts.base')

@section('pageTitle', 'Home')

@section('content')
        <div class="comics-container">
            <div class="comics-list">
                <div class="container">
                    @foreach ($fumetti as $fumetto)
                    <div class="item-comic">
                        
                            <a href="#">
                                <img src="{{$fumetto['thumb']}}" alt="">
                            </a>
                            <span>{{$fumetto['title']}}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="btn-load">
                <button>LOAD MORE</button>
            </div>
        </div>
@endsection