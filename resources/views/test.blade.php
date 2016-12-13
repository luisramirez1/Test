@extends('principal')

@section('contenido')

<div class="jumbotron" style="width: 90%; margin: 0 auto; border-radius: 5px;">
	<div class="container">
		<div>
			<div class="radio">
				<form action="{{url('/guardarCategorias')}}" method="POST" class="jumbotron" enctype="multipart/form-data">
        			<input type="hidden" name="_token" value="{{csrf_token()}}">
	        		<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr class="info">
									<th>#</th>
									<th>Pregunta</th>
									<th>Me interesa</th>
									<th>No me interesa</th>
								</tr>
							</thead>
							<tbody style="background-color: #FAFAFA;">
								@foreach($preguntas as $p)
									<tr>
										<td>{{$p->id}}</td>
										<td>{{$p->pregunta}}</td>
										<td>
											<input type="radio" name="{{$p->id}}" id="resp" value="1" style="margin-left: 20px;" aria-label="Luis">
										</td>
										<td>
											<input type="radio" name="{{$p->id}}" id="resp" value="0" style="margin-left: 20px;" aria-label="Na">
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
        		</form>
			</div>
		</div>
	</div>
</div> <br>

@stop