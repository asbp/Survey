<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>SISTIK</title>
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Material Design Lite">
	<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
	<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#3372DF">
	<link rel="shortcut icon" href="images/favicon.png">
	<link href="<?php echo base_url();?>assets/css/icon.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/material.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
	<style>
		.demo-ribbon {
			width: 100%;
			height: 40vh;
			background-color: #3F51B5;
			-webkit-flex-shrink: 0;
			-ms-flex-negative: 0;
			flex-shrink: 0;
		}

		.demo-main {
			margin-top: -35vh;
			-webkit-flex-shrink: 0;
			-ms-flex-negative: 0;
			flex-shrink: 0;
		}

		.demo-header .mdl-layout__header-row {
			padding-left: 40px;
		}

		.demo-container {
			max-width: 1600px;
			width: calc(100% - 16px);
			margin: 0 auto;
		}

		.demo-content {
			border-radius: 2px;
			padding: 80px 56px;
			margin-bottom: 80px;
		}

		.demo-layout.is-small-screen .demo-content {
			padding: 40px 28px;
		}

		.demo-content h3 {
			margin-top: 48px;
		}

		.demo-footer {
			padding-left: 40px;
		}

		.demo-footer .mdl-mini-footer--link-list a {
			font-size: 13px;
		}

	</style>
</head>

