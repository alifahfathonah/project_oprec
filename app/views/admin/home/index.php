<div class="container">
    <div class="jumbotron mt-3">
        <h2 class="display-5 text-center">Selamat Datang Di Elektronik Sistem Open Recruitment HMJ TI</h2>
        <hr>
        <div class="flash">
            <?php Flasher::flash() ?>
        </div>
        <table class="table table-borderless col-lg-6">
            <tbody>
                <tr>
                    <td>User Id Anda</td>
                    <td>:</td>
                    <td><?= $data['admin']['user_id']; ?></td>
                </tr>
                <tr>
                    <td>Nama Anda</td>
                    <td>:</td>
                    <td><?= $data['admin']['nama_user']; ?></td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td><?= $data['admin']['prodi']; ?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?= $data['admin']['jabatan']; ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>Terdaftar di Sistem Database</td>
                </tr>
            </tbody>
        </table>
        <hr class="my-2">
        <div class="row">
            <a href="<?= BASEURL; ?>/admin/pendaftaran/"><button class="btn btn-primary " type="button">Ke
                    Pendaftaran</button></a>
            <button type="button" class="btn btn-success ml-3" data-toggle="modal" data-target="#changePassword">
                Ganti Password
            </button>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/admin/gantiPassword/" method="POST" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="pass_now">Password Saat Ini</label>
                        <input value='' id="pass_now" placeholder="Input Your Password" type="password"
                            class="form-control" autocomplete="off" name="password" required />
                        <div class="invalid-feedback">
                            The Form Is Required!!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_password">Password Baru</label>
                        <input id="new_password" value='' placeholder="Input New Password" type="password"
                            class="form-control" name="password_new" autocomplete="off" required />
                        <div class="invalid-feedback">
                            The Form Is Required!!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="re_new_password">Ulangi Password Baru</label>
                        <input id="re_new_password" value='' placeholder="Input Re-New Password" type="password"
                            class="form-control" name="re_password_new" autocomplete="off" required />
                        <div class="invalid-feedback">
                            The Form Is Required!!
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="modal-footer">
                            <button class="btn btn-primary" name="Submit" type="submit" value="Submit"
                                href="">Simpan</button>
                            <button class="btn btn-danger btn-cancel-action" type="reset"
                                data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>