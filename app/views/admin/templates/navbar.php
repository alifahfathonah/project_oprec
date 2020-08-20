<nav class="navbar navbar-expand-lg navbar-dark navbar-color">
    <div class="container">
        <a class="navbar-brand" href="<?= BASEURL; ?>/admin/home/index"><img src="<?= BASEURL ?>/img/hmj.png" alt=""
                width="50px">E-ORS HMJ TI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav" id="nav">
                <? if ($data['id'] == "1") {
                    echo '<li class="nav-item ' . $data['class'] . '">';
                }
                ?>
                <a class="nav-link" href=" <?= BASEURL ?>/admin/home/"><i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                </li>
                <? if ($data['id'] == "2") {
                    echo '<li class="nav-item ' . $data['class'] . '">';
                }
                ?>
                <a class="nav-link" href="<?= BASEURL; ?>/admin/pendaftaran/"><i class="fas fa-chart-line"></i> Live
                    Count</a>
                </li>
                <? if ($data['id'] == "3" || $data['id'] == '5') {
                    echo '<li class="nav-item ' . $data['class'] . '">';
                }
                ?>
                <a class="nav-link" href="<?= BASEURL; ?>/admin/pendaftar/"><i class="fas fa-database"></i> Data
                    Pendaftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tombol-logout" href="<?= BASEURL; ?>/admin/logout/"><i class="fas fa-sign-out-alt"></i> Log
                        Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>