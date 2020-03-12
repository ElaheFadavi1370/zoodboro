@extends('layouts.admin')

@section('content')

{{--    @if(Session::has('deleted_media'))--}}

{{--        <p class="bg-danger">{{session('deleted_media')}}</p>--}}
{{--    @endif--}}



    <h1> Media </h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Created</th>
        </tr>
        </thead>
        <tbody>
        @if($photos)

            @foreach($photos as $photo)
                <tr>
                    <td>{{$photo->id}}</td>
                    <td> <img height="50" src="{{ URL::to('/') }}/images/{{$photo->file }}" alt="" class="img-rounded" /></td>
                    <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'No date'}}</td>
                <td>

                    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}

                    <div class="form-group">
                        {!! Form::submit('Delete Media', ['class'=>'btn btn-danger col-sm-6']) !!}
                    </div>

                    {!! Form::close() !!}

                </td>
            @endforeach
        @endif
        </tbody>
    </table>
@stop


