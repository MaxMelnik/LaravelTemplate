@extends('layouts.main')
@section('content')
    <div>
        @foreach($books as $book)
            <div>{{$book->title}}</div>
        @endforeach
    </div>
@endsection
