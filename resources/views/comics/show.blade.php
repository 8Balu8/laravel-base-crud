@extends('layouts.app')

@section('page_title')
    Details Comic
@endsection

@section('content')
    <div class="container">
        <div class="card m-auto" style="width: 24rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p class="card-text">Type: {{$comic->type}}</p>
                <p class="card-text">Series: {{$comic->series}}</p>
                <p class="card-text">Sale Date: {{$comic->sale_date}}</p>
                <h6 class="card-text">Price: {{$comic->price}}$</h6>
                <p class="card-text">
                    {{$comic->description}}<br>
                    <a class="" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit</a>
                </p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button class="btn-danger mt-2" onclick="return confirm('!!!This action is irreversible!!!')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection