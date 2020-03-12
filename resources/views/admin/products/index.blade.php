@extends('layouts.admin')


@section('content')

    @if(Session::has('deleted_product'))

        <p class="bg-danger">{{session('deleted_product')}}</p>
    @endif

    <h1> Products </h1>

    <table class="table">
        <thead>
        <tr>
            <th>Photo</th>
            <th>Id</th>
            <th>Title</th>
            <th>Price</th>
            <th>Category</th>
            <th>Description</th>
            <th>Availability</th>
            <th>Created</th>
        </tr>
        </thead>

        @if($products)

            @foreach($products as $product)
                <tr>
                    <td> <img height="30" src="{{ URL::to('/') }}/images/{{$product->photo ? $product->photo->file : 'not photo' }}" alt="" class="img-rounded" /></td>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category ? $product->category->name : 'UnCategorized'}}</td>
                    <td>{{str_limit($product->body, 5)}}</td>
                    <td>{{$product->availability}}</td>
                    <td>{{$product->created_at->diffForHumans()}}</td>

                    <td><a href="{{route('admin.products.show', $product->id)}}"> <div class="form-group">
                                {!! Form::submit('Show', ['class'=>'btn btn-global']) !!}
                            </div></a></td>

                    <td><a href="{{route('admin.products.edit', $product->id)}}"> <div class="form-group">
                                {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
                            </div></a></td>

                    <td>{!! Form::open(['method'=>'DELETE', 'action'=>['AdminProductsController@destroy', $product->id]]) !!}

                        <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        </div>

                        {!! Form::close() !!}</td>
                </tr>
            @endforeach
        @endif
    </table>
@endsection
