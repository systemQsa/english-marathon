@extends('layouts.admin_layout')
 @section('content')
 
    <h2>Prices</h2>
    <div class="conteiner d-flex justify-content-around">
        <h3>Price online</h3>
        <h3>Price offline</h3>
        <h3>Discount</h3>
        <h3></h3>
        <h3></h3>
    </div>
    @foreach($prices as $price)
        <div class="container d-flex justify-content-around">
            <div class="mt-2"><h4>{{ $price['online_price']}}</h4></div>
            <div><h4 class="text-center">{{ $price['offline_price']}}</h4></div>
            <h5>{{ $price->discount}}</h5>
            <a href="prices/{{$price->id}}/edit"><button class="btn btn-primary ml-3">Edit</button></a>
        </div>
        <hr>
    @endforeach
    
@endsection




