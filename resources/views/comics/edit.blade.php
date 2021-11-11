@extends('layouts.base')

@section('pageContent')
<h1>Modifica dati fumetto</h1>

<form action="{{route("comics.update", $comic['id'])}}" method="POST">
	@csrf
  @method('PUT')

	<div class="form-group">
		<label for="title">Titolo</label>
		<input type="text" class="form-control" id="title" name="title" value="{{$comic['title']}}">
	</div>

	<div class="form-group">
		<label for="type">Tipologia fumetto</label>
		<input type="text" class="form-control" id="type" name="type" value="{{$comic['type']}}">
	</div>

  <div class="form-group">
		<label for="description">Descrizione</label>
		<textarea type="text" class="form-control" id="description" rows="8" name="description">{{$comic['description']}}</textarea>
	</div>

  <div class="form-group">
		<label for="thumb">Link immagine</label>
		<input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic['thumb']}}">
	</div>

  <div class="form-group">
		<label for="price">Prezzo</label>
		<input type="number" class="form-control" id="price" name="price" value="{{$comic['price']}}">
	</div>

  <div class="form-group">
		<label for="series">Serie del fumetto</label>
		<input type="text" class="form-control" id="series" name="series" value="{{$comic['series']}}">
	</div>

  <div class="form-group">
		<label for="sale_data">Data</label>
		<input type="text" class="form-control" id="sale_data" name="sale_data" value="{{$comic['sale_data']}}">
	</div>

	<button type="submit" class="btn btn-primary">Salva</button>
  </form>

@endsection