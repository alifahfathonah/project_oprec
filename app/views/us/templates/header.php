<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <!-- Refresh Otomatis -->
    <?php
    if ($data['id'] === '3') {
        echo "<meta http-equiv=\"refresh\" content=\"180\" />";
    }
    ?>
    <!-- Jquery -->
    <script src="<?= BASEURL; ?>/js/jquery-3.4.1.min.js"></script>
    <script src="<?= BASEURL; ?>/js/Chart.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fd8370ec87.js" crossorigin="anonymous"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap" rel="stylesheet">
    <!-- Data Tables -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/DataTables/datatables.min.css">
    <!-- Icon -->
    <link rel="shortcut icon" href="<?= BASEURL ?>/img/hmj.png" type="image/x-icon">
    <title>E-ORS :: HMJ TI UNDIKSHA -
        <?= $data['judul']; ?>
    </title>
    <style>
    .loading {
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        z-index: 9999;
        background-color: #404456;
    }

    #loader {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -2.7em;
        margin-left: -2.7em;
        width: 5.4em;
        height: 5.4em;
        background-color: #404456;
    }

    #hill {
        position: absolute;
        width: 7.1em;
        height: 7.1em;
        top: 1.7em;
        left: 1.7em;
        background-color: transparent;
        border-left: .25em solid whitesmoke;
        transform: rotate(45deg);
    }

    #hill:after {
        content: '';
        position: absolute;
        width: 7.1em;
        height: 7.1em;
        left: 0;
        background-color: #404456;
    }

    #box {
        position: absolute;
        left: 0;
        bottom: -.1em;
        width: 1em;
        height: 1em;
        background-color: transparent;
        border: .25em solid whitesmoke;
        border-radius: 15%;
        transform: translate(0, -1em) rotate(-45deg);
        animation: push 2.5s cubic-bezier(.79, 0, .47, .97) infinite;
    }

    @keyframes push {
        0% {
            transform: translate(0, -1em) rotate(-45deg);
        }

        5% {
            transform: translate(0, -1em) rotate(-50deg);
        }

        20% {
            transform: translate(1em, -2em) rotate(47deg);
        }

        25% {
            transform: translate(1em, -2em) rotate(45deg);
        }

        30% {
            transform: translate(1em, -2em) rotate(40deg);
        }

        45% {
            transform: translate(2em, -3em) rotate(137deg);
        }

        50% {
            transform: translate(2em, -3em) rotate(135deg);
        }

        55% {
            transform: translate(2em, -3em) rotate(130deg);
        }

        70% {
            transform: translate(3em, -4em) rotate(217deg);
        }

        75% {
            transform: translate(3em, -4em) rotate(220deg);
        }

        100% {
            transform: translate(0, -1em) rotate(-225deg);
        }
    }
    </style>
    <script>
    $(document).ready(function() {
        $(".loading").fadeOut("slow");
    })
    </script>
</head>

<body>
    <div class="loading">
        <div id="loader">
            <div id="box"></div>
            <div id="hill"></div>
        </div>
    </div>

    <section id="header">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-color">
            <div class="container">
                <a class="navbar-brand"><img src="<?= BASEURL ?>/img/hmj.png" width="45px">E-ORS HMJ TI</a>
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
                        <a class="nav-link" href="<?= BASEURL ?>/us/index"><i class="fas fa-home"></i> Home <span
                                class="sr-only">(current)</span></a>
                        </li>
                        <? if ($data['id'] == "2") {
                            echo '<li class="nav-item ' . $data['class'] . '">';
                        }
                        ?>
                        <a class="nav-link " href="<?= BASEURL ?>/us/daftar"><i class="fas fa-list"></i> Daftar
                            Yuk</a>
                        </li>
                        <? if ($data['id'] == "3") {
                            echo '<li class="nav-item ' . $data['class'] . '">';
                        }
                        ?>
                        <a class="nav-link " href="<?= BASEURL ?>/us/pengumuman"><i class="fas fa-bell"></i>
                            Pengumuman</a>
                    </ul>

                </div>
            </div>
        </nav>
    </section>
