
@extends('layouts.app')

@section('content')

<div class="row" style="margin:0 auto">
    <div class="col-md-4" style="margin:0 auto">
        <img height="300" src="{{$book->cover}}" alt="">
    </div>
    <div class="col-md-8" style="margin:0 auto">
        <h3>
            price : 300tk
        </h3>
        <h3>
            Author: Thomas H. Cormen
        </h3>
        <h3>
            in stock
        </h3>

        <h3>
            <button class="btn btn-primary">buy now</button>
        </h3>
        <h3>
            <button class="btn btn-primary">add to cart</button>
        </h3>

        
        
    </div>
   
    

</div>


<h3 class="text-center">Related books</h3>
    
    
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

<script>

</script>
@endsection


