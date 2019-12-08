@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/authors') }}">Author</a> :
@endsection
@section("contentheader_description", $author->$view_col)
@section("section", "Authors")
@section("section_url", url(config('laraadmin.adminRoute') . '/authors'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Authors Edit : ".$author->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($author, ['route' => [config('laraadmin.adminRoute') . '.authors.update', $author->id ], 'method'=>'PUT', 'id' => 'author-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'email')
					@la_input($module, 'address')
					@la_input($module, 'short_intro')
					@la_input($module, 'description')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/authors') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#author-edit-form").validate({
		
	});
});
</script>
@endpush
