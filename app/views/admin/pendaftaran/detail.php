<div class="container mt-4">
    <div class="jumbotron">
        <h2 class="display-5">Detail Pendaftar <span><?= $data['pendaftar']['nim'] ?></span></h2>
        <hr class="my-4">
        <?php
        Flasher::flash()
        ?>
        <div class="row col-8">
        <?php
            //<button type="button" data-toggle="modal" data-target="#editModal" class="btn btn-success mr-2 mt-2" disabled>Edit Data</button>
            //<button type="button" data-toggle="modal" data-target="#insertNilaiModal"
                //class="btn btn-primary mr-2 mt-2" disabled>Upload
                //Nilai</button></a>
                ?>
            <button type="button" data-toggle="modal" data-target="#lihatNilaiModal"
                class="btn btn-secondary mr-2 mt-2">Lihat
                Nilai</button>
            <button type="button" data-toggle="modal" data-target="#keputusan"
                class="btn btn-warning mr-2 mt-2" >Keputusan</button>
        </div>
        <table width="50%" cellpadding="3px" style="color:rgba(0,0,0,0.7);" class="mt-3 mb-5 table-responsive">
            <tbody>
                <tr>
                    <td><img src="<?= BASEURL; ?>/file/foto/<?= $data['pendaftar']['up_foto'] ?>"
                            alt="Foto <?= $data['pendaftar']['nim'] ?>" style="width: 200px; height: 300px;"></td>
                </tr>
                <tr style="color:black;">
                    <td colspan="3">
                        <h4> <i class="fas fa-quote-right"></i> Informasi Pribadi<br>
                            <hr width="20%" Align="left">
                        </h4>
                    </td>
                </tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $data['pendaftar']['nama_leng'] ?></td>
                </tr>
                <tr>
                    <td>Nama Panggilan</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['nama_pang'] ?></td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['semester'] ?></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['prodi'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['jk'] ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['agama'] ?></td>
                </tr>
                <tr>
                    <td>Alamat Asal</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['alamat_as'] ?></td>
                </tr>
                <tr>
                    <td>Alamat Sekarang</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['alamat_sk'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['email'] ?></td>
                </tr>
                <tr>
                    <td>No Wa</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['wa'] ?></td>
                </tr>
                <tr>
                    <td>IPK</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['ipk'] ?></td>
                </tr>
                <tr>
                    <td>Data KRS,KHS, dan Bukti Pendukung</td>
                    <td>:</td>
                    <td><embed src="<?= BASEURL; ?>/file/doc/<?= $data['pendaftar']['up_doc'] ?>" id="pdf"></embed></td>
                </tr>
                <tr style="color:black;">
                    <td colspan="3">
                        <h4> <i class="fas fa-quote-right"></i> Riwayat Pendidikan<br>
                            <hr width="20%" Align="left">
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td>Sekolah Dasar</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['nama_sd'] ?></td>
                </tr>
                <tr>
                    <td>Tahun Tamat</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['thn_sd'] ?></td>
                </tr>
                <tr>
                    <td>Sekolah Menengah Pertama</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['nama_smp'] ?></td>
                </tr>
                <tr>
                    <td>Tahun Tamat</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['thn_smp'] ?></td>
                </tr>
                <tr>
                    <td>SMA/SMU/SMK</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['nama_sma'] ?></td>
                </tr>
                <tr>
                    <td>Tahun Tamat</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['thn_sma'] ?></td>
                </tr>
                <tr style="color:black;">
                    <td colspan="3">
                        <h4> <i class="fas fa-quote-right"></i> Riwayat Hidup<br>
                            <hr width="20%" Align="left">
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['hobi'] ?></td>
                </tr>
                <tr>
                    <td>Motto Hidup</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['motto'] ?></td>
                </tr>
                <tr>
                    <td>Riwayat Penyakit</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['penyakit'] ?></td>
                </tr>
                <tr style="color:black;">
                    <td colspan="3">
                        <h4> <i class="fas fa-quote-right"></i> Pengalaman Organisasi<br>
                            <hr width="20%" Align="left">
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td>Pengalaman Organisasi/Kepanitiaan</td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['peng_org'] ?></td>
                </tr>
                <tr>
                    <td>Organisasi Yang Sedang Didaftar/ <br> Diikuti Di Lingkungan Undiksha
                    </td>
                    <td>:</td>
                    <td><?= $data['pendaftar']['lainnya'] ?></td>
                </tr>
                <tr style="color:black;">
                    <td colspan="3">
                        <h4> <i class="fas fa-quote-right"></i> Bidang Diminati<br>
                            <hr width="20%" Align="left">
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td>Pilihan Pertama</td>
                    <td>:</td>
                    <?php
                    if ($data['pendaftar']['pil_wajib'] == "Bidang 1") {
                        echo "<td>Bidang 1 - Pendidikan dan Penalaran</td>";
                    } else if ($data['pendaftar']['pil_wajib'] == "Bidang 2") {
                        echo "<td>Bidang 2 - Minat dan Bakat</td>";
                    } else if ($data['pendaftar']['pil_wajib'] == "Bidang 3") {
                        echo "<td>Bidang 3 - Kesejahteraan Mahasiswa</td>";
                    } else if ($data['pendaftar']['pil_wajib'] == "Bidang 4") {
                        echo "<td>Bidang 4 - Pengabdian Kepada Masyarakat</td>";
                    } else {
                        echo "<td>Bidang 5 - Teknologi</td>";
                    }
                    ?>
                </tr>
                <tr>
                    <td>Pilihan Kedua</td>
                    <td>:</td>
                    <?php
                    if ($data['pendaftar']['pil_ops'] == "Bidang 1") {
                        echo "<td>Bidang 1 - Pendidikan dan Penalaran</td>";
                    } else if ($data['pendaftar']['pil_ops'] == "Bidang 2") {
                        echo "<td>Bidang 2 - Minat dan Bakat</td>";
                    } else if ($data['pendaftar']['pil_ops'] == "Bidang 3") {
                        echo "<td>Bidang 3 - Kesejahteraan Mahasiswa</td>";
                    } else if ($data['pendaftar']['pil_ops'] == "Bidang 4") {
                        echo "<td>Bidang 4 - Pengabdian Kepada Masyarakat</td>";
                    } else if ($data['pendaftar']['pil_ops'] == "Bidang 5") {
                        echo "<td>Bidang 5 - Teknologi</td>";
                    } else {
                        echo "<td></td>";
                    }
                    ?>


                </tr>
            </tbody>
        </table>
        <a href="<?= BASEURL ?>/admin/pendaftar"><button type="button" class="btn btn-danger">Kembali</button></a>
    </div>
</div>
<!-- Modal Edit-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Data <span><?= $data['pendaftar']['nim']; ?></span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Start -->
                <div class="row col-lg-12 mt-5 mb-5">
                    <div class="col-lg-12">
                        <div class="flash mb-3">
                            <?php Flasher::flash() ?>
                        </div>
                        <form action="<?= BASEURL ?>/admin/updateData" method="POST" class="needs-validation"
                            enctype="multipart/form-data">
                            <!-- Identitas Diri -->
                            <h4 style="font-family: 'Titillium Web', sans-serif; ">
                                <i class="fas fa-quote-right"></i> IDENTITAS <span>DIRI</span></h4>
                            <p style="color:red; font-style:italic">*) Wajib</p>
                            <div class="form-group">

                                <label for="foto">PAS FOTO 4x6 <span style="color:red;">*</span></label>
                                <p style="font-size: 11px; color:red; font-style:italic">Maks Besar File 5MB dan
                                    Berformat .jpg, .jpeg, atau .png</p>
                                <input type="hidden" class="form-control-file" id="foto"
                                    value="<?= $data['pendaftar']['up_foto']; ?>" name="up_foto_lama">
                                <input type="file" class="form-control-file" id="foto" name="up_foto">
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM <span style="color:red;">*</span></label>
                                <input type="number" value="<?= $data['pendaftar']['nim']; ?>" class="form-control"
                                    min="1810000000" max="1919999999" id="nim" name="nim" placeholder="Input NIM Here"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama-lengkap">Nama Lengkap <span style="color:red;">*</span></label>
                                <input type="text" value="<?= $data['pendaftar']['nama_leng']; ?>" class="form-control"
                                    id="nama-lengkap" name="nama_leng" placeholder="Input Your Fullname Here" required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama-panggilan">Nama Panggilan <span style="color:red;">*</span></label>
                                <input type="text" value="<?= $data['pendaftar']['nama_pang']; ?>" class="form-control"
                                    id="nama-panggilan" name="nama_pang" placeholder="Input Your Name" required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="form-group">
                                <?php
                                if ($data['pendaftar']['semester'] == '2') {
                                    $ketgen = 'selected';
                                } else {
                                    $ketgan = 'selected';
                                }
                                ?>
                                <label for="semester">Semester <span style="color:red;">*</span></label>
                                <select class="form-control" id="semester" name="semester" disabled>
                                    <option value="2" selected="<?= $ketgen ?>">2</option>
                                    <option value="4" selected="<?= $ketgan ?>">4</option>
                                </select>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="form-group">

                                <?php
                                $ketpti = "";
                                $ketmi = "";
                                $ketsi = "";
                                $ketilkom = "";
                                if ($data['pendaftar']['prodi'] == "Pendidikan Teknik Informatika") {
                                    $ketpti = 'selected';
                                } else if ($data['pendaftar']['prodi'] == "Manajemen Informatika") {
                                    $ketmi = 'selected';
                                } else if ($data['pendaftar']['prodi'] == "Sistem Informasi") {
                                    $ketsi = 'selected';
                                } else {
                                    $ketilkom = 'selected';
                                }
                                ?>
                                <label for="prodi">Program Studi <span style="color:red;">*</span></label>
                                <select class="form-control" id="prodi" name="prodi" disabled>
                                    <option value="Pendidikan Teknik Informatika" <?= $ketpti ?>>Pendidikan
                                        Teknik Informatika</option>
                                    <option value="Manajemen Informatika" <?= $ketmi ?>>Manajemen Informatika
                                    </option>
                                    <option value="Sistem Informasi" <?= $ketsi ?>>Sistem Informasi</option>
                                    <option value="Ilmu Komputer" <?= $ketilkom ?>>Ilmu Komputer</option>

                                </select>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="form-group">
                                <?php
                                $ketlaki = "";
                                $ketperempuan = "";
                                if ($data['pendaftar']['jk'] == "Laki-Laki") {
                                    $ketlaki = 'selected';
                                } else {
                                    $ketperempuan = 'selected';
                                }

                                ?>
                                <label for="jk">Jenis Kelamin <span style="color:red;">*</span></label>
                                <select class="form-control" id="jk" name="jk" disabled>
                                    <option value="Laki-Laki" <?= $ketlaki ?>>Laki-Laki</option>
                                    <option value="Perempuan" <?= $ketperempuan ?>>Perempuan</option>
                                </select>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="form-group">
                                <?php
                                $ketislam = "";
                                $ketbudha = "";
                                $kethindu = "";
                                $ketkhc = "";
                                $ketkk = "";
                                $ketkp = "";
                                $ketlain = "";
                                if ($data['pendaftar']['agama'] == "Islam") {
                                    $ketislam = 'selected';
                                } else if ($data['pendaftar']['agama'] == "Hindu") {
                                    $kethindu = 'selected';
                                } else if ($data['pendaftar']['agama'] == "Budha") {
                                    $ketbudha = 'selected';
                                } else if ($data['pendaftar']['agama'] == "Kristen Katolik") {
                                    $ketkk = 'selected';
                                } else if ($data['pendaftar']['agama'] == "Kristen Protestan") {
                                    $ketkp = 'selected';
                                } else if ($data['pendaftar']['agama'] == "Kong Hu Cu") {
                                    $ketkhc = 'selected';
                                } else {
                                    $ketlain = 'selected';
                                }
                                ?>
                                <label for="agama">Agama <span style="color:red;">*</span></label>
                                <select class="form-control" id="agama" name="agama" disabled>
                                    <option value="Islam" <?= $ketislam ?>>Islam</option>
                                    <option value="Hindu" <?= $kethindu ?>>Hindu</option>
                                    <option value="Budha" <?= $ketbudha ?>>Budha</option>
                                    <option value="Kristen Katolik" <?= $ketkk ?>>Kristen Katolik</option>
                                    <option value="Kristen Protestan" <?= $ketkp ?>>Kristen Protestan</option>
                                    <option value="Kong Hu Cu" <?= $ketkhc ?>>Kong Hu Cu</option>
                                    <option value="Kepercayaan Lain" <?= $ketlain ?>>Lainnya</option>
                                </select>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat-asal">Alamat Lengkap Asal <span style="color:red;">*</span></label>
                                <input type="text" value="<?= $data['pendaftar']['alamat_as']; ?>" class="form-control"
                                    id="alamat-asal" name="alamat_as" placeholder="Input Your Address Here" required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat-sekarang">Alamat Lengkap Sekarang <span
                                        style="color:red;">*</span></label>
                                <input type="text" value="<?= $data['pendaftar']['alamat_sk']; ?>" class="form-control"
                                    id="alamat-sekarang" placeholder="Input Your Address Here" name="alamat_sk"
                                    required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span style="color:red;">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                    </div>
                                    <input type="email" value="<?= $data['pendaftar']['email']; ?>" class="form-control"
                                        id="email" name="email" placeholder="Input Your Email Here" required>
                                    <div class="invalid-feedback">
                                        Form is Required
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="wa">Nomor WA/HP <span style="color:red;">*</span></label>
                                <input type="number" value="<?= $data['pendaftar']['wa']; ?>" class="form-control"
                                    min="08100000000" max="0899999999999" id="wa" name="wa"
                                    placeholder="Input Your Information Here" required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ipk">IPK <span style="color:red;">*</span></label>
                                <input type="number" value="<?= $data['pendaftar']['ipk']; ?>" min="3" max="4"
                                    step="0.001" class="form-control" id="ipk" name="ipk"
                                    placeholder="Input Your Information Here" disabled>

                            </div>
                            <!-- Riwayat Pendidikan -->
                            <h4 style="font-family: 'Titillium Web', sans-serif;  ">
                                <i class="fas fa-quote-right"></i> RIWAYAT <span>PENDIDIKAN</span></h4>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <label for="sd">Sekolah Dasar <span style="color:red;">*</span></label>
                                        <input type="text" value="<?= $data['pendaftar']['nama_sd']; ?>"
                                            class="form-control" id="sd" name="nama_sd"
                                            placeholder="Input Your School Name" required>
                                        <div class="invalid-feedback">
                                            Form is Required
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="sd-lulus">Tahun Lulus <span style="color:red;">*</span></label>
                                        <input type="number" value="<?= $data['pendaftar']['thn_sd']; ?>" min="2010"
                                            max="2019" class="form-control" id="sd-lulus" name="thn_sd"
                                            placeholder="Input Graduation year" required>
                                        <div class="invalid-feedback">
                                            Form is Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <label for="smp">Sekolah Menengah Pertama <span
                                                style="color:red;">*</span></label>
                                        <input type="text" class="form-control"
                                            value="<?= $data['pendaftar']['nama_smp']; ?>" id="smp" name="nama_smp"
                                            placeholder="Input Your School Name" required>
                                        <div class="invalid-feedback">
                                            Form is Required
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="smp-lulus">Tahun Lulus <span style="color:red;">*</span></label>
                                        <input type="number" value="<?= $data['pendaftar']['thn_smp']; ?>"
                                            class="form-control" min="2010" max="2019" id="smp-lulus" name="thn_smp"
                                            placeholder="Input Graduation year" required>
                                        <div class="invalid-feedback">
                                            Form is Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <label for="sma">SMA/SMK/SMU <span style="color:red;">*</span></label>
                                        <input type="text" value="<?= $data['pendaftar']['nama_sma']; ?>"
                                            class="form-control" id="sma" name="nama_sma"
                                            placeholder="Input Your School Name" required>
                                        <div class="invalid-feedback">
                                            Form is Required
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="sma-lulus">Tahun Lulus <span style="color:red;">*</span></label>
                                        <input type="number" value="<?= $data['pendaftar']['thn_sma']; ?>" min="2010"
                                            max="2019" class="form-control" id="sma-lulus" name="thn_sma"
                                            placeholder="Input Graduation year" required>
                                        <div class="invalid-feedback">
                                            Form is Required
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Riwayat Hidup -->
                            <h4 style="font-family: 'Titillium Web', sans-serif; ">
                                <i class="fas fa-quote-right"></i> RIWAYAT <span>HIDUP</span></h4>
                            <div class="form-group">
                                <label for="hobi">Hobi (Boleh Memasukkan Lebih Dari 1) <span
                                        style="color:red;">*</span></label>
                                <input type="text" value="<?= $data['pendaftar']['hobi']; ?>" class="form-control"
                                    id="hobi" name="hobi" placeholder="Input Your Hobby" required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="motto">Motto Hidup <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" value="<?= $data['pendaftar']['motto']; ?>"
                                    id="motto" name="motto" placeholder="Input Your Information" required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="riwayat-penyakit">Riwayat Penyakit (Boleh Memasukkan Lebih Dari 1)</label>
                                <input type="text" value="<?= $data['pendaftar']['penyakit']; ?>" class="form-control"
                                    id="riwayat-penyakit" name="penyakit" placeholder="Input Your Information">
                            </div>
                            <!-- Pengalaman Organisasi -->
                            <h4 style="font-family: 'Titillium Web', sans-serif; ">
                                <i class="fas fa-quote-right"></i> PENGALAMAN <span>ORGANISASI</span></h4>
                            <div class="form-group">
                                <label for="peng-organisasi">Pengalaman Organisasi (Boleh Memasukkan Lebih Dari
                                    1)</label>
                                <input type="text" value="<?= $data['pendaftar']['peng_org']; ?>" class="form-control"
                                    id="peng-organisasi" name="peng_org" placeholder="Input Your Information">
                            </div>
                            <div class="form-group">
                                <label for="riwayat-lain">Organisasi Yang Sedang Didaftar/
                                    Diikuti Di Lingkungan Undiksha (Boleh Memasukkan Lebih Dari
                                    1) <span style="color:red;">*</span></label>
                                <input type="text" value="<?= $data['pendaftar']['lainnya']; ?>" class="form-control"
                                    id="riwayat-lain" name="lainnya" placeholder="Input Your Information" readonly>
                            </div>

                            <!-- Bidang Yang Diminati -->
                            <h4 style="font-family: 'Titillium Web', sans-serif; ">
                                <i class="fas fa-quote-right"></i> BIDANG YANG <span>DIMINATI</span></h4>
                            <div class="form-group">
                                <?php
                                $ketpp = "";
                                $ketmb = "";
                                $ketkm = "";
                                $ketpkm = "";
                                $kett = "";
                                if ($data['pendaftar']['pil_wajib'] == "Bidang 1") {
                                    $ketpp = 'selected';
                                } else if ($data['pendaftar']['pil_wajib'] == "Bidang 2") {
                                    $ketmb = 'selected';
                                } else if ($data['pendaftar']['pil_wajib'] == "Bidang 3") {
                                    $ketkm = 'selected';
                                } else if ($data['pendaftar']['pil_wajib'] == "Bidang 4") {
                                    $ketpkm = 'selected';
                                } else {
                                    $kett = 'selected';
                                }
                                ?>
                                <label for="pil_wajib">Pilihan Wajib <span style="color:red;">*</span></label>
                                <select type="text" class="form-control" id="pil_wajib" name="pil_wajib" disabled>
                                    <option value="Bidang 1" <?= $ketpp ?>>Bidang 1 - Pendidikan dan Penalaran </option>
                                    <option value="Bidang 2" <?= $ketmb ?>>Bidang 2 - Minat dan Bakat</option>
                                    <option value="Bidang 3" <?= $ketkm ?>>Bidang 3 - Kesejahteraan Mahasiswa</option>
                                    <option value="Bidang 4" <?= $ketpkm ?>>Bidang 4 - Pengabdian Kepada Masyarakat
                                    </option>
                                    <option value="Bidang 5" <?= $kett ?>>Bidang 5 - Teknologi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <?php
                                $ketopp = "";
                                $ketomb = "";
                                $ketokm = "";
                                $ketopkm = "";
                                $ketot = "";
                                if ($data['pendaftar']['pil_ops'] == "Bidang 1") {
                                    $ketopp = 'selected';
                                } else if ($data['pendaftar']['pil_ops'] == "Bidang 2") {
                                    $ketomb = 'selected';
                                } else if ($data['pendaftar']['pil_ops'] == "Bidang 3") {
                                    $ketokm = 'selected';
                                } else if ($data['pendaftar']['pil_ops'] == "Bidang 4") {
                                    $ketopkm = 'selected';
                                } else {
                                    $ketot = 'selected';
                                }
                                ?>
                                <label for="pil_ops">Pilihan Opsional</label>
                                <select type="text" class="form-control" id="pil_ops" name="pil_ops" disabled>
                                    <option value="Bidang 1" <?= $ketopp ?>>Bidang 1 - Pendidikan dan Penalaran
                                    </option>
                                    <option value="Bidang 2" <?= $ketomb ?>>Bidang 2 - Minat dan Bakat</option>
                                    <option value="Bidang 3" <?= $ketokm ?>>Bidang 3 - Kesejahteraan Mahasiswa</option>
                                    <option value="Bidang 4" <?= $ketopkm ?>>Bidang 4 - Pengabdian Kepada Masyarakat
                                    </option>
                                    <option value="Bidang 5" <?= $ketot ?>>Bidang 5 - Teknologi</option>
                                </select>
                            </div>
                            <!-- Berkas -->
                            <h4 style="font-family: 'Titillium Web', sans-serif; ">
                                <i class="fas fa-quote-right"></i> UPLOAD <span>BERKAS</span></h4>
                            <div class="form-group">
                                <label for="krs">Upload KRS,KHS dan Bukti Pendukung Baru <span
                                        style="color:red;">*</span></label>
                                <p style="font-size: 11px; color:red; font-style:italic">Maks Besar File 10MB dan
                                    Berformat .pdf</p>
                                <input value="<?= $data['pendaftar']['up_doc']; ?>" type="hidden"
                                    class="form-control-file" name="up_doc_lama" id="krs">
                                <input type="file" class="form-control-file" name="up_doc" id="krs">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" type="submit" name="Submit">Edit Data</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Form End -->
            </div>
        </div>
    </div>
</div>

<!-- Modal Uploud Nilai-->
<div class="modal fade" id="insertNilaiModal" tabindex="-1" role="dialog" aria-labelledby="insertNilaieModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertNilaiModalLabel">Insert Nilai Wawancara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Start Nilai -->
                <form action="<?= BASEURL ?>/admin/insertNilai" method="POST" class="needs-validation">
                    <div class="form-group">
                        <label for="nim">NIM Pendaftar</label>
                        <input type="text" value="<?= $data['pendaftar']['nim']; ?>" class="form-control" id="nim"
                            placeholder="Rentang Nilai 1-10" name="nim" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tema-1">Nilai Personalia <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" id="tema-1" min="1" max="10"
                            placeholder="Rentang Nilai 1-10" step="0.1" name="tema_1" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tema-2">Nilai Manajemen <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" id="tema-2" min="1" max="10"
                            placeholder="Rentang Nilai 1-10" step="0.1" name="tema_2" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tema-3">Nilai Problem Solving <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" id="tema-3" min="1" max="10"
                            placeholder="Rentang Nilai 1-10" step="0.1" name="tema_3" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tema-4">Nilai Kelengkapan Berkas <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" id="tema-4" min="1" max="10"
                            placeholder="Rentang Nilai 1-10" step="0.1" name="tema_4" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" id="Btn"
                            name="Submit">Insert
                            Data</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
                <!-- End Nilai -->
            </div>
        </div>
    </div>
</div>

<!-- Lihat Nilai Modal -->
<div class="modal fade" id="lihatNilaiModal" tabindex="-1" role="dialog" aria-labelledby="lihatNilaiModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lihatNilaiModalLabel">Lihat Nilai Wawancara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row col-lg-12 table-responsive mt-4">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">ID Penilai</th>
                                <th scope="col">ID Pendaftar</th>
                                <th scope="col">Personalia</th>
                                <th scope="col">Manajemen</th>
                                <th scope="col">Problem Solving</th>
                                <th scope="col">Kelengkapan Berkas</th>
                                <th scope="col">Total Nilai</th>
                                <th scope="col">Rekomendasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['nilai'] as $nilai) : ?>
                            <tr>
                                <td><?= $nilai['user_id']; ?></td>
                                <td><?= $nilai['nim']; ?></td>
                                <td><?= $nilai['tema_1']; ?></td>
                                <td><?= $nilai['tema_2']; ?></td>
                                <td><?= $nilai['tema_3']; ?></td>
                                <td><?= $nilai['tema_4']; ?></td>
                                <td><?= $nilai['total']; ?></td>
                                <td><?= $nilai['ket_lulus']; ?></td>
                            </tr> <?php endforeach; ?> </tbody>
                    </table>
                </div>
                </a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Keputusan -->
<div class="modal fade" id="keputusan" tabindex="-1" role="dialog" aria-labelledby="keputusan" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="keputusan">Tambah Data Hasil Akhir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL ?>/admin/insertKeputusan" method="POST" class="needs-validation">
                    <div class="form-group">
                        <label for="nim">NIM Pendaftar</label>
                        <input type="text" value="<?= $data['pendaftar']['nim']; ?>" class="form-control" id="nim"
                            placeholder="Rentang Nilai 1-10" name="nim" readonly>
                    </div>
                    <div class="form-group">
                        <label for="pil">Diterima di Bidang <span style="color:red;">*</span></label>
                        <select type="text" class="form-control" id="pil" name="pil" required>
                            <option value="">Pilih Dibidang Mana Akan Diterima ...</option>
                            <option value="<?= $data['pendaftar']['pil_wajib'] ?>">
                                <?= $data['pendaftar']['pil_wajib'] ?>
                            </option>
                            <option value="<?= $data['pendaftar']['pil_ops'] ?>"><?= $data['pendaftar']['pil_ops'] ?>
                            </option>
                        </select>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" id="Btn" name="Submit">Insert
                            Keputusan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
