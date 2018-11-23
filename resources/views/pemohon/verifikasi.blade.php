@extends('template.app')
@section('content')
<div class="col-md-12 mt-5">
	<div class="card card-outline-primary">
		<div class="card-header">
			<h4 class="m-b-0 text-white"><center>Form Tambah Pemohon</center></h4>
		</div>
		<div class="card-body">
			<form method="POST" action="{{route('lanjut', $pemohon->id)}}" aria-label="{{ __('Verifikasi') }}">
				@csrf
				<div class="form-body">
					<div class="row p-t-20">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Nama Pemohon</label>
								<input type="text" id="firstName" class="form-control" value="{{$pemohon->nama}}" placeholder="Masukan Nama Makanan" readonly="true">
								<small class="form-control-feedback"></small> </div>
							</div>
							<!--/span-->
							<div class="col-md-6">
								<div class="form-group has-danger">
									<label class="control-label">Tanggal Lahir</label>
									<input type="date" value="{{$pemohon->ttl}}" class="form-control" placeholder="dd/mm/yyyy" readonly="true">
									<small class="form-control-feedback"></small> </div>
								</div>
								<!--/span-->
							</div>
							<!--/row-->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label">Tinggi</label>
										<input type="number" value="{{$pemohon->tinggi}}" minlength="160" id="firstName" class="form-control" placeholder="Masukan Tinggi Badan" readonly="true">
										<small class="form-control-feedback"></small> </div>
									</div>
									<!--/span-->
									<div class="col-md-6">
										<div class="form-group has-danger">
											<label class="control-label">Pekerjaan</label>
											<input type="text" value="{{$pemohon->pekerjaan}}"  class="form-control" placeholder="Masukan Pekerjaan" readonly="true">
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
											<textarea class="form-control" style="height: 100px" rows="5" name="alamat" id="comment" readonly="true">{{$pemohon->alamat}}</textarea>
										</div>
									</div>
									<!--/span-->
								</div>
								<hr>
								<div class="row">
								<div class="col-md-6">										
									<label class="control-label">Tes Tulis</label>
									<select class="form-control show-tick" data-live-search="true" name="tertulis" required>
										<option value="Belum" {{ $pemohon->tertulis == 'Belum' ? 'selected' : null }}>Belum</option>
										<option value="Berhasil" {{ $pemohon->tertulis == 'Berhasil' ? 'selected' : null }}>Berhasil</option>
										<option value="Gagal" {{ $pemohon->tertulis == 'Gagal' ? 'selected' : null }}>Gagal</option>
									</select>
								</div>
								<div class="col-md-6">									
									<label class="control-label">Tes Praktek</label>
									<select class="form-control show-tick" data-live-search="true" name="praktek" required>
										<option value="Belum" {{ $pemohon->praktek == 'Belum' ? 'selected' : null }}>Belum</option>
										<option value="Berhasil" {{ $pemohon->praktek == 'Berhasil' ? 'selected' : null }}>Berhasil</option>
										<option value="Gagal" {{ $pemohon->praktek == 'Gagal' ? 'selected' : null }}>Gagal</option>
									</select>
								</div>
								</div>
								<!--/span-->
							</div>
							<br>
							<hr>
							<!--/row-->
							<div class="form-actions mt-3">
								<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
								<a href="{{route('pemohon.index')}}" type="button" class="btn btn-inverse">Cancel</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			@endsection