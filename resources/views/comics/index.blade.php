@extends('layouts.app')

@section('page_title')
    Lista Comics
@endsection

@section('content')
    <h1 class="text-center">Lista Comics</h1>
    <div class="container">
        @foreach ($comics as $comic)
            <div class="list-group">
                <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{$comic->title}}</h5>
                    </div>
                    <p class="mb-1">{{$comic->type}}</p>
                </a>
            </div>
        @endforeach
    </div>
@endsection