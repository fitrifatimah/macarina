@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/rincian_hargas') }}">Rincian Harga</a> :
@endsection
@section("contentheader_description", $rincian_harga->$view_col)
@section("section", "Rincian Hargas")
@section("section_url", url(config('laraadmin.adminRoute') . '/rincian_hargas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Rincian Hargas Edit : ".$rincian_harga->$view_col)

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
				{!! Form::model($rincian_harga, ['route' => [config('laraadmin.adminRoute') . '.rincian_hargas.update', $rincian_harga->id ], 'method'=>'PUT', 'id' => 'rincian_harga-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'kode')
					@la_input($module, 'rasa')
					@la_input($module, 'kemasan')
					@la_input($module, 'harga')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/rincian_hargas') }}">Cancel</a></button>
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
	$("#rincian_harga-edit-form").validate({
		
	});
});
</script>
@endpush
