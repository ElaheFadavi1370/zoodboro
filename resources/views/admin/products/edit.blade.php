@extends('layouts.admin')

@section('content')

    <h1>  Update Product </h1>

    {!! Form::model($product , ['method'=>'PATCH', 'action'=>['AdminProductsController@update', $product->id],'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control' ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'File:') !!}
        {!! Form::file('photo_id', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Product', ['class'=>'btn btn-primary']) !!}
    </div>

{{--    {!! Form::close() !!}--}}

{{--    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminProductsController@destroy', $product->id]]) !!}--}}

{{--    <div class="form-group">--}}
{{--        {!! Form::submit('Delete Product', ['class'=>'btn btn-danger']) !!}--}}
{{--    </div>--}}

{{--    {!! Form::close() !!}--}}

    @include('includes.form_error')

@endsection
