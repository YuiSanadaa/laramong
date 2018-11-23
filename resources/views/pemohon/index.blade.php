@extends('template.app')
@section('content')

<!-- Container fluid  -->
<div class="container-fluid">
	<!-- Start Page Content -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Data Export Pemohon</h4>
					<h6 class="card-subtitle">Export data <keygen></keygen> Copy, CSV, Excel, PDF & Print</h6>
					<div class="table-responsive m-t-40">
						<table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>Nama Pemohon</th>
									<th>tinggi</th>
									<th>TTL</th>
									<th>pekerjaan</th>
									<th>Alamat</th>
									<th>Tertulis</th>
									<th>Praktek</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($pemohon as $calo)
								<tr>
									<td>{{$calo->nama}}</td>
									<td>{{$calo->tinggi}}</td>
									<td>{{$calo->ttl}}</td>
									<td>{{$calo->pekerjaan}}</td>
									<td>{{$calo->alamat}}</td>
									<td>{{$calo->tertulis}}</td>
									<td>{{$calo->praktek}}</td>
									<td class="text-center ">
										<div class="row justify-content-center">
											<div style="padding: 10px">
												<a style="padding: 10px"href="{{route('pemohon.edit', $calo->id)}}" class="btn btn-info btn-circle waves-effect waves-circle waves-float waves-light">
													<i class="fa fa-pencil"></i>                    
												</a>
											</div>
											<div style="padding: 10px">
												<a href="{{route('verifikasi',$calo->id)}}" class="btn btn-success btn-circle waves-effect waves-circle waves-float waves-light">
													<i class="fa fa-chevron-right"></i>                    
												</a>
											</div>
											<form action="{{route('pemohon.destroy', $calo->id)}}" method="post" class="d-inline-block">
												{{ method_field('DELETE') }}
												{{csrf_field() }}
												<button style="padding: 100 type="submit" class="btn btn-danger waves-effect btn-circle">
													<i class="fa fa-trash"></i>  
												</button>                              
											</form>
										</div>
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

<!-- <td class="text-center" style="border: 10px black;">
	<div class="row justify-content-center">
		<div class="text-center">
		الكفار</div>
	</div>
	<div class="row justify-content-center">
		<div style="padding: 10px">
			<a style="padding: 10px"href="{{route('pemohon.edit', $calo->id)}}" class="btn btn-info btn-circle waves-effect waves-circle waves-float waves-light">
				<i class="fa fa-eye-slash"></i>                    
			</a>
		</div>
		<div style="padding: 10px">
			<a href="{{route('pemohon.edit', $calo->id)}}" class="btn btn-info btn-circle waves-effect waves-circle waves-float waves-light">
				<i class="fa fa-eye"></i>                    
			</a>
		</div>
		<form action="{{route('pemohon.destroy', $calo->id)}}" method="post" class="d-inline-block">
			{{ method_field('DELETE') }}
			{{csrf_field() }}
			<button style="padding: 100 type="submit" class="btn btn-warning waves-effect btn-circle">
				<i class="fa fa-genderless"></i>  
			</button>                              
		</form>
	</div>
</td>	          -->