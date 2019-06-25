<?php
/**
 * Created by PhpStorm.
 * User: mdkamrul
 * Date: 6/26/2019
 * Time: 12:08 AM
 */
?>
@extends('layouts.app')

@section('title')
    Show item
@endsection

@section('content')
    <h1 class="text-center my-5">Create Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create new todos
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post" action="{{route('todos.store')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Give name">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="description" id="description" cols="5" rows="5" placeholder="Give description"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Create Todo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

