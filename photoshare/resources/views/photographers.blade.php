@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="color: #333333;
font-family: Tahoma, Geneva, sans-serif;">List of Photographers</div>

                    <div class="panel-body">

                        @foreach($users as $user)
                            <div class="list-group">
                            <a href="/profiles/{{$user->id}}" class="list-group-item list-group-item-action active">
                                <h5 class="list-group-item-heading">{{$user->name}}</h5>
                                </a>

                            </div>
                            @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection