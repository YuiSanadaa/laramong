@extends('template.app')
@section('footcontent')

@endsection
@section('content')
<div class="col-md-12 mt-5">
	<div class="card card-outline-primary">
		<div class="card-header">
			<h4 class="m-b-0 text-white"><center>Form Tambah Sim</center></h4>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('sim.store') }}" aria-label="{{ __('Tambah Sim') }}" enctype="multipart/form-data">
				@csrf
				<div class="form-body">					
					<div class="row p-t-20">			
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Nama Pemohon</label>
								<select class="form-control show-tick" data-live-search="true" name="pemohon_id" required>
									@foreach($semuapemohon as $pemohon)
									<option value="{{ $pemohon->id }}">{{ $pemohon->nama }}</option>
									@endforeach	
								</select>
								<small class="form-control-feedback"></small> </div>
							</div>
							<div class="col-md-6">
								<div class="form-group has-danger">
									<label class="control-label">Tanggal Berlaku</label>
									<input type="date" class="form-control" name="ttl" placeholder="dd/mm/yyyy">
									<small class="form-control-feedback"></small> </div>
								</div>
							</div>
							<div arclass="row p-t-20">
								<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
								<div class="row justify-content-center">
									<div class="col-sm-6">
										<div id="my_camera" style="width:320px; height:240px;"></div>
									</div>
									<div class="col-sm-6">
										<div id="my_result"></div>
										<input type="hidden" name="foto" id="foto">
									</div>
								</div>

								<script language="JavaScript">
									Webcam.attach( '#my_camera' );

									function take_snapshot() {
										Webcam.snap( function(data_uri) {
											document.getElementById('my_result').innerHTML = '<img src="'+data_uri+'"/>';
											document.getElementById('foto').value = data_uri;
										} );
									}
								</script>								
							</div>
							<div class="row justify-content-center">
								<div class="form-group">
									<br>
									<a class="btn btn-success btn-lg" href="javascript:void(take_snapshot())">Take Snapshot</a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group has-danger">
									<a href="#"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
					<button type="button" class="btn btn-inverse">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection