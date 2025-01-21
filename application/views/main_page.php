<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pusat Kreativitas dan Teknologi Digital</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
	<style>
		body {
			font-family: 'Poppins';
			background-image: url('<?= base_url("assets/img/blue.png") ?>');
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			padding-top: 10px;
		}

		.logo-container {
			position: fixed;
			top: 20px;
			left: 5%;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.logo-container img {
			max-width: 140px;
			margin-bottom: 10px;
		}

		.logo-circle {
			width: 170px !important;
			height: auto !important;
			border-radius: 50% !important;
			object-fit: cover !important;
		}

		.content {
			margin-left: 20%;
			display: flex;
			flex-direction: column;
			padding-right: 20px;
			max-width: 80%;
		}

		.content h1 {
			margin-top: 70px;
			margin-bottom: 20px;
			color: #1F1C40;
		}

		.content p {
			flex: 1;
			margin: 0;
		}

		.card {
			background: linear-gradient(to right, #ffffff 0%, #f9f9f9 75%, #999999 100%);
			border-radius: 10px;
			border: 2px solid #000000;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			margin: 60px 0;
			padding: 30px;
			width: 96vw;
			position: relative;
			left: 50%;
			transform: translateX(-50%);
		}

		.card-body {
			flex: 1;
			display: flex;
		}

		.youtube-placeholder {
			background-image: url('<?= base_url("assets/img/test.webp") ?>');
			/* Ganti dengan path gambar yang diinginkan */
			background-size: cover;
			/* Agar gambar menutupi seluruh area */
			background-position: center;
			/* Agar gambar terpusat */
			height: 200px;
			display: flex;
			align-items: center;
			justify-content: center;
			color: #fff;
			font-size: 24px;
			border-radius: 10px;
		}


		.divider {
			width: 2px;
			background-color: #ccc;
			height: 100%;
			margin: 0 20px;
		}

		.platform-icon {
			width: 20px;
			height: auto;
			margin-right: 10px;
		}

		.play-icon {
			width: 100px;
			height: auto;
		}

		.list-link {
			color: black;
			text-decoration: none;
		}

		.list-link:hover {
			text-decoration: underline;
		}

		@media (max-width: 768px) {
			body {
				background-color: white;
				/* Latar belakang putih */
				margin: 0;
				/* Hapus margin default */
				padding: 0;
				/* Hapus padding default */
			}

			.container {
				width: 90%;
				/* Atur lebar kontainer */
				max-width: 1200px;
				/* Atur lebar maksimum */
				margin: 0 auto;
				/* Pusatkan kontainer */
				padding: 20px;
				/* Tambahkan padding jika perlu */
			}

			.content {
				width: 100%;
				/* Pastikan konten mengambil lebar penuh */
				margin: 0 auto;
				/* Pusatkan konten */
				text-align: center;
				/* Pusatkan teks jika perlu */
			}
		}
	</style>

</head>

<body>

	<div class="logo-container">
		<img src="<?= base_url('assets/img/telko.png') ?>" alt="Logo 1" class="img-fluid">
		<img src="<?= base_url('assets/img/person.png') ?>" alt="Logo 2" class="logo-circle img-fluid">
	</div>

	<div class="container content">
		<h1 style="font-weight: bold; color: #1F1C40; font-size: 24px;">Pusat Kreativitas dan Teknologi Digital</h1>
		<p class="mt-3">Selamat datang di Pusat Kreativitas dan Teknologi Digital, tempat di mana inovasi <br>bertemu dengan imajinasi. Kami berkomitmen untuk menjadi pusat terdepan dalam <br>pengembangan teknologi dan kreativitas digital, menyediakan platform bagi para <br>inovator, kreator, dan penggemar teknologi untuk berkolaborasi dan berkembang.</p>
	</div>

	<div class="container">
		<div class="card">
			<h4 class="ml-3"><b>Inovasi di Pusat Kreativitas Digital</b></h4>
			<div class="card-body">
				<div class="row flex-grow-1">
					<div class="col-md-3">
						<h6 class="card-title" style="color: #1F1C40;"><b>Platform Unggulan</b></h6>
						<ul class="list-unstyled">
							<li class="d-flex align-items-center mb-1">
								<img src="<?= base_url('assets/img/image.png') ?>" alt="" class="platform-icon">
								<a href="https://portal-mci.com" class="list-link">Portal MCI</a>
							</li>
							<li class="d-flex align-items-center mb-1">
								<img src="<?= base_url('assets/img/image.png') ?>" alt="" class="platform-icon">
								<a href="https://davis.com" class="list-link">Davis</a>
							</li>
							<li class="d-flex align-items-center mb-1">
								<img src="<?= base_url('assets/img/image.png') ?>" alt="" class="platform-icon">
								<a href="https://debiwarriors.com" class="list-link">Debi Warriors</a>
							</li>
							<li class="d-flex align-items-center mb-1">
								<img src="<?= base_url('assets/img/image.png') ?>" alt="icon" class="platform-icon">
								<a href="https://ssm-xplore.com" class="list-link">SSM Xplore</a>
							</li>
						</ul>

					</div>
					<div class="divider"></div> <!-- Divider here -->
					<div class="col-md-5">
						<h6 class="card-title" style="color: #1F1C40;"><b>Teknologi Digital Terbaru di Telkomsel</b></h6>
						<p class="card-text">Telkomsel mengedepankan pemanfaatan teknologi kecerdasan buatan (AI) dalam ekosistem inovasi. Acara ini bertujuan untuk menghubungkan produk dan portofolio inovasi Telkomsel dengan pelaku ekosistem digital di Indonesia. Dalam acara tersebut, berbagai kegiatan dilakukan, termasuk diskusi panel dan showcase inovasi AI, yang menampilkan potensi transformasional AI dalam membentuk masa depan digital.</p>
					</div>
					<div class="col-md-3">
						<div class="youtube-placeholder">
							<img src="<?= base_url('assets/img/play.webp') ?>" alt="Play Button" class="play-icon">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row" style="margin-top: -50px; padding: 0 20px;"> <!-- Pastikan padding untuk jarak sisi layar -->
		<div class="col-md-6" style="padding-right: 5px;"> <!-- Atur jarak antar kolom -->
			<div style="display: flex; align-items: center; margin: 8px; background: linear-gradient(to right, #ffffff 0%, #f9f9f9 75%, #999999 100%); border-radius: 8px; padding: 16px;">
				<img src=" <?= base_url('assets/img/2019.png') ?>" alt="The Mobile Economy" style="width: 150px; height: 100px; object-fit: cover; border-radius: 8px; margin-right: 16px;">
				<div>
					<h2 style="font-size: 20px; color:#1F1C40; margin: 0; font-weight: semibold;">The Mobile Economy</h2>
					<p style="font-size: 14px; color: #555; margin-top: 8px;">
						Ekonomi mobile merujuk pada pertumbuhan dan dampak teknologi mobile dalam industri. Ini mencakup penggunaan aplikasi dan layanan mobile yang mengubah cara orang berinteraksi dan berbisnis.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-6" style="padding-left: 5px;"> <!-- Atur jarak antar kolom -->
			<div style="display: flex; align-items: center; margin: 8px; background: linear-gradient(to right, #ffffff 0%, #f9f9f9 75%, #999999 100%); border-radius: 8px; padding: 16px;">
				<img src=" <?= base_url('assets/img/2019.png') ?>" alt="The Mobile Economy" style="width: 150px; height: 100px; object-fit: cover; border-radius: 8px; margin-right: 16px;">
				<div>
					<h2 style="font-size: 20px; color:#1F1C40; margin: 0; font-weight: semibold;">The Mobile Economy</h2>
					<p style="font-size: 14px; color: #555; margin-top: 8px;">
						Ekonomi mobile merujuk pada pertumbuhan dan dampak teknologi mobile dalam industri. Ini mencakup penggunaan aplikasi dan layanan mobile yang mengubah cara orang berinteraksi dan berbisnis.
					</p>
				</div>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>