@if(session('status'))
	<div class="alert alert-success alert-dismissible" id="alerta" role="alert">
        <strong>Genial!</strong> {{ session('status')}}
    </div>
    <script>
    	$("#alerta").fadeTo(6000, 1000).slideUp(1000, function(){
            $("#alerta").slideUp(1000);
            });
    </script>
@endif
