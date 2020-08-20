<section id="footer-text-web">
    <div class="row col-lg-12 justify-content-center">
        <div class="col-lg-12 mt-5 text-center">
            <h3 style="font-family: 'Titillium Web', sans-serif; "> OPEN RECRUITMENT HMJ TI 2020-2021</h3>
            <h4>Diselenggarakan oleh :</h4>
            <hr width="20%">
            <h5>Himpunan Mahasiswa Jurusan Teknik Informatika <br> Masa Bakti 2020-2021 <br> Fakultas Teknik dan
                Kejuruan <br> Universitas Pendidikan Ganesha</h5>
            <p>Alamat : Kampus Tengah, Jalan Udayana no. 11, Singaraja Bali</p>
            <p>Email : hmjtiundiksha@gmail.com | Ig : @hmj_ti.undiksha | Youtube : HMJ TI Undiksha | Fb :
                Hmj_Ti.Undiksha</p>
        </div>
    </div>
</section>
<section id="cp">
    <div class="row col-lg-12 pt-3 justify-content-lg-center justify-content-center">
        <div class="col-lg-4 text-center text-lg-left">
            <p>Made With <i class="fas fa-heart love"></i> For You</p>
        </div>
        <div class="col-lg-4 text-center">
            <p>Copyright &copy 2020.HMJ TI Undiksha - All Right Reserved</p>
        </div>
        <div class="col-lg-4 col-12">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-lg-1 col-1">
                    <a href="mailto:hmjtiundiksha@gmail.com"><i class="fas fa-envelope email"></i></a>
                </div>
                <div class="col-lg-1 col-1">
                    <a href="https://www.instagram.com/hmj_ti.undiksha/"><i class="fab fa-instagram instagram"></i></a>
                </div>
                <div class="col-lg-1 col-1">
                    <a href="https://www.youtube.com/channel/UCjvKksTEifUWNU_rfCHubDg"><i
                            class="fab fa-youtube youtube"></i></a>
                </div>
                <div class="col-lg-1 col-1">
                    <a href="https://web.facebook.com/hmjti.undiksha?_rdc=1&_rdr"><i
                            class="fab fa-facebook-square facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/dist/sweetalert2.all.min.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
<script src="<?= BASEURL; ?>/DataTables/datatables.min.js"></script>
<script>
window.setTimeout("waktu()", 1000);

function waktu() {
    var waktu = new Date();
    setTimeout("waktu()", 1000);
    document.getElementById("jam").innerHTML = waktu.getHours();
    document.getElementById("menit").innerHTML = waktu.getMinutes();
    document.getElementById("detik").innerHTML = waktu.getSeconds();
}
</script>

</body>

</html>