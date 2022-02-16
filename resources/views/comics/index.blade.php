@extends('layouts.app')

@section('page_title')
    Lista Comics
@endsection

@section('content')
    <h1>Lista Comics</h1>

    @foreach ($comics as $comic)
        <div>
            <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                <h2>{{$comic->title}}</h2>
            </a>
            <span>{{$comic->type}}</span>
        </div>  
    @endforeach
@endsection