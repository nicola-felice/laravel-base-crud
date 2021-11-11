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
			<a href="{{route("comics.edit", $comic["id"])}}"><button type="button" class="btn btn-secondary mt-2">Modifica</button></a>
			
			<button data-toggle="modal" type="button" class="btn btn-danger mt-2" data-target="#modal{{$comic["id"]}}">Elimina</button>
			{{-- modal --}}
			<div class="modal" tabindex="-1" id="modal{{$comic["id"]}}">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Attenzione!</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Sei sicuro di voler eliminare il fumetto?</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
							<form action="{{route("comics.destroy", $comic["id"])}}" method="POST">
								@csrf
								@method("DELETE")
								<button type="submit" class="btn btn-danger">Elimina</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			{{-- end modal --}}
		</td>
	  </tr>
	  @endforeach
	</tbody>
</table>
@endsection
