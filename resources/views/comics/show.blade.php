@extends('layouts.base')

@section('pageContent')
<h1>{{$comic['title']}}</h1>
<p>{{$comic['description']}}</p>
<div>{{$comic['price']}}</div>
@endsection