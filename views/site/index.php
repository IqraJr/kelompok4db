<?php
/** @var yii\web\View $this */
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <!-- Jumbotron Full Width -->
    <div class="jumbotron text-center text-white py-5" style="background-color: #007bff; width: 100vw; margin-left: calc(-50vw + 50%);">
        <h1 class="display-4 fw-bold">WELCOME</h1>
        <p class="lead">Sistem Pengakreditasian Prodi</p>
        <p class="lead">Kelompok 4</p>
    
    </div>

    <!-- Body Content -->
    <div class="body-content text-center py-5">
        <div class="row justify-content-center gap-4">
            <!-- Card Penilaian -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3 card shadow-lg p-4 rounded border-0 bg-light">
                <div class="card-body">
                    <h2 class="card-title mb-3"><i class="fas fa-edit text-primary"></i> Penilaian</h2>
                    <p class="card-text">Klik tombol di bawah untuk mengisi data penilaian.</p>
                    <a class="btn btn-primary btn-lg text-white fw-bold rounded-pill shadow" 
                       href="http://localhost:8081/index.php?r=penilaian-prodi%2Findex">Lanjut</a>
                </div>
            </div>

            <!-- Card Akreditasi -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3 card shadow-lg p-4 rounded border-0 bg-light">
                <div class="card-body">
                    <h2 class="card-title mb-3"><i class="fas fa-award text-warning"></i> Akreditasi</h2>
                    <p class="card-text">Klik tombol di bawah untuk mengisi data akreditasi.</p>
                    <a class="btn btn-warning btn-lg text-white fw-bold rounded-pill shadow" 
                       href="http://localhost:8081/index.php?r=akreditasi-prodi%2Findex">Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan FontAwesome untuk ikon -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">