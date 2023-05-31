@extends('layouts.app')

@section('content')

<div class="container">
    <a name="product" id="product" class="btn btn-primary" href="{{route('admin.products.create')}}" role="button">New product</a>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Thumb</th>
                    <th scope="col">name</th>
                    <th scope="col">Weight</th>
                    <th scope="col">description</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="">
                    <td><img width="150" src="{{$product->thumb}}" alt=""></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->weight}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->type}}</td>
                    <td>
                        <a href="{{route('admin.products.show', $product->id)}}"><i class="fa-regular fa-eye"></i></a>
                        <a href="{{route('admin.products.edit', $product->id)}}"><i class="fa-regular fa-pen-to-square"></i></a>
                        <form method="post" action="{{route('admin.products.destroy',$product->id)}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn text-primary"><i class="fa-regular fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>
@endsection