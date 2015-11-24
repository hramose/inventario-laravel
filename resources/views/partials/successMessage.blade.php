@if (Session::has('message'))
	<p class="alert alert-success">{{ Session::get('message') }}  <i class="glyphicon glyphicon-ok"></i> </p>
@endif