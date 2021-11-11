@extends('layouts.base')

@section('pageContent')
<h1>Inserisci un nuovo fumetto</h1>

<form action="{{route("comics.store")}}" method="POST">
	@csrf

	<div class="form-group">
		<label for="title">Titolo</label>
		<input type="text" class="form-control" id="title" name="title" placeholder="Insersci titolo">
	</div>

	<div class="form-group">
		<label for="type">Tipologia fumetto</label>
		<input type="text" class="form-control" id="type" name="type" placeholder="Insersci tipologia">
	</div>

  <div class="form-group">
		<label for="description">Descrizione</label>
		<input type="text" class="form-control" id="description" name="description" placeholder="Insersci descrizione">
	</div>

  <div class="form-group">
		<label for="thumb">Link immagine</label>
		<input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insersci immagine">
	</div>

  <div class="form-group">
		<label for="price">Prezzo</label>
		<input type="number" class="form-control" id="price" name="price" placeholder="Insersci prezzo">
	</div>

  <div class="form-group">
		<label for="series">Serie del fumetto</label>
		<input type="text" class="form-control" id="series" name="series" placeholder="Insersci serie">
	</div>

  <div class="form-group">
		<label for="sale_data">Data</label>
		<input type="text" class="form-control" id="sale_data" name="sale_data" placeholder="Insersci data">
	</div>

	<button type="submit" class="btn btn-primary">Crea</button>
  </form>

@endsection