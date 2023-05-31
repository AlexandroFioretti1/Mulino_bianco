@extends('layouts.app')

@section('content')

<div class="container">
    <form method="post" action="{{route('admin.products.update',$product->id)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
            <input value="{{$product->thumb}}" type="text" name="thumb" id="thumb" class="form-control" placeholder="thumb" aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="{{$product->name}}" type="text" name="name" id="name" class="form-control" placeholder="name" aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input value="{{$product->type}}" type="text" name="type" id="type" class="form-control" placeholder="type" aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">weight</label>
            <input value="{{$product->weight}}" type="number" name="weight" id="weight" class="form-control" placeholder="weight" aria-describedby="helpId">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input value="{{$product->description}}" type="text" name="description" id="description" class="form-control" placeholder="description" aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection