<!-- pengumuman -->
<section id="pengumuman">
    <div class="row col-lg-12 mt-5 justify-content-center">
        <div class="col-lg-6 text-center mt-5">
            <img src="<?= BASEURL ?>/img/hmj.png" width="120px">
            <h3 style="font-family: 'Titillium Web', sans-serif;">
                <i class="fas fa-quote-right"></i>INFO OPEN RECRUITMENT <span>HMJ TI </span>2020-2021</h3>
            <hr width="20%">
        </div>
        <!-- Jam -->
        <div class="container">
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
        </div>
        <!-- Live Count -->
        <div class="container mt-4">
            <div class="jumbotron">
                <h2 class="display-5">Live Count Pendaftaran</h2>
                <hr>
                <h5 class="mb-5">Jumlah Pendaftar Sementara : <?= $data['pendaftar']['seluruh']; ?> Orang</h5>
                <div class="grafik col-lg-8 col-12 mt-5">
                    <h4>Berdasarkan Prodi :</h4>
                    <canvas id="prodiChart"></canvas>
                </div>
                <div class="grafik col-lg-8 col-12 mt-5">
                    <h4>Berdasarkan Semester :</h4>
                    <canvas id="semesterChart"></canvas>
                </div>
            </div>
        </div>
        <!-- Pengumuman Perpanjangan  -->
        <div class="container mt-4">
            <div class="jumbotron">
                <h2 class="display-5">Info Perpanjangan</h2>
                <hr>
                <h5>Periode Perpanjangan Pendaftaran Open Recruitment HMJ TI Undiksha Tahun 2020</h5>
                <h5>2 Mei - 7 Mei 2020</h5>
            </div>
        </div>
        <!-- Pengumuman Wawancara -->
        <div class="container mt-4">
            <div class="jumbotron">
                <h2 class="display-5">Info Wawancara</h2>
                <hr>
		  <img src="<?= BASEURL ?>/img/wawancara.png" width="50%">
            </div>
        </div>
        <!-- Pengumuman Penerimaan -->
        <div class="container mt-4">
            <div class="jumbotron">
                <h2 class="display-5">Info Penerimaan Anggota HMJ TI </h2>
                <hr>
                <h5>Berikut Merupakan Hasil Open Recruitment HMJ TI Tahun 2020 Berdasarkan Rapat Pengurus Inti HMJ TI
                    Undiksha</h5>
                <!-- Bidang 1 -->
                <h4 class="mt-5"><i class="fas fa-quote-right"></i> Jumlah Yang Diterima :
                    <span><?= $data['diterima']; ?></span> dari
                    <span><?= $data['pendaftar']['seluruh']; ?></span>
                    Orang Pendaftar Keseluruhan <a href="https://drive.google.com/open?id=1NcVIVzLNkOE9UlUwNc7IBkpzKiCgytRC" style="font-size: 16px;"><span>
                            (Download Rincian Berkas Penilaian)
                        </span></a></h4>
                <h4><i class="fas fa-quote-right"></i> Anggota Bidang 1 Terpilih</h4>
                <div class="col-lg-12 table-responsive mt-4">
                    <table id="bidang1" class="display table table-striped table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th scope="col">#</th>
                                <th scope="col">Nama Pendaftar</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['Bidang1'] as $bid1) : ?>
                            <tr>
                                <td><?= $bid1['nim']; ?></td>
                                <td><?= $bid1['nama_leng']; ?></td>
                                <td><?= $bid1['prodi']; ?></td>
                                <td><?= $bid1['semester']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <hr width="50%">
                </div>
                <!-- Bidang 2 -->
                <h4 class="mt-5"><i class="fas fa-quote-right"></i> Anggota Bidang 2 Terpilih</h4>
                <div class="col-lg-12 table-responsive mt-4">
                    <table id="bidang2" class="display table table-striped table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th scope="col">#</th>
                                <th scope="col">Nama Pendaftar</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['Bidang2'] as $bid2) : ?>
                            <tr>
                                <td><?= $bid2['nim']; ?></td>
                                <td><?= $bid2['nama_leng']; ?></td>
                                <td><?= $bid2['prodi']; ?></td>
                                <td><?= $bid2['semester']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <hr width="50%">
                </div>
                <!-- Bidang 3 -->
                <h4 class="mt-5"><i class="fas fa-quote-right"></i> Anggota Bidang 3 Terpilih</h4>
                <div class="col-lg-12 table-responsive mt-4">
                    <table id="bidang3" class="display table table-striped table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th scope="col">#</th>
                                <th scope="col">Nama Pendaftar</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['Bidang3'] as $bid3) : ?>
                            <tr>
                                <td><?= $bid3['nim']; ?></td>
                                <td><?= $bid3['nama_leng']; ?></td>
                                <td><?= $bid3['prodi']; ?></td>
                                <td><?= $bid3['semester']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <hr width="50%">
                </div>
                <!-- Bidang 4 -->
                <h4 class="mt-5"><i class="fas fa-quote-right"></i> Anggota Bidang 4 Terpilih</h4>
                <div class="col-lg-12 table-responsive mt-4">
                    <table id="bidang4" class="display table table-striped table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th scope="col">#</th>
                                <th scope="col">Nama Pendaftar</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['Bidang4'] as $bid4) : ?>
                            <tr>
                                <td><?= $bid4['nim']; ?></td>
                                <td><?= $bid4['nama_leng']; ?></td>
                                <td><?= $bid4['prodi']; ?></td>
                                <td><?= $bid4['semester']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <hr width="50%">
                </div>
                <!-- Bidang 5 -->
                <h4 class="mt-5"><i class="fas fa-quote-right"></i> Anggota Bidang 5 Terpilih</h4>
                <div class="col-lg-12 table-responsive mt-4">
                    <table id="bidang5" class="display table table-striped table-bordered">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th scope="col">#</th>
                                <th scope="col">Nama Pendaftar</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['Bidang5'] as $bid5) : ?>
                            <tr>
                                <td><?= $bid5['nim']; ?></td>
                                <td><?= $bid5['nama_leng']; ?></td>
                                <td><?= $bid5['prodi']; ?></td>
                                <td><?= $bid5['semester']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <hr width="50%">
                </div>
            </div>
        </div>
    </div>
</section>
