@extends('layouts.app')

@section('content')

<h2 class="text-center"> physics</h2>
<div class="row" style="margin:16px auto">
        @foreach($books as $book)
        <div class="col">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$book->publisher}}</p>
            </div>
            </div>
        </div>
        @endforeach
        @foreach($books as $book)
        <div class="col">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$book->publisher}}</p>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    <h2 class="text-center"> Computer Science</h2>
<div class="row" style="margin:16px auto">
@foreach($books as $book)
        <div class="col">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$book->publisher}}</p>
            </div>
            </div>
        </div>
        @endforeach
        @foreach($books as $book)
        <div class="col">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$book->publisher}}</p>
            </div>
            </div>
        </div>
        @endforeach
    </div>

<div class="row" style="margin:16px auto">
        <div class="col">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$book->publisher}}</p>
            </div>
            </div>
        </div>
        <div class="col">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$book->publisher}}</p>
            </div>
            </div>
        </div>
        <div class="col">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$book->publisher}}</p>
            </div>
            </div>
        </div>
    </div>


<div class="row" style="margin:16px auto">
        <div class="col">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$book->publisher}}</p>
            </div>
            </div>
        </div>
        <div class="col">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$book->publisher}}</p>
            </div>
            </div>
        </div>
        <div class="col">
        <div class="card" style="width: 10rem;">
            <img class="card-img-top" src="{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$book->publisher}}</p>
            </div>
            </div>
        </div>
    </div>




@endsection
