@extends('layouts.base')

@section('pageTitle', 'Home')

@section('content')
        <div class="comics-container">
            <div class="comics-list">
                <div class="container">
                    @foreach ($fumetti as $key => $fumetto)
                    <div class="item-comic">
                            <img src="{{$fumetto['thumb']}}" alt="">
                            <a href="{{route('product', ['comic_id' => $key] )}}">
                                <span>{{$fumetto['title']}}</span>
                            </a>                 
                    </div>
                    
                    @endforeach
                </div>
            </div>
            <div class="btn-load">
                <button>LOAD MORE</button>
            </div>
        </div>
@endsection