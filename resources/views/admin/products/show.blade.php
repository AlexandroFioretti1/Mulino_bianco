@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <img src="{{$product->thumb}}" alt="#">
                <h2>{{$product->name}}</h2>
                <p>{{$product->description}}</p>
                <h5>tipo: {{$product->type}}</h5>
                <p>Peso: {{$product->weight}} G</p>
            </div>
        </div>
    </div>
</div>


@endsection