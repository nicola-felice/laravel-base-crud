@extends('layouts.base')

@section('pageContent')
<h1>Lista fumetti</h1>
<table class="table mt-3">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">title</th>
		<th scope="col">type</th>
		<th scope="col">description</th>
		<th scope="col">price</th>
		<th scope="col">actions</th>
	  </tr>
	</thead>
	<tbody>
	  @foreach ($comics as $comic)
	  <tr>
		<th scope="row">{{$comic['id']}}</th>
		<td>{{$comic['title']}}</td>
		<td>{{$comic['type']}}</td>
		<td>{{$comic['description']}}</td>
		<td>{{$comic['price']}}</td>
		<td>
			<a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
		</td>
	  </tr>
	  @endforeach
	</tbody>
</table>
@endsection