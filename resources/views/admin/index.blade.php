<!DOCTYPE html>
<html>

<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
	<link href='{{ asset('gambar/logo.png')}}' rel='shourtcut icon'>
	<style>
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		input[type="number"] {
			-moz-appearance: textfield;
		}
	</style>
</head>

<body>
	<div class="vertical-nav bg-white sidebar" id="sidebar">
		<div class="py-4 px-3 mb-4 bg-light">
			<div class="media d-flex align-items-center"><img src="{{ asset('gambar/Avatar.png')}}" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
				<div class="media-body">
					<h4 class="m-0">Halo,</h4>
					<p class="font-weight-light text-muted mb-0">{{auth()->user()->name}}</p>
				</div>
			</div>
		</div>

		<p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Menu</p>

		<ul class="nav flex-column bg-white mb-0">
			<li class="nav-item">
				<a href="/database" class="nav-link text-dark font-italic bg-light">
					<i class="fa fa-home mr-3 text-primary fa-fw"></i>
					Home
				</a>
			</li>
			<li class="nav-item">
				<form method="post" action="/logoutadmin">
				@csrf
				<a href="#" class="nav-link text-dark font-italic bg-light" onclick="$(this).closest('form').submit()">
					<i class="fas fa-door-open mr-3 text-primary fa-fw"></i>
					Logout
				</a>
				</form>
			</li>
		</ul>
	</div>

	<div class="page-content p-5" id="content">
		<h1 class="text-center mt-3">Selamat datang di Sistem Pengecekan Pemesan Online</h1>


		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
		
		<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Data Pemesan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <form method="post" action="/add">
			@csrf
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap Anda" required>
				</div>
				<div class="form-group">
					<label>Tanggal Check-In</label>
					<input type="date" name="tgl_checkin" class="form-control" min="1945-01-01" max="2099-01-01" required>
				</div>				
				<div class="form-group">
					<label>Tanggal Check-Out</label>
					<input type="date" name="tgl_checkout" class="form-control" min="1945-01-01" max="2099-01-01" required>
				</div>
				<div class="form-group">
					<label>Tipe Ruangan</label>
					<select class="form-control" name="tipe_ruang" required>
						<option value="" disabled selected>Pilihan</option>
						<option value="Single Bed">Single Bed</option>
						<option value="Double Bed">Double Bed</option>
						<option value="Queen Bed">Queen Bed</option>
						<option value="King Bed">King Bed</option>
					</select>
				</div>
				<div class="form-group">
					<label>Total Biaya</label>
					<input type="number" name="total" class="form-control" placeholder="Masukan Total Biaya" required>
				</div>
				<input type="hidden" name="status" class="form-control" value="Belum Check-In" required>
				<button type="submit" class="btn btn-success" name="">Simpan</button>
				<button type="reset" class="btn btn-danger" name="">Bersihkan</button>
			</form>

      </div>
    </div>
  </div>
</div>

<div class="text-right">
  <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Tambah Pesanan</a>
</div>
		<div class="card mt-3">
			<div class="card-header bg-success text-white text-center">
				Data Pemesan
			</div>
			<div class="card-body">
				<div class="table-responsive-xl">
					<table class="table">
						<thead class="thead-light">
							
							<tr>
								<th>Nama Pemesan</th>
								<th>Tanggal Check-In</th>
								<th>Tanggal Check-Out</th>
								<th>Tipe Ruangan</th>
								<th>Total Biaya</th>
								<th>Status</th>
								<th>Tanggal Check In</th>
								<th>Konfirmasi</th>
							</tr>
							@foreach ($tsk as $tsk)
							<tr>
								<td>{{$tsk->nama_lengkap}}</td>
								<td>{{$tsk->tgl_checkin}}</td>
								<td>{{$tsk->tgl_checkout}}</td>
								<td>{{$tsk->tipe_ruang}}</td>
								<td>{{$tsk->total}}</td>
								<td>{{$tsk->status}}</td>
								<td>{{$tsk->wkt_checkin}}</td>
								<td>
									<a href="/upstat/{{$tsk->id}}/" class="btn btn-warning"> Check-In </a>
									<a href="/delstat/{{$tsk->id}}/" onclick="return confirm('Apakah anda yakin akan Check-Out ?')" class="btn btn-danger"> Check-Out </a>
								</td>
							</tr>	
							@endforeach
						</thead>
					</table>
				</div>
			</div>

		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script type="text/javascript">
			$(function() {
				$('#sidebarCollapse').on('click', function() {
					$('#sidebar, #content').toggleClass('active');
				});
			});
		</script>
</body>

</html>