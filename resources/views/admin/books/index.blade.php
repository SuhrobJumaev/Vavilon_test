@extends('admin.layouts.app')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')

            @slot('title') Список книг @endslot
            @slot('parent') Главная  @endslot
            @slot('active') Книги @endslot
        @endcomponent


        <a href="{{route('admin.author.index')}}" class="btn btn-primary pull-right m-2"><i class="fa
        fa-plus-square-o pull-left p-1"></i>Добавить книгу</a>

        <table class="table table-striped">

            <thead>
                 <th>Название</th>
                 <th>Год </th>
                 <th class="text-right">Действие</th>
            </thead>

            <tbody>
                 @forelse($books as $book)
                     <tr>
                         <td>{{$book->name}}</td>
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
                            {{$books->links()}}
                        </ul>
                     </td>
                 </tr>
            </tfoot>

        </table>

    </div>

@endsection