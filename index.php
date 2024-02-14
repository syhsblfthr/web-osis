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
		<link rel="icon" type="image/x-icon" href="img/icons/favicon.ico">

		<!-- CSS -->
		<link href="style.css" rel="stylesheet">

		<!-- Bootstrap -->
		<link href="style.css" rel="stylesheet">

		<!-- Font: Poppins -->
		<link
			href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
			rel="stylesheet"
		/>

		<!-- Fontawesome Icons -->
		<script src="https://kit.fontawesome.com/7a9f4d8dac.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<!-- Navbar -->
		<header>
			<nav class="navbar navbar-expand-lg position-fixed w-100 z-3">
				<div class="container-fluid px-5">
					<a class="navbar-brand d-flex align-items-center gap-2" href="#beranda">
						<img src="assets/icons/osisskatel.png" loading="lazy" alt="Logo OSIS" width="50px" />
						<p class="m-0 fw-black text-light">SMK TELKOM MEDAN 1</p>
					</a>
					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#visi-misi">Visi & Misi</a>
							</li>
							<!--
							<li class="nav-item">
								<a class="nav-link" href="#pengurus">Pengurus</a>
							</li>
							-->
							<li class="nav-item">
								<a class="nav-link" href="#program">Program</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#berita">Berita</a>
							</li>
						</ul>
						<button class="btn kontak">Kontak</button>
					</div>
				</div>
			</nav>
		</header>

		<!-- Main -->
		<main class="container-md p-0">
			<!-- Beranda / Home -->
			<section class="pt-10vh d-flex flex-column justify-content-center align-items-center" id="beranda">
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
			<section class="my-5 d-flex flex-column gap-3" id="visi-misi">
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

			<!-- Pengurus -->
			<section class="d-none mt-5" id="pengurus">
				<div class="d-flex flex-column justify-content-center align-items-center mb-4">
					<p class="text-box fs-3 fw-bold">Pengurus</p>
				</div>
				<!-- Pengurus card container -->
				<div class="container d-flex flex-column justify-content-center align-items-center gap-3">
					<!-- Pengurus card wrapper -->
					<div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 gx-5 gy-4">
						<!-- Pengurus card -->
						<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
							<div class="pengurus-img">
								<img src="assets/pengurus/ahlam.jpg" loading="lazy" alt="Foto pengurus" />
							</div>
							<div class="pengurus-data d-flex flex-column">
								<div>
									<p class="text-box d-inline-flex m-0">Ketua Umum</p>
								</div>
								<p class="m-0 fw-bold fs-3">M. Ahlam Radithya</p>
								<p class="m-0 fw-light">Rekayasa Perangkat Lunak</p>
							</div>
						</div>
						<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
							<div class="pengurus-img">
								<img src="assets/pengurus/gres.jpg" loading="lazy" alt="Foto pengurus" />
							</div>
							<div class="pengurus-data d-flex flex-column">
								<div>
									<p class="text-box d-inline-flex m-0">Ketua 1</p>
								</div>
								<p class="m-0 fw-bold fs-3">Grace Angelika</p>
								<p class="m-0 fw-light">Rekayasa Perangkat Lunak</p>
							</div>
						</div>
						<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
							<div class="pengurus-img">
								<img src="assets/pengurus/alfi.jpg" loading="lazy" alt="Foto pengurus" />
							</div>
							<div class="pengurus-data d-flex flex-column">
								<div>
									<p class="text-box d-inline-flex m-0">Ketua 2</p>
								</div>
								<p class="m-0 fw-bold fs-3">M. Alfi Syahrin</p>
								<p class="m-0 fw-light">Multimedia</p>
							</div>
						</div>
						<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
							<div class="pengurus-img">
								<img src="assets/pengurus/cayu.jpg" loading="lazy" alt="Foto pengurus" />
							</div>
							<div class="pengurus-data d-flex flex-column">
								<div>
									<p class="text-box d-inline-flex m-0">Sekretaris Umum</p>
								</div>
								<p class="m-0 fw-bold fs-3">Risky Cahayu</p>
								<p class="m-0 fw-light">Teknik Jaringan Akses</p>
							</div>
						</div>
						<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
							<div class="pengurus-img">
								<img src="assets/pengurus/jeita.jpg" loading="lazy" alt="Foto pengurus" />
							</div>
							<div class="pengurus-data d-flex flex-column">
								<div>
									<p class="text-box d-inline-flex m-0">Sekretaris 1</p>
								</div>
								<p class="m-0 fw-bold fs-3">Jeita Rani</p>
								<p class="m-0 fw-light">Rekayasa Perangkat Lunak</p>
							</div>
						</div>
						<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
							<div class="pengurus-img">
								<img src="assets/pengurus/intan.jpg" loading="lazy" alt="Foto pengurus" />
							</div>
							<div class="pengurus-data d-flex flex-column">
								<div>
									<p class="text-box d-inline-flex m-0">Bendahara Umum</p>
								</div>
								<p class="m-0 fw-bold fs-3">Intan Dira Azzahra</p>
								<p class="m-0 fw-light">Rekayasa Perangkat Lunak</p>
							</div>
						</div>
						<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
							<div class="pengurus-img">
								<img src="assets/pengurus/olin.jpg" loading="lazy" alt="Foto pengurus" />
							</div>
							<div class="pengurus-data d-flex flex-column">
								<div>
									<p class="text-box d-inline-flex m-0">Bendahara 1</p>
								</div>
								<p class="m-0 fw-bold fs-3">Caroline Yuliana</p>
								<p class="m-0 fw-light">Rekayasa Perangkat Lunak</p>
							</div>
						</div>
						<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
							<div class="pengurus-img">
								<img src="assets/pengurus/gerald.jpg" loading="lazy" alt="Foto pengurus" />
							</div>
							<div class="pengurus-data d-flex flex-column">
								<div>
									<p class="text-box d-inline-flex m-0">Ketua MPK</p>
								</div>
								<p class="m-0 fw-bold fs-3">Christian Gerald</p>
								<p class="m-0 fw-light">Teknik Komputer Jaringan</p>
							</div>
						</div>
						<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
							<div class="pengurus-img">
								<img src="assets/pengurus/risky.jpg" loading="lazy" alt="Foto pengurus" />
							</div>
							<div class="pengurus-data d-flex flex-column">
								<div>
									<p class="text-box d-inline-flex m-0">Kabid Ekskul</p>
								</div>
								<p class="m-0 fw-bold fs-3">Risky Reynando</p>
								<p class="m-0 fw-light">Rekayasa Perangkat Lunak</p>
							</div>
						</div>
					</div>
					<!-- Hide by default -->
					<div id="lihatSelengkapnya" class="collapse">
						<div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 gx-5 gy-4">
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/sulthan.jpg" loading="lazy" alt="Foto pengurus" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Kabid Ekskul</p>
									</div>
									<p class="m-0 fw-bold fs-3">Sulthan Zaidan</p>
									<p class="m-0 fw-light">Multimedia</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/engel.jpg" loading="lazy" alt="Foto pengurus" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Kabid Humas</p>
									</div>
									<p class="m-0 fw-bold fs-3">Engelina Marbun</p>
									<p class="m-0 fw-light">Teknik Jaringan Akses</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/jojo.jpg" loading="lazy" alt="Foto pengurus" id="fotoJojo" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Kabid IT</p>
									</div>
									<p class="m-0 fw-bold fs-3">Jonathan Sharron</p>
									<p class="m-0 fw-light">Rekayasa Perangkat Lunak</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/fadhel.jpg" loading="lazy" alt="Foto pengurus" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Sekbid Olahratio</p>
									</div>
									<p class="m-0 fw-bold fs-3">Fadhel Ahmad</p>
									<p class="m-0 fw-light">Teknik Jaringan Akses</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/viona.jpg" loading="lazy" alt="Foto pengurus" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Sekbid Olahruh</p>
									</div>
									<p class="m-0 fw-bold fs-3">Viona</p>
									<p class="m-0 fw-light">Teknik Komputer Jaringan</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/dilpu.jpg" loading="lazy" alt="Foto pengurus" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Sekbid Olahraga</p>
									</div>
									<p class="m-0 fw-bold fs-3">Dilfu Abrar</p>
									<p class="m-0 fw-light">Teknik Komputer Jaringan</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/pawl.jpg" loading="lazy" alt="Foto pengurus" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Sekbid Olahrasa</p>
									</div>
									<p class="m-0 fw-bold fs-3">Paul Daniel</p>
									<p class="m-0 fw-light">Teknik Komputer Jaringan</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/desi.jpg" loading="lazy" alt="Foto pengurus" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Belanegara</p>
									</div>
									<p class="m-0 fw-bold fs-3">Deasyhana Luisya</p>
									<p class="m-0 fw-light">Rekayasa Perangkat Lunak</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/radit.jpg" loading="lazy" alt="Foto pengurus" id="fotoRadit" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Sekbid Website</p>
									</div>
									<p class="m-0 fw-bold fs-3">Raditya Atalla</p>
									<p class="m-0 fw-light">Rekayasa Perangkat Lunak</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/bela.jpg" loading="lazy" alt="Foto pengurus" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Sekbid Kreatif</p>
									</div>
									<p class="m-0 fw-bold fs-3">Chintia Bella</p>
									<p class="m-0 fw-light">Multimedia</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/syasya.jpg" loading="lazy" alt="Foto pengurus" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Koor Instagram</p>
									</div>
									<p class="m-0 fw-bold fs-3">Syasya Raihany</p>
									<p class="m-0 fw-light">Multimedia</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/nayla.jpg" loading="lazy" alt="Foto pengurus" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Koor Tiktok</p>
									</div>
									<p class="m-0 fw-bold fs-3">Naylah Thalytha</p>
									<p class="m-0 fw-light">Multimedia</p>
								</div>
							</div>
							<div class="card-pengurus col d-flex align-items-center gap-2 p-3">
								<div class="pengurus-img">
									<img src="assets/pengurus/rusyd.jpg" loading="lazy" alt="Foto pengurus" />
								</div>
								<div class="pengurus-data d-flex flex-column">
									<div>
										<p class="text-box d-inline-flex m-0">Koor Youtube</p>
									</div>
									<p class="m-0 fw-bold fs-3">Ibnu Rusyid</p>
									<p class="m-0 fw-light">Multimedia</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Show more button -->
					<a href="#lihatSelengkapnya" id="moreButton" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="lihatSelengkapnya" class="custom-btn">Lihat Selengkapnya</a>
				</div>
			</section>

			<!-- Program -->
			<section class="mt-5" id="program">
				<div class="d-flex flex-column justify-content-center align-items-center mb-4">
					<p class="text-box fs-3 fw-bold">Program</p>
				</div>
				<div class="container">
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
						<?php
							foreach ($programs_results as $key => $value) {
								echo "<div style='cursor: pointer; box-shadow: var(--box-shadow-secondary' class='hover-grow border-0 py-3 card'>";
								echo "<img class='card-img-top' src='assets\\programs\\$value[0].png' alt='ESA' width='119px'>";
								echo "<div class='card-body d-flex flex-column align-items-center justify-content-center'>";
								echo "<h5 class='text-white card-title text-box fs-3 fw-bold'>$value[1]</h5>";
								echo "<p class='card-text text-center'>$value[2]</p>";
								echo "</div></div>";
							}
						?>
					</div>
				</div>
			</section>
		</main>

		<!-- JS -->
		<script src="navbar.js"></script>
		<script src="more-button.js"></script>
	</body>
</html>
