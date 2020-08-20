<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Refresh Otomatis -->
    <?php
    // if ($data['id'] === '3' || $data['id'] === '2') {
    //     echo "<meta http-equiv=\"refresh\" content=\"10\" />";
    // }
    ?>
    <!-- Jquery -->
    <script src="<?= BASEURL; ?>/js/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Chart -->
    <script src="<?= BASEURL; ?>/js/Chart.js"></script>
    <!-- Data Tables -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/DataTables/datatables.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <!-- Style -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <!-- Icon and Font Awesome -->
    <link rel="shortcut icon" href="<?= BASEURL ?>/img/hmj.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/fd8370ec87.js" crossorigin="anonymous"></script>
    <title>E-ORS :: ADMIN - <?= $data['judul']; ?></title>
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

<? if ($data['id'] == "4") {
    echo '<body id="' . $data['css'] . '">';
} else {
    echo '<body id="menu">';
}

?>
<div class="loading">
    <div id="loader">
        <div id="box"></div>
        <div id="hill"></div>
    </div>
</div>