<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		p {color: #000099; font-family: verdana;}
		body {background-color: #fff;}
		table {margin: 0 auto; width: 50%; border-collapse: collapse; background: #ecf3eb;}
		th, td {border: 1px solid #999;}
		th {padding: 10px 0; background: #0cf; font-size: 25px;}
		td {padding: 2px 2px;}
		p {margin-right: 40px;}
	</style>
</head>
<body>
	<table align="center">
		<tr>
			<th height="50" colspan="2"><center>Surat Izin Mengemudi</center><center>Kotamadya Jakarta Timur</center></th>
		</tr>
		<tr>
			<td>
				<p><blockquote><pre>
					Nama              : {{$sim->pemohon->nama}} 
					Tempat/Tgl Lahir  : {{$sim->pemohon->ttl}}
					Alamat            : {{$sim->pemohon->alamat}} 
					Pekerjaan         : {{$sim->pemohon->pekerjaan}}
					No. Sim           : {{$sim->no_sim}}   
					Berlaku Hingga    : {{$sim->berlaku}}
				</pre></blockquote></p>
			</td>
			<td>
				<blockquote>
					<img src="{{$sim->foto}}" alt="..." height="100" width="90" style="margin-top: 10px;">
					<center><h7>{{date('d-m-Y', strtotime($sim->created_at))}}</h7></center>
					<center><img src="{{$sim->ttd}}" alt="..." height="40" width="60"></center>
				</td>
				</blockquote>
			</td>
		</tr>
	</table>
</body>
</html>