@extends('layouts.admin')


@section('content')

    @if(Session::has('deleted_category'))

        <p class="bg-danger">{{session('deleted_category')}}</p>
    @endif


    <h1> Categories </h1>

    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null , ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
    @stop