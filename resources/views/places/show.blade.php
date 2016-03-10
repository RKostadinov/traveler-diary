@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$place->name}}</div>
                    <div class="panel-body">
                        @foreach($photos as $photo)
                            <div>
                                <img src="{{public_path($photo)}}">
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection