@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h1>{{$product->title}}</h1>
                            <div class="d-flex align-items-center">
                                <img height="100" src="{{ URL::to('/') }}/images/{{ $product->photo->file }}" alt="" class=" img-rounded" />
                            </div>
                            <div class="pagination justify-content-end">
                                <a href="{{url('/admin/products')}}" class="btn btn-success">back to products</a>
                            </div>
                        </div>
                        <hr>
                            <div class="media-body">
                                    {!! $product->body !!}
                                <div class="float-right">
                                    <span class="text-muted">Created: {{$product->created_at->diffForHumans()}}</span>
                                    <div class="media mt-2">
                                        <div class="media-body mt-1">
{{--                                           {{$product->user->name}}--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            @include('includes.form_error')
        </div>
    </div>
@endsection

