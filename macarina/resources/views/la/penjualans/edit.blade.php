@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/penjualans') }}">Penjualan</a> :
@endsection
@section("contentheader_description", $penjualan->$view_col)
@section("section", "Penjualans")
@section("section_url", url(config('laraadmin.adminRoute') . '/penjualans'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Penjualans Edit : ".$penjualan->$view_col)

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
				{!! Form::model($penjualan, ['route' => [config('laraadmin.adminRoute') . '.penjualans.update', $penjualan->id ], 'method'=>'PUT', 'id' => 'penjualan-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'macarina')
					@la_input($module, 'user')
					@la_input($module, 'level')
					@la_input($module, 'tanggal')
					@la_input($module, 'jumlah')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/penjualans') }}">Cancel</a></button>
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
	$("#penjualan-edit-form").validate({
		
	});
});
</script>
@endpush
