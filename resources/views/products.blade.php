@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        @foreach ($products as $product)
        <div class="col">
            <div class="card">
                <img src="{{$product->thumb}}" alt="#">
                <h2>{{$product->name}}</h2>
                <p>{{$product->description}}</p>
                <h5>tipo: {{$product->type}}</h5>
                <p>Peso: {{$product->weight}} G</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection