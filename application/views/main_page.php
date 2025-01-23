<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portal AAGM | Center for Digital Creativity and Technology</title>
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/log.svg') ?>">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
	<!-- Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: 'Poppins', sans-serif;
			background-color: #ffffff;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.card {
			width: 1000px;
			height: 100vh;
			background-image: url('<?= base_url('assets/img/4.jpg') ?>');
			background-size: cover;
			background-position: center;
			border-radius: 2px;
			box-shadow: 0 9px 25px rgba(0, 0, 0, 0.3);
			position: relative;
		}

		.card .top-right-text {
			position: absolute;
			top: 20px;
			right: 15px;
			font-size: 11px;
			font-weight: 200;
			color: black;
			display: flex;
			align-items: center;
		}

		.card .top-right-text i {
			margin-left: 5px;
		}

		.sub-card {
			width: calc(100% - 85px);
			border-radius: 10px;
			border: 2px solid #ccc;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
			position: relative;
			top: 160px;
			left: 20px;
			padding: 20px;
			display: flex;
			justify-content: space-between;
		}

		.sub-card .content,
		.sub-card .content2 {
			flex: 1;
			padding-right: 20px;
		}

		.sub-card .divider {
			width: 1px;
			background-color: #ccc;
			height: calc(80% - 40px);
			/* Adjust height to stretch between content */
			position: absolute;
			top: 60px;
			/* Adjust top position */
			left: 30%;
			/* Center the divider */
			transform: translateX(-50%);
		}

		.sub-card h3 {
			margin: 0 0 10px;
			color: #333;
			font-size: 20px;
			font-weight: 300;
		}

		.sub-card h4 {
			margin: 0 0 5px;
			color: #333;
			font-size: 12px;
			font-weight: 700;
		}

		.sub-card h5 {
			margin: 10px 0 10px;
			color: #333;
			font-size: 12px;
			font-weight: 500;
		}

		.sub-card ul {
			list-style-type: none;
			padding: 0;
		}

		.sub-card li {
			display: flex;
			align-items: center;
			font-size: 12px;
			font-weight: 600;
			margin-bottom: 8px;
			color: #333;
		}

		.sub-card li i {
			margin-right: 10px;
		}

		.youtube-placeholder {
			background-image: url('<?= base_url("assets/img/test.webp") ?>');
			background-size: cover;
			background-position: center;
			height: 250px;
			display: flex;
			align-items: center;
			justify-content: center;
			color: #fff;
			font-size: 18px;
			border-radius: 10px;
			margin-left: 30px;
		}
	</style>
</head>

<body>
	<div class="card">
		<img src="<?= base_url('assets/img/telko.png') ?>" alt="Logo" style="position: absolute; top: 15px; left: 20px; width: 90px; height: auto;">
		<h1 style="position: absolute; top: 45px; left: 170px; font-size: 22px; color:rgb(45, 40, 92); font-weight: 300;">Introducing the AAGM Portal Technical Preview</h1>
		<p style="position: absolute; top: 85px; left: 170px; font-size: 12px; color: black; font-weight: 300;">Welcome to the Center for Digital Creativity and Technology, a place where innovation meets imagination. <br>We are committed to being a leading center for technology development and digital creativity.</p>
		<img src="<?= base_url('assets/img/person.png') ?>" alt="Logo" style="position: absolute; top: 80px; left: 20px; width: 80px; height: auto;">
		<div class="top-right-text"><i class="fas fa-envelope"></i>&nbsp; Join to be considered for the Technical Preview Program.</div>

		<!-- Sub Card Below the Second Logo -->
		<div class="sub-card">
			<div class="content">
				<h3 style="color: rgb(45, 40, 92);">What's New in Portal</h3>
				<h4 style="color: rgb(49, 42, 117);">Explore Our Platform</h4>
				<h5>Applications that are available now</h5>
				<ul>
					<li style="color: rgb(49, 42, 117);">
						<a href="" style="color: rgb(49, 42, 117); text-decoration: none;">
							<i class="fas fa-file"></i> Portal Dashboard
						</a>
					</li>
					<li style="color: rgb(49, 42, 117);">
						<a href="" style="color: rgb(49, 42, 117); text-decoration: none;">
							<i class="fas fa-file"></i> Portal MCI
						</a>
					</li>
					<li style="color: rgb(49, 42, 117);">
						<a href="" style="color: rgb(49, 42, 117); text-decoration: none;">
							<i class="fas fa-file"></i> Davis
						</a>
					</li>
					<li style="color: rgb(49, 42, 117);">
						<a href="" style="color: rgb(49, 42, 117); text-decoration: none;">
							<i class="fas fa-file"></i> Debi Warriors
						</a>
					</li>
					<li style="color: rgb(49, 42, 117);">
						<a href="" style="color: rgb(49, 42, 117); text-decoration: none;">
							<i class="fas fa-file"></i> SSM Xplore
						</a>
					</li>
				</ul>
			</div>

			<div class="divider"></div> <!-- Divider inserted here -->

			<div class="content2">
				<h4 style="color: rgb(49, 42, 117); margin-top: 40px;">Latest Digital Technology</h4>
				<h5>Telkomsel prioritizes the use of artificial intelligence (AI) technology in the innovation ecosystem. This event aims to connect Telkomsel's products and innovation portfolio with digital ecosystem players in Indonesia.</h5>
			</div>

			<div class="content">
				<div class="youtube-placeholder">
					<img src="<?= base_url('assets/img/play.webp') ?>" width="80" alt="Play Button" class="play-icon">
				</div>
			</div>
		</div>

		<div class="card-container" style="display: flex; justify-content: space-between; margin-top: 170px; padding: 0 20px;">
			<!-- Left Card -->
			<div class="card-item" style="width: 48%; display: flex; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); padding: 20px;">
				<!-- Image on the left -->
				<img src="<?= base_url('assets/img/2019.png') ?>" alt="Left Image" style="width: 80px; height: auto; border-radius: 10px; margin-right: 20px;">

				<!-- Text content on the right -->
				<div>
					<div class="card-header" style="font-size: 16px; color: rgb(45, 40, 92); margin-bottom: 10px; font-weight: 600;">The Mobile Economy</div>
					<div class="card-body" style="font-size: 12px; color: rgb(0, 0, 0);">
						<p>The mobile economy refers to the growth and impact of mobile technology in industry. This includes the use of mobile applications and services that are changing the way people interact and do business.</p>
					</div>
				</div>
			</div>
			&nbsp;&nbsp;

			<!-- Right Card -->
			<div class="card-item" style="width: 48%; display: flex; background-color: #fff; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); padding: 20px;">
				<!-- Image on the left -->
				<img src="<?= base_url('assets/img/2019.png') ?>" alt="Left Image" style="width: 80px; height: auto; border-radius: 10px; margin-right: 20px;">

				<!-- Text content on the right -->
				<div>
					<div class="card-header" style="font-size: 16px; color: rgb(45, 40, 92); margin-bottom: 10px; font-weight: 600;">The Mobile Economy</div>
					<div class="card-body" style="font-size: 12px; color: rgb(0, 0, 0);">
						<p>The mobile economy refers to the growth and impact of mobile technology in industry. This includes the use of mobile applications and services that are changing the way people interact and do business.</p>
					</div>
				</div>
			</div>
		</div>


	</div>
</body>

</html>