@extends('template.app')
@section('content')

<!-- Container fluid  -->
<div class="container-fluid">
	<!-- Start Page Content -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Data Export SIM</h4>
					<h6 class="card-subtitle">Export data <keygen></keygen> Copy, CSV, Excel, PDF & Print</h6>
					<div class="table-responsive m-t-40">
						<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Nama Pemohon</th>
									<th>Alamat</th>
									<th>TTL</th>
									<th>Tinggi</th>
									<th>Pekerjaan</th>
									<th>Tes Tertulis</th>
									<th>Tes Praktek</th>
									<th>No.Sim</th>
									<th>Berlaku</th>
									<th>TTD</th>
									<th>foto</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($semuasim as $sim)
								<tr>
									<td>{{$sim->pemohon->nama }}</td>
									<td>{{$sim->pemohon->alamat}}</td>
									<td>{{$sim->pemohon->ttl}}</td>
									<td>{{$sim->pemohon->tinggi }}</td>
									<td>{{$sim->pemohon->pekerjaan }}</td>
									<td>{{$sim->pemohon->tertulis}}</td>
									<td>{{$sim->pemohon->praktek}}</td>
									<td>{{$sim->no_sim}}</td>
									<td>{{$sim->berlaku}}</td>
									<td><img src="{{$sim->ttd}}" style="width: 150px; min-width: 150px; max-width: 150px"></td>
									<td><img src="{{$sim->foto}}" style="width: 150px; min-width: 150px; max-width: 150px"></td>
									<td class="text-center mt-3">
										<form action="{{route('sim.destroy', $sim->id)}}" method="post" class="d-inline-block">
											{{ method_field('DELETE') }}
												{{csrf_field() }}
											<button type="submit" class="btn btn-warning waves-effect">
												<i class="fa fa-trash"></i>  
											</button>                  
										</form>
										<form action="{{ route('kartu') }}" method="post" class="d-inline-block">
											@csrf
											<input type="hidden" name="id" value="{{ $sim->id }}">
											<button type="submit" class="btn btn-warning waves-effect">
												<i class="fa fa-download"></i>  
											</button>                  
										</form>
									</td>	         							
								</tr>
								@endforeach		
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
