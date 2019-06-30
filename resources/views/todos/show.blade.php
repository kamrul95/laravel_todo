@extends('layouts.app')

@section('title')
    Show item
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center my-5">{{$todo->name}}</h1>
            <div class="card">
                <div class="card-header">
                    Details
                </div>
                <div class="card-body">
                    {{$todo->description}}
                </div>
                <div class="flex m-2">
                    <a class="btn btn-success" href="{{route('todos.edit',['todo'=>$todo->id])}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('todos.destroy',['todo'=>$todo->id])}}">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
