<div class="container mt-4">
    <div class="jumbotron pt-3 pb-1">
        <div class="waktu row col-lg-6">
            <div class="kotak col-lg-3 col-3">
                <p>Waktu:</p>
            </div>
            <div class="kotak col-lg-2 col-2">
                <p id="jam"></p>
            </div>
            <div class="kotak col-lg-2 col-2">
                <p id="menit"></p>
            </div>
            <div class="kotak col-lg-2 col-2">
                <p id="detik"></p>
            </div>
            <div class="kotak col-lg-3 col-3">
                <p>WITA</p>
            </div>
        </div>
    </div>

    <div class="jumbotron mb-5">
        <h2 class="display-5"><i class="fas fa-quote-right"></i> Live Count Pendaftaran</h2>
        <hr>
        <h5 class="mb-5">Jumlah Pendaftar Sementara : <?= $data['pendaftar']['seluruh']; ?> Orang</h5>
        <div class="grafik col-lg-8 col-12 mb-5">
            <h4>Berdasarkan Bidang :</h4>
            <h5>Keseluruhan:</h5>
            <canvas id="selBidangChart"></canvas>
        </div>
        <div class="grafik col-lg-8 col-12 mb-5">
            <h5>Per Pilihan Utama:</h5>
            <canvas id="utaBidangChart"></canvas>
        </div>
        <div class="grafik col-lg-8 col-12 mb-5">
            <h5>Per Pilihan Opsional:</h5>
            <canvas id="opsBidangChart"></canvas>
        </div>
        <div class="grafik col-lg-8 col-12 mt-5">
            <h4>Berdasarkan Prodi :</h4>
            <canvas id="prodiChart"></canvas>
        </div>
        <div class="grafik col-lg-8 col-12 mt-5">
            <h4>Berdasarkan Semester :</h4>
            <canvas id="semesterChart"></canvas>
        </div>
    </div>
    <div class="jumbotron mt-5">
        <h2 class="display-5"><i class="fas fa-quote-right"></i> Live Count Wawancara</h2>
        <hr>
        <h5 class="mb-5">Jumlah Yang Sudah Wawancara : <?= $data['wawancara']['seluruh']; ?> Orang</h5>
        <div class="grafik col-lg-8 col-12 mb-5">
            <h4>Berdasarkan Bidang :</h4>
            <h5>Keseluruhan:</h5>
            <canvas id="selBidangWaChart"></canvas>
        </div>
        <div class="grafik col-lg-8 col-12 mt-5">
            <h4>Berdasarkan Prodi :</h4>
            <canvas id="prodiWaChart"></canvas>
        </div>
        <div class="grafik col-lg-8 col-12 mt-5">
            <h4>Berdasarkan Semester :</h4>
            <canvas id="semesterWaChart"></canvas>
        </div>
    </div>
</div>