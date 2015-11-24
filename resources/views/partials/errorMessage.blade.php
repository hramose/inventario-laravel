@if (Session::has('message'))
<p class="alert alert-danger">
	<i class="glyphicon glyphicon-eye-close"></i>  {{ Session::get('message') }}
</p>
<p><a class="btn btn-default" href="{{ URL::previous() }}"><i class="glyphicon glyphicon-arrow-left"></i>&nbsp;&nbsp;&nbsp;&nbsp;Regresar</a></p>
@endif