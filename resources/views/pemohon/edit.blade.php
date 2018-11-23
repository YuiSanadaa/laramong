@extends('template.app')
@section('content')
<div class="col-md-12 mt-5">
	<div class="card card-outline-primary">
		<div class="card-header">
			<h4 class="m-b-0 text-white"><center>Form Tambah Pemohon</center></h4>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('pemohon.update', $pemohon->id) }}" aria-label="{{ __('Edit Pemohon') }}" enctype="multipart/form-data">
				@csrf @method('PUT')
				@csrf
				<div class="form-body">
					<div class="row p-t-20">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Nama Pemohon</label>
								<input type="text" id="firstName" class="form-control" name="namas" value="{{$pemohon->nama}}" placeholder="Masukan Nama Makanan">
								<small class="form-control-feedback"></small> </div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group has-danger">
									<label class="control-label">Tanggal Lahir</label>
									<input type="date" name="ttl" value="{{$pemohon->ttl}}" class="form-control" placeholder="dd/mm/yyyy">
									<small class="form-control-feedback"></small> </div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Tinggi</label>
										<input type="number" value="{{$pemohon->tinggi}}" minlength="160" id="firstName" class="form-control" name="tinggi" placeholder="Masukan Tinggi Badan">
										<small class="form-control-feedback"></small> </div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group has-danger">
											<label class="control-label">Pekerjaan</label>
											<input type="text" value="{{$pemohon->pekerjaan}}" name="pekerjaan" class="form-control" placeholder="Masukan Pekerjaan">
											<small class="form-control-feedback"></small> </div>
										</div>
									</div>
									<!--/span-->
									<!--/span-->
								</div>
								<!--/row-->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="comment">Alamat :</label>
											<textarea class="form-control" style="height: 100px" rows="5" name="alamat" name="deksripsi" id="comment">{{$pemohon->alamat}}</textarea>
										</div>
									</div>
									<!--/span-->
									<div class="col-md-6">
									</div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<div class="form-actions">
								<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
								<button type="button" class="btn btn-inverse">Cancel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			@endsection