@extends('admin.layouts.app')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title')Создание автора @endslot
            @slot('parent') Главная @endslot
            @slot('active') Авторы @endslot
        @endcomponent

        <hr/>
        <form class="form-horizontal" action="{{route('admin.author.store')}}" method="post">
            {{csrf_field()}}
            <fieldset class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label">Имя:</label>
                    <div class="col-sm-12">
                        <input type="text" name="name" class="form-control" placeholder="Имя" value="">
                    </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Фамилия:</label>
                    <div class="col-sm-12">
                        <input type="text" name="surname" class="form-control" placeholder="Фамилия" value="">
                    </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Отчество:</label>
                    <div class="col-sm-12">
                        <input type="text" name="father_name" class="form-control" placeholder="Отчество" value="">
                    </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label">Дата рождения:</label>
                    <div class="col-sm-12">
                        <input type="date" name="date_of_birth" class="form-control" placeholder="Дата рождения" value="">
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