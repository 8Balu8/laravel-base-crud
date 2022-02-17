@extends('layouts.app')

@section('page_title')
    Details Comic
@endsection

@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
        <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            <p class="card-text">
                {{$comic->description}}
                <a class="" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit</a>
            </p>
            <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
    </div>
@endsection