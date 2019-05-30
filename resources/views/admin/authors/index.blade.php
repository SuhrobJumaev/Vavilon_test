@extends('admin.layouts.app')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')

            @slot('title') Список авторов @endslot
            @slot('parent') Главная  @endslot
            @slot('active') Авторы @endslot
        @endcomponent


        <a href="{{route('admin.author.create')}}" class="btn btn-primary pull-right m-2"><i class="fa
        fa-plus-square-o pull-left p-1"></i>Создать автора</a>
        <table class="table table-striped">
            <thead>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Фамилия</th>
            <th>День рождения</th>
            <th class="text-center">Кол-во книг</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($authors as $author)
                <tr>
                    <td>{{$author->name}}</td>
                    <td>{{$author->father_name}}</td>
                    <td>{{$author->surname}}</td>
                    <td>{{$author->date_of_birth}}</td>
                    <td class="text-center">{{$author->books->count()}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }"
                              action="{{route('admin.author.destroy',$author)}}" method="post">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}

                            <a class="btn" href="{{route('admin.author.edit',$author)}}"><i class="fa fa-edit"></i></a>
                            <a class="btn" href="{{route('admin.author.show',$author)}}"><i class="fa fa-eye"></i></a>
                            <button type="submit" class="btn" ><i class="fa fa-trash-o"></i></button>
                        </form>


                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутсвуют</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$authors->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>

        </table>

    </div>

@endsection