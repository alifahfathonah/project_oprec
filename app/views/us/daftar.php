<!-- Pendaftaran -->
<section id="content-1">
    <div class="row col-lg-12 mt-5 justify-content-center">
        <div class="col-lg-6 text-center">
            <img src="<?= BASEURL ?>/img/hmj.png" width="120px">
            <h3 style="font-family: 'Titillium Web', sans-serif; ">
                <i class="fas fa-quote-right"></i> FORM <span>PENDAFTARAN</span></h3>
            <hr width="20%">
        </div>
        <div class="row col-lg-12 mt-5 mb-5">
            <div class="col-lg-6">
                <div class="flash mb-3">
                    <?php Flasher::flash() ?>
                </div>
                <form action="<?= BASEURL ?>/user/proses" method="POST" class="needs-validation"
                    enctype="multipart/form-data">
                    <!-- Identitas Diri -->
                    <h4 style="font-family: 'Titillium Web', sans-serif; ">
                        <i class="fas fa-quote-right"></i> IDENTITAS <span>DIRI</span></h4>
                    <p style="color:red; font-style:italic">*) Wajib</p>
                    <div class="form-group">
                        <label for="foto">PAS FOTO 4x6 <span style="color:red;">*</span></label>
                        <p style="font-size: 11px; color:red; font-style:italic">Maks Besar File 5MB dan
                            Berformat .jpg, .jpeg, atau .png</p>
                        <input type="file" class="form-control-file" id="foto" name="up_foto" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" min="1800000000" max="1919999999" id="nim" name="nim"
                            placeholder="Input NIM Here" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama-lengkap">Nama Lengkap <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="nama-lengkap" name="nama_leng"
                            placeholder="Input Your Fullname Here" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama-panggilan">Nama Panggilan <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="nama-panggilan" name="nama_pang"
                            placeholder="Input Your Name" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester <span style="color:red;">*</span></label>
                        <select class="form-control" id="semester" name="semester" required>
                            <option value="">Choose Your Semester</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                        </select>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Program Studi <span style="color:red;">*</span></label>
                        <select class="form-control" id="prodi" name="prodi" required>
                            <option value="">Choose Your Study Program</option>
                            <option value="Pendidikan Teknik Informatika">Pendidikan Teknik Informatika</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Ilmu Komputer">Ilmu Komputer</option>
                        </select>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin <span style="color:red;">*</span></label>
                        <select class="form-control" id="jk" name="jk" required>
                            <option value="">Choose Your Gender</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama <span style="color:red;">*</span></label>
                        <select class="form-control" id="agama" name="agama" required>
                            <option value="">Choose Your Religion</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kong Hu Cu">Kong Hu Cu</option>
                            <option value="Kepercayaan Lain">Lainnya</option>
                        </select>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat-asal">Alamat Lengkap Asal <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="alamat-asal" name="alamat_as"
                            placeholder="Input Your Address Here" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat-sekarang">Alamat Lengkap Sekarang <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="alamat-sekarang"
                            placeholder="Input Your Address Here" name="alamat_sk" required>
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
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Input Your Email Here" required>
                            <div class="invalid-feedback">
                                Form is Required
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="wa">Nomor WA/HP <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" min="08100000000" max="0899999999999" id="wa"
                            name="wa" placeholder="Input Your Information Here" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ipk">IPK <span style="color:red;">*</span></label>
                        <input type="number" min="3" max="4" step="0.001" class="form-control" id="ipk" name="ipk"
                            placeholder="Input Your Information Here" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <!-- Riwayat Pendidikan -->
                    <h4 style="font-family: 'Titillium Web', sans-serif;  ">
                        <i class="fas fa-quote-right"></i> RIWAYAT <span>PENDIDIKAN</span></h4>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="sd">Sekolah Dasar <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="sd" name="nama_sd"
                                    placeholder="Input Your School Name" required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="sd-lulus">Tahun Lulus <span style="color:red;">*</span></label>
                                <input type="number" min="2010" max="2019" class="form-control" id="sd-lulus"
                                    name="thn_sd" placeholder="Input Graduation year" required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-8">
                                <label for="smp">Sekolah Menengah Pertama <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" id="smp" name="nama_smp"
                                    placeholder="Input Your School Name" required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="smp-lulus">Tahun Lulus <span style="color:red;">*</span></label>
                                <input type="number" class="form-control" min="2010" max="2019" id="smp-lulus"
                                    name="thn_smp" placeholder="Input Graduation year" required>
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
                                <input type="text" class="form-control" id="sma" name="nama_sma"
                                    placeholder="Input Your School Name" required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label for="sma-lulus">Tahun Lulus <span style="color:red;">*</span></label>
                                <input type="number" min="2010" max="2019" class="form-control" id="sma-lulus"
                                    name="thn_sma" placeholder="Input Graduation year" required>
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
                        <label for="hobi">Hobi (Boleh Memasukkan Lebih Dari 1) <span style="color:red;">*</span></label>
                        <textarea maxlength="100" class="form-control" rows="3" id="hobi" name="hobi"
                            placeholder="Input Your Hobby" required></textarea>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="motto">Motto Hidup <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="motto" name="motto"
                            placeholder="Input Your Information" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="riwayat-penyakit">Riwayat Penyakit (Boleh Memasukkan Lebih Dari 1)</label>
                        <textarea maxlength="100" class="form-control" id="riwayat-penyakit" rows="3" name="penyakit"
                            placeholder="Input Your Information"></textarea>
                    </div>
                    <!-- Pengalaman Organisasi -->
                    <h4 style="font-family: 'Titillium Web', sans-serif; ">
                        <i class="fas fa-quote-right"></i> PENGALAMAN <span>ORGANISASI</span></h4>
                    <div class="form-group">
                        <label for="peng-organisasi">Pengalaman Organisasi/Kepanitiaan (Boleh Memasukkan Lebih Dari
                            1)</label>
                        <textarea class="form-control" id="peng-organisasi" name="peng_org" rows="3"
                            placeholder="Input Your Information"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="riwayat-lain">Organisasi Yang Sedang Didaftar/Diikuti Di Lingkungan Undiksha (Boleh
                            Memasukkan
                            Lebih Dari 1)<span style="color:red;">*</span></label>
                        <textarea class="form-control" id="riwayat-lain" rows="3" name="lainnya"
                            placeholder="Input Your Information" required></textarea>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <!-- Bidang Yang Diminati -->
                    <h4 style="font-family: 'Titillium Web', sans-serif; ">
                        <i class="fas fa-quote-right"></i> BIDANG YANG <span>DIMINATI</span></h4>
                    <div class="form-group">
                        <p>Anda Dapat Memilih <b>Maksimal</b> 2 Pilihan Bidang Yang Ada, Bidang yang Anda pilih pada
                            pada
                            Bagian <b>Pilihan
                                Wajib</b> merupakan Bidang yang paling diutamakan oleh Anda </p>
                        <label for="pil_wajin">Pilihan Wajib <span style="color:red;">*</span></label>
                        <select class="form-control" id="pil_wajib" name="pil_wajib" required>
                            <option value="">Please Choose Option</option>
                            <option value="Bidang 1">Bidang 1 - Pendidikan dan Penalaran </option>
                            <option value="Bidang 2">Bidang 2 - Minat dan Bakat</option>
                            <option value="Bidang 3">Bidang 3 - Kesejahteraan Mahasiswa</option>
                            <option value="Bidang 4">Bidang 4 - Pengabdian Kepada Masyarakat</option>
                            <option value="Bidang 5">Bidang 5 - Teknologi</option>
                        </select>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pil_ops">Pilihan Opsional</label>
                        <select class="form-control" id="pil_ops" name="pil_ops">
                            <option value="">Please Choose Option</option>
                            <option value="Bidang 1">Bidang 1 - Pendidikan dan Penalaran </option>
                            <option value="Bidang 2">Bidang 2 - Minat dan Bakat</option>
                            <option value="Bidang 3">Bidang 3 - Kesejahteraan Mahasiswa</option>
                            <option value="Bidang 4">Bidang 4 - Pengabdian Kepada Masyarakat</option>
                            <option value="Bidang 5">Bidang 5 - Teknologi</option>
                        </select>
                    </div>
                    <!-- Berkas -->
                    <h4 style="font-family: 'Titillium Web', sans-serif; ">
                        <i class="fas fa-quote-right"></i> UPLOAD <span>BERKAS</span></h4>
                    <p>Silahkan baca ketentuan dari file yang diupload pada bagian <a
                            href="<?= BASEURL ?>/us/index/#content-5">
                            persyaratan pendaftaran</a></p>
                    <div class="form-group">
                        <label for="krs">Upload KRS,KHS,dan Bukti Pendukung <span style="color:red;">*</span></label>
                        <p style="font-size: 11px; color:red; font-style:italic">Maks Besar File 10MB dan
                            Berformat .pdf</p>
                        <input tyname="pil_wajib" type="file" class="form-control-file" name="up_doc" id="krs" required>
                        <div class="invalid-feedback">
                            Form is Required
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="setuju" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Saya menyetujui segala aturan dan ketentuan terkait pendaftaran ini <span
                                    style="color:red;">*</span>
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="setuju" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Segala data yang saya berikan merupakan benar adanya, jika dikemudian hari ditemukan
                                bahwa data yang diberikan merupakan palsu/hasil manipulasi saya siap menanggung resiko
                                sesuai
                                ketentuan yang berlaku <span style="color:red;">*</span>
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name="Submit">Daftar Sekarang</button>
                    <button class="btn btn-danger" type="reset">Batal</button>
                </form>
            </div>
            <div class="col-lg-6 mt-5">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-5"><span style="color:red;">Perhatian!!</span></h1>
                        <p>Mohon berhati-hati saat mengisi data yang diminta, pastikan data yang dikirim sudah memenuhi
                            beberapa hal berikut :
                        </p>
                        <ol>
                            <li> Pastikan data yang Anda kirim sudah memenuhi <a
                                    href="<?= BASEURL ?>/us/index/#content-5">
                                    persyaratan pendaftaran</a></li>
                            <li> Pastikan data yang diminta sudah diisi dengan <b>Benar dan Jujur</b> serta sesuai
                                dengan data
                                yang Anda Kirimkan.</li>
                            <li>Setelah Anda menekan tombol Daftar, data yang Anda masukkan <b><i>tidak akan dapat
                                        diubah
                                        lagi.</i></b>
                            </li>
                            <li>Untuk dapat mengulang proses pendaftaran dan mengalami masalah lain terhadap website,
                                silahkan hubungi Admin Website</li>
                        </ol>
                        <p>CP : Deyan - 081915656865 (WA)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
