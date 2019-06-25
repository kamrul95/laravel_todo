<?php
/**
 * Created by PhpStorm.
 * User: mdkamrul
 * Date: 6/25/2019
 * Time: 7:52 AM
 */
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
</head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body>
<div class="container">
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

            </div>
        </div>
    </div>
</div>
</body>
</html>