<body>
	<div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
		<header class="demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">SURVEY TINGKAT KEPUASAN KECAMATAN CINAMBO</span>
			</div>
		</header>
		<div class="demo-ribbon"></div>
		<main class="demo-main mdl-layout__content">
			<div class="demo-container mdl-grid">
				<div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
				<div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
					<h3>Form Pengisian Survey</h3>
					<br>
					<form action="<?php echo base_url();?>index.php/crud/tambah_data" method="post">
						<!-- Nama -->
						<h4>Nama</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
							<input class="mdl-textfield__input" name="nama" id="nama" type="text" pattern="([A-z\s]){2,}">
							<label class="mdl-textfield__label" for="nama">Masukan Nama</label>
							<span class="mdl-textfield__error">Masukan nama yang benar</span>
						</div>

						<!-- Umur -->
						<h4>Umur</h4>
						<div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
							<input class="mdl-textfield__input" name="umur" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="umur">
							<label class="mdl-textfield__label" for="umur">Masukan Umur</label>
							<span class="mdl-textfield__error">Masukan umur yang benar</span>
						</div>
						<br>
						<!-- Jenis Kelamin -->
						<table>
							<h4>Jenis Kelamin</h4>
							<div class="mdl-textfield mdl-js-textfield">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="laki">
									<input type="radio" name="jk" id="laki" class="mdl-radio__button" value="Laki Laki" required>
									<span class="mdl-radio__label">Laki Laki</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pr">
									<input type="radio" name="jk" id="pr" class="mdl-radio__button" value="Perempuan" required>
									<span class="mdl-radio__label">Perempuan</span>
								</label>
							</div>
						</table>
						<br>

						<!-- Pendidikan Terakhir -->
						<table>
							<h4>Pendidikan Terakhir</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ts">
									<input class="mdl-radio__button" type="radio" name="pt" id="ts" value="Tidak Sekolah" required>
									<span class="mdl-radio__label">Tidak Sekolah</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sd">
									<input class="mdl-radio__button" type="radio" name="pt" id="sd" value="SD Sederajat" required>
									<span class="mdl-radio__label">SD Sederajat</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="smp">
									<input class="mdl-radio__button" type="radio" name="pt" id="smp" value="SLTP Sederajat" required>
									<span class="mdl-radio__label">SLTP Sederajat</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sma">
									<input class="mdl-radio__button" type="radio" name="pt" id="sma" value="SLTA Sederajat" required>
									<span class="mdl-radio__label">SLTA Sederajat</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="d">
									<input class="mdl-radio__button" type="radio" name="pt" id="d" value="Diploma" required>
									<span class="mdl-radio__label">Diploma</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="S1">
									<input class="mdl-radio__button" type="radio" name="pt" id="S1" value="S1" required>
									<span class="mdl-radio__label">S1</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="S2">
									<input class="mdl-radio__button" type="radio" name="pt" id="S2" value="S2" required>
									<span class="mdl-radio__label">S2</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="S3">
									<input class="mdl-radio__button" type="radio" name="pt" id="S3" value="S3" required>
									<span class="mdl-radio__label">S3</span>
								</label>
							</div>
						</table>

						<br>

						<!-- Pekerjaan Utama -->
						<table>
							<h4>Pekerjaan Utama</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pns">
									<input class="mdl-radio__button" type="radio" name="pu" id="pns" value="PNS/TNI/POLRI" required>
									<span for="pns">PNS/TNI/POLRI</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ps">
									<input class="mdl-radio__button" type="radio" name="pu" id="ps" value="Pegawai Swasta" required>
									<span for="ps">Pegawai Swasta</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="wu">
									<input class="mdl-radio__button" type="radio" name="pu" id="wu" value="Wiraswasta/Usahawan" required>
									<span for="wu">Wiraswasta/Usahawan</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="mhs">
									<input class="mdl-radio__button" type="radio" name="pu" id="mhs" value="Pelajar/Mahasiswa" required>
									<span for="mhs">Pelajar/Mahasiswa</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pemahaman Saudara tentang kemudahan prosedur/pelayanan di Kecamatan Cinambo?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="tm">
									<input class="mdl-radio__button" type="radio" name="pe" id="tm" value="1" required>
									<span class="mdl_radio__label">Tidak Mudah</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="km">
									<input class="mdl-radio__button" type="radio" name="pe" id="km" value="2" required>
									<span class="mdl_radio__label">Kurang Mudah</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="m">
									<input class="mdl-radio__button" type="radio" name="pe" id="m" value="3" required>
									<span class="mdl_radio__label">Mudah</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="sm">
									<input class="mdl-radio__button" type="radio" name="pe" id="sm" value="4" required>
									<span class="mdl_radio__label">Sangat Mudah</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_tidak_jelas">
									<input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_tidak_jelas" value="1" required>
									<span class="mdl_radio__label">Tidak Jelas</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_kurang_jelas">
									<input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_kurang_jelas" value="2" required>
									<span class="mdl_radio__label">Kurang Jelas</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_jelas">
									<input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_jelas" value="3" required>
									<span class="mdl_radio__label">Jelas</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_sangat_jelas">
									<input class="mdl-radio__button" type="radio" name="kesesuaian" id="kesesuaian_sangat_jelas" value="4" required>
									<span class="mdl_radio__label">Sangat Jelas</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang kejelasan dan kepastian petugas dalam membantu pelayanan?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kejelasan_tidak_jelas">
									<input class="mdl-radio__button" type="radio" name="kejelasan" id="kejelasan_tidak_jelas" value="1" required>
									<span class="mdl_radio__label">Tidak Jelas</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kejelasan_kurang_jelas">
									<input class="mdl-radio__button" type="radio" name="kejelasan" id="kejelasan_kurang_jelas" value="2" required>
									<span class="mdl_radio__label">Kurang Jelas</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kejelasan_jelas">
									<input class="mdl-radio__button" type="radio" name="kejelasan" id="kejelasan_jelas" value="3" required>
									<span class="mdl_radio__label">Jelas</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kejelasan_sangat_jelas">
									<input class="mdl-radio__button" type="radio" name="kejelasan" id="kejelasan_sangat_jelas" value="4" required>
									<span class="mdl_radio__label">Sangat Jelas</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang kedisiplinan petugas dalam membantu pelayanan?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kedisiplinan_tidak_disiplin">
									<input class="mdl-radio__button" type="radio" name="kedisiplinan" id="kedisiplinan_tidak_disiplin" value="1" required>
									<span class="mdl_radio__label">Tidak Disipin</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kedisiplinan_kurang_disiplin">
									<input class="mdl-radio__button" type="radio" name="kedisiplinan" id="kedisiplinan_kurang_disiplin" value="2" required>
									<span class="mdl_radio__label">Kurang Disipin</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kedisiplinan_disiplin">
									<input class="mdl-radio__button" type="radio" name="kedisiplinan" id="kedisiplinan_disiplin" value="3" required>
									<span class="mdl_radio__label">Disipin</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kedisiplinan_sangat_disiplin">
									<input class="mdl-radio__button" type="radio" name="kedisiplinan" id="kedisiplinan_sangat_disiplin" value="4" required>
									<span class="mdl_radio__label">Sangat Disipin</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang tanggung jawab petugas dalam memberikan pelayanan?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="petugas_tidak_bertanggung_jawab">
									<input class="mdl-radio__button" type="radio" name="petugas" id="petugas_tidak_bertanggung_jawab" value="1" required>
									<span class="mdl_radio__label">Tidak Bertanggung Jawab</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="petugas_kurang_bertanggung_jawab">
									<input class="mdl-radio__button" type="radio" name="petugas" id="petugas_kurang_bertanggung_jawab" value="2" required>
									<span class="mdl_radio__label">Kurang Bertanggung Jawab</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="petugas_bertanggung_jawab">
									<input class="mdl-radio__button" type="radio" name="petugas" id="petugas_bertanggung_jawab" value="6" required>
									<span class="mdl_radio__label">Bertanggung Jawab</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="petugas_sangat_bertanggung_jawab">
									<input class="mdl-radio__button" type="radio" name="petugas" id="petugas_sangat_bertanggung_jawab" value="4" required>
									<span class="mdl_radio__label">Sangat Bertanggung Jawab</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang kemampuan petugas dalam memberikan pelayanan?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pelayanan_tidak_mampu">
									<input class="mdl-radio__button" type="radio" name="pelayanan" id="pelayanan_tidak_mampu" value="1" required>
									<span class="mdl_radio__label"="pelayanan_tidak_mampu">Tidak Mampu</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pelayanan_kurang_mampu">
									<input class="mdl-radio__button" type="radio" name="pelayanan" id="pelayanan_kurang_mampu" value="2" required>
									<span class="mdl_radio__label"="pelayanan_kurang_mampu">Kurang Mampu</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pelayanan_mampu">
									<input class="mdl-radio__button" type="radio" name="pelayanan" id="pelayanan_mampu" value="3" required>
									<span class="mdl_radio__label"="pelayanan_mampu">Mampu</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pelayanan_sangat_mampu">
									<input class="mdl-radio__button" type="radio" name="pelayanan" id="pelayanan_sangat_mampu" value="4" required>
									<span class="mdl_radio__label"="pelayanan_sangat_mampu">Sangat Mampu</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang kecepatan pelayanan di Kecamatan Cinambo ini?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kecepatan_tidak_cepat">
									<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_tidak_cepat" value="1" required>
									<span class="mdl_radio__label"="kecepatan_tidak_cepat">Tidak Cepat</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kecepatan_kurang_cepat">
									<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_kurang_cepat" value="2" required>
									<span class="mdl_radio__label"="kecepatan_kurang_cepat">Kurang Cepat</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kecepatan_cepat">
									<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_cepat" value="3" required>
									<span class="mdl_radio__label"="kecepatan_cepat">Cepat</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kecepatan_sangat_cepat">
									<input class="mdl-radio__button" type="radio" name="kecepatan" id="kecepatan_sangat_cepat" value="4" required>
									<span class="mdl_radio__label"="kecepatan_sangat_cepat">Sangat Cepat</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang keadilan untuk mendapatkan pelayanan di Kecamatan Cinambo ini?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="keadilan_tidak_adil">
									<input class="mdl-radio__button" type="radio" name="keadilan" id="keadilan_tidak_adil" value="1" required>
									<span class="mdl_radio__label"="keadilan_tidak_adil">Tidak Adil</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="keadilan_kurang_adil">
									<input class="mdl-radio__button" type="radio" name="keadilan" id="keadilan_kurang_adil" value="2" required>
									<span class="mdl_radio__label"="keadilan_kurang_adil">Kurang Adil</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="keadilan_adil">
									<input class="mdl-radio__button" type="radio" name="keadilan" id="keadilan_adil" value="3" required>
									<span class="mdl_radio__label"="keadilan_adil">Adil</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="keadilan_sangat_adil">
									<input class="mdl-radio__button" type="radio" name="keadilan" id="keadilan_sangat_adil" value="4" required>
									<span class="mdl_radio__label"="keadilan_sangat_adil">Sangat Adil</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang kesopanan dan keramahan dalam mendapatkan pelayanan?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_tidak_sopan">
									<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_tidak_sopan" value="1" required>
									<span class="mdl_radio__label"="kesopanan_tidak_sopan">Tidak Sopan dan Ramah</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_kurang_sopan">
									<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_kurang_sopan" value="2" required>
									<span class="mdl_radio__label"="kesopanan_kurang_sopan">Kurang Sopan dan Ramah</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_sopan">
									<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_sopan" value="3" required>
									<span class="mdl_radio__label"="kesopanan_sopan">Sopan dan Ramah</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesopanan_sangat_sopan">
									<input class="mdl-radio__button" type="radio" name="kesopanan" id="kesopanan_sangat_sopan" value="4" required>
									<span class="mdl_radio__label"="kesopanan_sangat_sopan">Sangat Sopan dan Ramah</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang kewajaran biaya untuk mendapatkan pelayanan?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_tidak_wajar">
									<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_tidak_wajar" value="1" required>
									<span class="mdl_radio__label"="kewajaran_tidak_wajar">Tidak Wajar</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_kurang_wajar">
									<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_kurang_wajar" value="2" required>
									<span class="mdl_radio__label"="kewajaran_kurang_wajar">Kurang Wajar</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_wajar">
									<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_wajar" value="3" required>
									<span class="mdl_radio__label"="kewajaran_wajar">Wajar</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kewajaran_sangat_wajar">
									<input class="mdl-radio__button" type="radio" name="kewajaran" id="kewajaran_sangat_wajar" value="4" required>
									<span class="mdl_radio__label"="kewajaran_sangat_wajar">Sangat Wajar</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang kesesuaian antara biaya yang dibayarkan dengan biaya yang telah ditetapkan?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_tidak_sesuai">
									<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian_tidak_sesuai" value="1" required>
									<span class="mdl_radio__label"="kesesuaian_tidak_sesuai">Selalu Tidak Sesuai</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_kurang_sesuai">
									<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian_kurang_sesuai" value="2" required>
									<span class="mdl_radio__label"="kesesuaian_kurang_sesuai">Kadang-kadang Kurang Sesuai</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_sesuai">
									<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian_sesuai" value="3" required>
									<span class="mdl_radio__label"="kesesuaian_sesuai">Banyak Sesuai</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kesesuaian_sangat_kesesuaian">
									<input class="mdl-radio__button" type="radio" name="kesesuaian2" id="kesesuaian_sangat_kesesuaian" value="4" required>
									<span class="mdl_radio__label"="kesesuaian_sangat_kesesuaian">Selalu Sesuai</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang ketepatan pelaksanaan terhadap jadwal waktu pelaksanaan?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ketepatan_tidak_tepat">
									<input class="mdl-radio__button" type="radio" name="ketepatan" id="ketepatan_tidak_tepat" value="1" required>
									<span class="mdl_radio__label"="ketepatan_tidak_tepat">Selalu Tidak Tepat</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ketepatan_kurang_tepat">
									<input class="mdl-radio__button" type="radio" name="ketepatan" id="ketepatan_kurang_tepat" value="2" required>
									<span class="mdl_radio__label"="ketepatan_kurang_tepat">Kadang-kadang Tepat</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ketepatan_tepat">
									<input class="mdl-radio__button" type="radio" name="ketepatan" id="ketepatan_tepat" value="6" required>
									<span class="mdl_radio__label"="ketepatan_tepat">Banyak Tepat</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--6-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ketepatan_sangat_tepat">
									<input class="mdl-radio__button" type="radio" name="ketepatan" id="ketepatan_sangat_tepat" value="4" required>
									<span class="mdl_radio__label"="ketepatan_sangat_tepat">Selalu Tepat</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang kenyamanan di lingkungan Kecamatan Cinambo?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kenyamanan_tidak_nyaman">
									<input class="mdl-radio__button" type="radio" name="kenyamanan" id="kenyamanan_tidak_nyaman" value="1" required>
									<span class="mdl_radio__label"="kenyamanan_tidak_nyaman">Tidak Nyaman</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kenyamanan_kurang_nyaman">
									<input class="mdl-radio__button" type="radio" name="kenyamanan" id="kenyamanan_kurang_nyaman" value="2" required>
									<span class="mdl_radio__label"="kenyamanan_kurang_nyaman">Kurang Nyaman</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kenyamanan_nyaman">
									<input class="mdl-radio__button" type="radio" name="kenyamanan" id="kenyamanan_nyaman" value="3" required>
									<span class="mdl_radio__label"="kenyamanan_nyaman">Nyaman</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="kenyamanan_sangat_nyaman">
									<input class="mdl-radio__button" type="radio" name="kenyamanan" id="kenyamanan_sangat_nyaman" value="4" required>
									<span class="mdl_radio__label"="kenyamanan_sangat_nyaman">Sangat Nyaman</span>
								</label>
							</div>
						</table>
						<br>
						<table>
							<h4>Bagaimana pendapat Saudara tentang keamanan pelayanan di Kecamatan Cinambo?</h4>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="keamanan_tidak_aman">
									<input class="mdl-radio__button" type="radio" name="keamanan" id="keamanan_tidak_aman" value="1" required>
									<span class="mdl_radio__label"="keamanan_tidak_aman">Tidak Aman</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="keamanan_kurang_aman">
									<input class="mdl-radio__button" type="radio" name="keamanan" id="keamanan_kurang_aman" value="2" required>
									<span class="mdl_radio__label"="keamanan_kurang_aman">Kurang Aman</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="keamanan_aman">
									<input class="mdl-radio__button" type="radio" name="keamanan" id="keamanan_aman" value="3" required>
									<span class="mdl_radio__label"="keamanan_aman">Aman</span>
								</label>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-cell--3-col">
								<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="keamanan_sangat_aman">
									<input class="mdl-radio__button" type="radio" name="keamanan" id="keamanan_sangat_aman" value="4" required>
									<span class="mdl_radio__label"="keamanan_sangat_aman">Sangat Aman</span>
								</label>
							</div>
						</table>
						<br>
						<br>
						<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" onclick="" type="submit"
						name="submit" value="Save">
						<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="" type="reset" name="reset" value="RESET">
						<br>
					</form>
				</div>
			</div>
			<footer class="demo-footer mdl-mini-footer">
				<div class="mdl-mini-footer--left-section">
					<ul class="mdl-mini-footer--link-list">
						<li>
							<a href="#">Help</a>
						</li>
						<li>
							<a href="#">Privacy and Terms</a>
						</li>
						<li>
							<a href="#">User Agreement</a>
						</li>
					</ul>
				</div>
			</footer>
		</main>
	</div>

	<script src="<?php echo base_url();?>assets/js/material.min.js"></script>
</body>

</html>
