@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-sm-6">
                <div class="jumbotron">
                    <p><span class="badge badge-primary " > Книг {{$count_books}} </span></p>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="jumbotron">
                    <p><span class="badge badge-primary " > Пользователей {{$count_users}} </span></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="{{route('admin.author.create')}}" class="btn btn-primary btn-block">Новый автор</a>
                @foreach($authors as $author)
                    <a href="{{route('admin.author.edit',$author)}}" class="list-group-item">
                        <h4 class="list-group-item-heading">{{$author->name}} {{$author->surname}}</h4>
                        <p class="list-group-item-text">
                            Кол-во книг {{$author->books()->count()}}
                        </p>
                    </a>
                @endforeach
            </div>

            <div class="col-sm-6">
                <a href="{{route('admin.book.create')}}" class="btn btn-primary btn-block">Добавить книгу</a>
                @foreach($books as $book)
                    <a href="{{route('admin.book.edit',$book)}}" class="list-group-item">
                        <h4 class="list-group-item-heading">{{$book->name}}</h4>
                        <p class="list-group-item-text">
                            Автор:{{$book->author->name}} {{$book->author->surname}}
                        </p>
                        @endforeach
                    </a>
            </div>



        </div>
@endsection