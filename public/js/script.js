(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();


$('.tombol-hapus').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data Mahasiswa Akan Dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.value) {
            Swal.fire(
                'Deleted!',
                'Data Pendaftar Berhasil Dihapus',
                'success'
            )
            setTimeout(function () {
                document.location.href = href;
            }, 1500);
        }
    })

});

$('.tombol-logout').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Anda Akan Dialihkan Ke Halaman Login",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })

});

$(document).ready(function () {
    $('#dataTables').DataTable();
});

$(document).ready(function () {
    $('#bidang1').DataTable();
});
$(document).ready(function () {
    $('#bidang2').DataTable();
});
$(document).ready(function () {
    $('#bidang3').DataTable();
});
$(document).ready(function () {
    $('#bidang4').DataTable();
});
$(document).ready(function () {
    $('#bidang5').DataTable();
});