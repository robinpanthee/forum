@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Forum App</h1>
        <p class="lead">
            ASHU, Sleep Well CHALCHA CHALCHA darling. Good Night :) HAPPY HAPPY DHAYNYABAD<br>
            It is made for educational purpose at <a href="https://daredevops.com">Dare DevOps</a>
        </p>
        <a class="btn btn-lg btn-primary" href="{{route('posts.index')}}" role="button">Browse Posts &raquo;</a>
    </div>
</div>
@endsection