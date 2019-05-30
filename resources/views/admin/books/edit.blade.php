@extends('layouts.app')

@section('content')

    <div class="container">
        <form class="form-horizontal" action="{{route('admin.book.update', $book) }}" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}
            <fieldset class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label">Название:</label>
                    <div class="col-sm-12">
                        <input type="text" name="name" class="form-control" placeholder="" value="{{$book->name ?? ''}}">
                    </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Описание:</label>
                    <div class="col-sm-12">
                        <textarea name="description" class="form-control">{{$book->description ?? ''}}</textarea>
                    </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Год издания:</label>
                    <div class="col-sm-12">
                        <input type="date" name="data_of_write" class="form-control" placeholder="" value="{{$book->data_of_write ?? ''}}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">Сохранить</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>

@endsection
