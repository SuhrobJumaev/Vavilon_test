@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('admin.book.index')}}" class="btn btn-primary">Назад</a>
        <hr>

        <h1>{{$book->name}}</h1>
        <hr>
        <table class="table table-striped">
            <thead>
            <th>Описание</th>
            <th>Год </th>
            <th>Имя автора</th>
            <th>Оттчество автора</th>
            <th>Фамилия автора</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{$book->description}}</td>
                    <td>{{$book->data_of_write}}</td>
                    <td>{{$book->author->name}}</td>
                    <td>{{$book->author->father_name}}</td>
                    <td>{{$book->author->surname}}</td>
                </tr>

            </tbody>

        </table>

    </div>
@endsection