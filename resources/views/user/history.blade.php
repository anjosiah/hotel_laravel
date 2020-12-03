<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>History</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

	<style type="text/css">
		body {
			font-family: 'Open Sans', Helvetica, Arial, sans-serif;
			font-size: 13px;
			font-weight: 400;
			overflow-x: hidden;
		}
		
		a, button { transition: all 0.3s ease; }
		a:hover,
		a:focus {
			text-decoration: none;
			outline: none;
		}
		
		.tm-position-relative { position: relative; }
		.tm-flex-align-center { align-items: center; }
		.tm-fa-6x { font-size: 6em; }
		.tm-margin-b-0 { margin-bottom: 0; }
		.tm-margin-b-20 { margin-bottom: 20px; }
		.tm-p-4 { padding: 2rem!important; }
		.tm-color-white { color: white; }
		.tm-color-primary {	color: #ee5057; }
		.tm-bg-primary { background: #ee5057; }
		.tm-bg-gray { background: #F4F4F4; }
		.tm-bg-white { background: white; }
		.tm-bg-dark-blue { background: #1f3646; }
		
		.tm-bg-white-shadow {
			-webkit-box-shadow: 0px 0px 7px 0px rgba(214,214,214,1);
			-moz-box-shadow: 0px 0px 7px 0px rgba(214,214,214,1);
			box-shadow: 0px 0px 7px 0px rgba(214,214,214,1);
		}
		
		.tm-section-pad { padding: 30px 50px; }
		.tm-section-pad-2 { padding: 30px 40px; }
		.tm-article-pad { padding: 28px; }
		.tm-sidebar-pad { padding: 15px 20px; }
		.tm-sidebar-pad-2 { padding: 21px 20px; }
		.tm-pad { padding: 20px; }
		
		a.tm-color-primary:hover,
		a.tm-color-primary:active {
			color: #d53239;
		}
		
		.tm-font-light { font-weight: 300; }
		.tm-font-normal { font-weight: 400; }
		.tm-font-semibold { font-weight: 600; }
		
		p { 
			color: #898989; 
			line-height: 1.9;
		}
		
		.navbar { 
			width: 100%; 
			padding-top: 1.5%;
			padding-bottom: 0;
		}
		.navbar-brand {
			font-size: 1.8rem;
			font-weight: 700;
		}
		.navbar a { color: black; }
		
		.navbar-toggler-icon {
			background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(238, 80, 87, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
		}
		
		.navbar-toggler { 
			border-color: rgb(238, 80, 87); 
			cursor: pointer;
		}
		
		.nav-item {
			background: transparent;
			border-left: 1px solid #ccc;
			cursor: pointer;
			font-size: 0.8rem;
			font-weight: 300;
			text-transform: uppercase;
			padding: 0;
			transition: all 0.5s ease;
		}
		
		.nav-item:last-child { border-right: 1px solid #ccc; }
		
		.nav-link.active,
		.nav-link:hover {
			color: white;
			background: #ee5057;	
		}
		
		.tm-top-bar .navbar-expand-small .navbar-nav .nav-link { padding: 25px 35px; }
		
		.tm-top-bar {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			padding: 0;
			z-index: 10000;
			transition: all 0.2s ease-in-out;
			height: 100px;
			background: white;
		}
		
		.tm-top-bar.active {
			height: 79px;
			box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
		}
		
		.tm-top-bar.active .navbar-expand-lg .navbar-nav .nav-link { padding: 30px 35px; }
		.tm-top-bar-bg { height: 250px; }
		.tm-section { min-height: 515px; }
		
		.tm-section-pad {
			padding-top: 80px;
			padding-bottom: 80px;
		}
		
		
		.tm-bg-img {
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-ms-flex-align: center;
					align-items: center;
			-webkit-box-pack: center;
			-webkit-justify-content: center;
			-ms-flex-pack: center;
					justify-content: center
		}
		
		.qs-datepicker {
			font-family:  'Open Sans', Helvetica, Arial, sans-serif;
			font-size: 0.8rem;
		
		}
		
		.form-control {
			border-radius: 0;
			padding: 0.6rem 0.75rem;
			text-align: center;
		}
		
		.form-control:focus {
			border-color: #ee5057;
			box-shadow: 0 0 0 0.2rem rgba(238,80,87,.25);
			text-align: center;
		}
		
		.btn-primary {
			background-color: #ee5057;
			border-color: #ee5057;
			border-radius: 0;
			cursor: pointer;
			font-size: 0.7rem;
			font-weight: 600;
			padding: 13px 30px;
			text-transform: uppercase;
			text-align: center;
		}
		
		.btn-primary:hover,
		.btn-primary:focus,
		.btn-primary:active {
			background-color: #d53239;
			border-color: #d53239;
		}
		
		.tm-search-form .tm-form-element { padding:  0 10px ; }
		.tm-form-element { position: relative; }
		.tm-form-element:last-child { margin-right: 0; }
		
		.tm-form-element-icon {
			color: #ee5057;
			position: absolute;
			top:7px;
			left: 20px;
			bottom: 0px;
		}
		
		.tm-form-element-icon-small {
			top: 16px;
			left: 18px;
		}
		
		select.tm-select.form-control:not([size]):not([multiple]) { height: 100%; }
		
		select:not([multiple]) {
			-webkit-appearance: none;
			-moz-appearance: none;
			background-position: right 50%;
			background-repeat: no-repeat;
			background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAMCAYAAABSgIzaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NDZFNDEwNjlGNzFEMTFFMkJEQ0VDRTM1N0RCMzMyMkIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NDZFNDEwNkFGNzFEMTFFMkJEQ0VDRTM1N0RCMzMyMkIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo0NkU0MTA2N0Y3MUQxMUUyQkRDRUNFMzU3REIzMzIyQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo0NkU0MTA2OEY3MUQxMUUyQkRDRUNFMzU3REIzMzIyQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PuGsgwQAAAA5SURBVHjaYvz//z8DOYCJgUxAf42MQIzTk0D/M+KzkRGPoQSdykiKJrBGpOhgJFYTWNEIiEeAAAMAzNENEOH+do8AAAAASUVORK5CYII=);
			padding: .5em;
			padding-right: 1.5em
		}
		
		/* https://stackoverflow.com/questions/20163079/remove-select-arrow-on-ie */
		select.tm-select::-ms-expand { display: none; }
		
		.tm-select {
			border-radius: 0;
			color: #858789;
		}
		
		.tm-search-form .form-control {
			font-size: 0.8rem;	
			padding: 0.75rem 0.75rem 0.75rem 45px;
		}
		
		.placeholder {
			text-align: center;
		}
		
		body {
		 background-image:url(https://c0.wallpaperflare.com/preview/746/597/167/modern-minimalist-bedroom-bed-bedroom-hotel.jpg);
		 background-size: cover;
		 background-attachment: fixed;
		 }
	</style>		
	<title>History</title>
</head>
<body>
	
		<div class="tm-top-bar-bg"></div>
		<div class="tm-top-bar" id="tm-top-bar">
			<!-- Top Navbar -->
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-expand-lg narbar-light">
						<a class="navbar-brand mr-auto" href="#">
							Hotel
						</a>
						<button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div id="mainNav" class="collapse navbar-collapse tm-bg-white">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
								<a class="nav-link" href="/index">Home<span class="sr-only">(current)</span></a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="/history">History</a>
							  </li>
							  <li class="nav-item">
								<form method="post" action="/logoutuser">
									@csrf
									<a href="#" class="nav-link" onclick="$(this).closest('form').submit()">Logout</a>
								</form>
							  </li>
							</ul>
						</div>                            
					</nav>            
				</div>
			</div>
		</div>
	
	<h1 class="text-center mt-3" style="color: white">List Pemesanan yang Ada</h1>
	<div class="tm-section card mt-3">
		<div class="card-header bg-dark text-white text-center">
			History {{auth()->user()->name}}
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
						</tr>
						@foreach ($tsk as $tsk)
						<tr>
							<td>{{$tsk->nama_lengkap}}</td>
							<td>{{$tsk->tgl_checkin}}</td>
							<td>{{$tsk->tgl_checkout}}</td>
							<td>{{$tsk->tipe_ruang}}</td>
							<td>{{$tsk->total}}</td>
							<td>{{$tsk->status}}</td>
						</tr>	
						@endforeach
					</thead>
				</table>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</body>
</html>