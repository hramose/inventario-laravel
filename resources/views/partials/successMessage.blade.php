@if (Session::has('message'))
	<p class="alert alert-success">{{ Session::get('message') }}  <i class="glyphicon glyphicon-ok"></i> </p>
@endif

@if (Session::has('error'))
<div class="alert alert-danger">
	<p>{{ Session::get('error') }}  <i class="glyphicon glyphicon glyphicon-remove"></i> </p>
</div>
@endif
