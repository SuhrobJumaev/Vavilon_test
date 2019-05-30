@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('admin.author.index')}}" class="btn btn-primary">Назад</a>
        <hr>

        <h1>{{$author->name}} {{$author->father_name}} {{$author->surname}}</h1>
        <hr>
        <table class="table table-striped">
            <thead>
            <th>Название</th>
            <th>Описание</th>
            <th>Год </th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($author->books as $book)
                <tr>
                    <td>{{$book->name}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->data_of_write}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }"
                              action="{{route('admin.book.destroy',$book)}}" method="post">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}

                            <a class="btn" href="{{route('admin.book.edit',$book)}}"><i class="fa fa-edit"></i></a>
                            <a class="btn" href="{{route('admin.book.show',$book)}}"><i class="fa fa-eye"></i></a>
                            <button type="submit" class="btn" ><i class="fa fa-trash-o"></i></button>
                        </form>


                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center"><h2>Книг нет</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">

                    </ul>
                </td>
            </tr>
            </tfoot>

        </table>
           <h1>Добавить новую книгу</h1>
        <form action="{{route('admin.book.store')}}" class="form-horizontal" method="post">
            <input type="hidden" name="author_id" value="{{$author->id}}">
            {{csrf_field()}}
            <fieldset class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label">Название:</label>
                    <div class="col-sm-12">
                        <input type="text" name="name" class="form-control" placeholder="Название" value="">
                    </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Описание:</label>
                    <div class="col-sm-12">
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Год издания:</label>
                    <div class="col-sm-12">
                        <input type="date" name="data_of_write" class="form-control" placeholder="Год издания" value="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">Создать</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection