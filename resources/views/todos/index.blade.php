@extends('layouts.app')

@section('title')
    Show list
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center my-5">Todos page</h1>
            <div class="card">
                <div class="card-header">
                    Todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{$todo->name}}
                                <a href="{{route('todos.show',['todo'=>$todo])}}"
                                   class="btn btn-primary sm float-right">View</a>
                            </li>
                        @endforeach
                    </ul>

                </div>

            </div>
        </div>
    </div>
@endsection
