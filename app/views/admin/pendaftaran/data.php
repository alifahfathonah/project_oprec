<div class="container mt-4">
    <div class="jumbotron">
        <h2 class="display-5">Data Pendaftar Sementara <span><?= $data['bidang']; ?></span></h2>
        <hr class="my-4">
        <?php
        Flasher::flash()
        ?>
        <div class="col-lg-12 table-responsive mt-4">
            <table id="dataTables" class="display table table-striped table-bordered">
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">#</th>
                        <th scope="col">Nama Pendaftar</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Status Wawancara</th>
                        <th scope="col">Diterima Di Bidang</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data['pendaftar'] as $mhs) : ?>
                    <tr>
                        <td><?= $mhs['nim']; ?></td>
                        <td><?= $mhs['nama_leng']; ?></td>
                        <td><?= $mhs['prodi']; ?></td>
                        <td><?= $mhs['keterangan']; ?></td>
                        <td><?= $mhs['keputusan_diterima']; ?></td>
                        <td class="text-right"><a href="<?= BASEURL; ?>/admin/detail/<?= $mhs['nim'] ?>"><button
                                    type="button" class="btn btn-primary btn-sm">Detail</button></a></td>
                        <td class="text-left"><a href="<?= BASEURL; ?>/admin/hapus/<?= $mhs['nim'] ?>"
                                class="tombol-hapus"><button type="button" class="btn btn-danger btn-sm" disabled>Hapus</button>
                                <a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <a class="btn btn-danger btn-md mt-3" href="<?= BASEURL; ?>/admin/pendaftaran/1" role="button">Kembali
        </a>
    </div>
</div>
