@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/permintaan_barangs') }}">Permintaan Barang</a> :
@endsection
@section("contentheader_description", $permintaan_barang->$view_col)
@section("section", "Permintaan Barangs")
@section("section_url", url(config('laraadmin.adminRoute') . '/permintaan_barangs'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Permintaan Barangs Edit : ".$permintaan_barang->$view_col)

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
				{!! Form::model($permintaan_barang, ['route' => [config('laraadmin.adminRoute') . '.permintaan_barangs.update', $permintaan_barang->id ], 'method'=>'PUT', 'id' => 'permintaan_barang-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'NamaBarang')
					@la_input($module, 'user')
					@la_input($module, 'Tanggal')
					@la_input($module, 'Jumlah')
					@la_input($module, 'status')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/permintaan_barangs') }}">Cancel</a></button>
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
	$("#permintaan_barang-edit-form").validate({
		
	});
});
</script>
@endpush
