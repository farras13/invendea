<!doctype html>
<html lang="en">

<head>
	<title>Kominfo | Sistem Peminjaman Barang Online</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>assets/img/favicon.png">
	<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top" style="background: #1474ae">
			<div class="brand" style="background: #1474ae">
				<a href="<?= base_url() ?>Dashboard"><img src="<?= base_url() ?>assets/img/logo.png" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?= base_url() ?>Login/logout"><span style="color: white">Logout</span></a></li>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav class="sidebar-menu">
					<ul class="nav">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url() ?>index.php/Barang"><i class="glyphicon glyphicon-folder-open"></i>Data Peminjaman
								<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url() ?>Peminjaman">Data Pengajuan </a></li>
								<li><a href="<?= base_url() ?>Barang/Barang_ts">Data Barang Diambil</a></li>
								<li><a href="<?= base_url() ?>Barang/Barang_dp">Data Barang On Process</a></li>
								<li><a href="<?= base_url() ?>Barang/Barang_dp">Data Barang Dikembalikan</a></li>
								<li><a href="<?= base_url() ?>Barang/Barang_dp">Data Barang Ditolak</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="<?= base_url() ?>index.php/Barang"><i class="glyphicon glyphicon-list"></i>Barang
								<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?= base_url() ?>index.php/Barang">Data Barang </a></li>
								<li><a href="<?= base_url() ?>index.php/Barang_ts">Data Barang Tersedia</a></li>
								<li><a href="<?= base_url() ?>index.php/Barang_dp">Data Barang Dipinjam</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav">
						<li><a href="<?= base_url() ?>index.php/Peminjaman" class=""><i class="glyphicon glyphicon-transfer"></i>
								<span>Peminjaman</span></a>
						</li>
					</ul>

				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
