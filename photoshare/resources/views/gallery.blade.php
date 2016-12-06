@extends('layouts.app')

@section('content')


<div class="container">
    <div class="well well-sm">
        <div class="form-group">
            <div class="input-group input-group-md">
                <div class="icon-addon addon-md">
                    <input type="text" placeholder="What are you looking for?" class="form-control" v-model="query">
                </div>
                <span class="input-group-btn">
                            <button class="btn btn-default" type="button" v-if="!loading">Search!</button>
                            <button class="btn btn-default" type="button" disabled="disabled" v-if="loading">Searching...</button>
                        </span>



            </div>
        </div>
    </div>
    <div class="alert alert-danger" role="alert" v-if="error">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        @{{ error }}
    </div>
    <div id="image" class="row list-group">
        <div class="item col-xs-4 col-lg-4" v-for="image in images">
            <div class="thumbnail">
                <img class="group list-group-image" :src="image.image" alt="@{{ image.description }}" />
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">@{{ image.description }}</h4>
                    <p class="group inner list-group-item-text">@{{ image.description }}</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">$@{{ image.price }}</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <a class="btn btn-success" href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
