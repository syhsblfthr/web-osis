<?php
	$mysqli_instance 	= mysqli_connect("localhost", "root", "", "telkom_osis");
	$programs 			 	= mysqli_query($mysqli_instance, "SELECT * FROM programs");
	$programs_results = mysqli_fetch_all($programs);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OSIS SMK TELKOM MEDAN 1</title>

		<!-- Favicon -->
		<link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">

		<!-- CSS -->
		<link href="style.css" rel="stylesheet">

		<!-- Bootstrap -->
		<link href="style.css" rel="stylesheet">

		<!-- Fontawesome Icons -->
		<script src="https://kit.fontawesome.com/7a9f4d8dac.js" crossorigin="anonymous"></script>

		<!-- Scripts -->
		<script defer src="navbar.js"></script>
		<script defer src="scroll.js"></script>
		<script defer src="modal.js"></script>
		<script defer src="more-button.js"></script>
	</head>
	<body>
		<!-- Navbar -->
		<nav id="navbar">
			<div class="logo">
				<img src="assets/icons/osisskatel.png">
				<span>SMK TELKOM MEDAN 1</span>
			</div>
			<ul class="list">
				<li>
					<a class="nav-link active" href="#beranda">Beranda</a>
				</li>
				<li>
					<a class="nav-link" href="#visi-misi">Visi & Misi</a>
				</li>
				<li>
					<a class="nav-link" href="#program">Program</a>
				</li>
			</ul>
		</nav>

		<!-- Main -->
		<main class="container-md p-0">
			<!-- Beranda / Home -->
			<section class="pt-10vh d-flex flex-column justify-content-center align-items-center intersection-observe" id="beranda" data-navIndex="0">
        <div class="vh-100 d-flex flex-column justify-content-center align-items-center">
          <div class="d-flex flex-column justify-content-center align-items-center mb-4">
            <p class="text-box text-center fs-3 mb-0">Website</p>
            <h1 class="display-3 fw-black text-center m-0">Organisasi Siswa Intra Sekolah<br />SMK Telkom Medan</h1>
          </div>
          <div class="d-flex gap-3 mb-4">
            <img src="assets/icons/smktelkommedan.png" alt="logo telkom" width="70px" />
            <img src="assets/icons/osisskatel.png" alt="logo osis" width="70px" />
          </div>
          <p class="text-center fw-light">Dibuat &amp; dikelola oleh Sekbid Website<br />OSIS SMK Telkom Medan</p>
        </div>
			</section>

			<!--  Visi & Misi -->
			<section class="py-10vh my-5 d-flex flex-column gap-3 intersection-observe" id="visi-misi" data-navIndex="1">
				<div class="visi-misi text-light d-flex flex-column flex-lg-row align-items-center justify-content-between gap-5 px-5 py-5 py-lg-2">
					<h2 class="m-0 fw-black">VISI</h2>
					<p class="m-0">Mewujudkan OSIS SMK Telkom Medan sebagai organisasi yang berlandas pada prinsip Demokrasi, Berdaya guna, Inventif, dan Mampu berpikir secara logis serta Realistis.</p>
				</div>
				<div class="visi-misi d-flex flex-column flex-lg-row-reverse align-items-center justify-content-around text-light px-5 py-5 py-lg-2">
					<h2 class="m-0 fw-black">MISI</h2>
					<div class="misi-content d-flex flex-column flex-md-row align-items-center gap-1">
						<p class="m-0 text-center text-wrap">Mengedepankan keputusan bersama secara logis serta realistis</p>
						<p class="m-0 text-center text-wrap">Menerima aspirasi siswa baik internal dan/atau eksternal organisasi</p>
						<p class="m-0 text-center text-wrap">Menjalin hubungan erat dengan sesama pengurus OSIS, Ekskul, dan warga SMK Telkom Medan</p>
					</div>
				</div>
			</section>

			<!-- Program -->
			<section class="mt-5 intersection-observe" id="program" data-navIndex="2">
				<div class="d-flex flex-column justify-content-center align-items-center mb-4">
					<p class="text-box fs-3 fw-bold">Program</p>
				</div>
				<div class="container">
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
						<?php
							foreach ($programs_results as $key => $value) {
						?>
						<button class="program-card modal-trigger" data-title="<?=$value[1]?>" data-description="<?=$value[2]?>">
							<img class="program-card-img" src="assets/programs/<?=$value[0]?>.png">
							<div class="title">
								<span class="text-box"><?=$value[1]?></span>
							</div>
						</button>
						<?php
							}
						?>
					</div>
				</div>
			</section>
		</main>

		<!-- Modal -->
		<div id="modal" class="modal-background">
			<div class="modal">
				<div class="modal-header">
					<h1 class="modal-title">Modal Title</h1>
				</div>
				<div class="modal-body">
					<p class="modal-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit sapien venenatis justo dignissim dignissim. Sed in metus urna. In quis mi sed lorem efficitur ornare. Maecenas in congue enim. Proin iaculis nulla sed ornare molestie. Vivamus lorem eros, fermentum sit amet ex a, eleifend efficitur augue. Suspendisse tincidunt egestas metus vitae euismod. Donec lectus ligula, facilisis quis pretium in, rutrum ac metus.</p>

					<!-- Social Media Links -->
					<div class="modal-links">
						<button type="button">
							<img class="w-1rem h-1rem" src="assets/icons/drive.svg">
							<span>Google Drive</span>
						</button>
						<button type="button">
							<img class="w-1rem h-1rem" src="assets/icons/youtube.svg">
							<span>YouTube</span>
						</button>
						<button type="button">
							<img class="w-1rem h-1rem" src="assets/icons/instagram.svg">
							<span>Instagram</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
