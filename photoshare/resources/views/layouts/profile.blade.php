@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <img src="/uploads/avatars/{{$user->avatar}}" style="width: 150px; height: 150px; float:left; border-radius: 50%; margin-right: 25px">
                <h2>{{$user->name}}'s Profile</h2>
                @if ($editable)
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label for="avatar">Upoad Profile Image</label>
                    <input type="file" name="avatar" id="avatar">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
                @endif
            </div>
        </div>
    </div>
        <br>
        <div class="container">
            <div class="row">
                @if ($editable)
                <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                            <div class="panel-heading">Update your user description:</div>
                                <div class="panel-body">

                <form action="/description" method="POST">
                    <textarea type="text" name="description"  id="description"> {{$user->description}} </textarea>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
                @endif
            </div>
        </div>
                </div>
            </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile Description:</div>

                    <div class="panel-body">
                        <p>{{$user->description}}</p>
                        <br>
                        <div class="panel-heading">Images posted on PhotoShare:</div>
                        @foreach($images as $image)
                            <img src="/{{ $image->file }}" style="max-width: 100%"/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
