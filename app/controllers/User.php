<?
class User extends Controller
{
    public function index()
    {
        $data['judul'] = "Dashboard";
        $data['id'] = "1";
        $data['class'] = "active";
        $this->view('us/templates/header', $data);
        $this->view('us/templates/slide');
        $this->view('us/index');
        $this->view('us/templates/footer');
    }
    public function daftar()
    {
        $data['id'] = "2";
        $data['judul'] = "Daftar";
        $data['class'] = "active";
        //$this->view('us/templates/header', $data);
        //$this->view('us/templates/slide');
        //$this->view('us/daftar');
        //$this->view('us/templates/footer');
        $this->view('infoHeader');
        $this->view('info');
        $this->view('infoFooter');
    }
    public function pengumuman()
    {
        $data['id'] = "3";
        $data['judul'] = "Pengumuman";
        $data['class'] = "active";
        $data['pendaftar']['seluruh'] = $this->model('Pendaftar_model')->getTotSeluruhPendaftar();
        // Berdasarkan Prodi
        $data['pendaftar']['mi_prodi'] = $this->model('Pendaftar_model')->getProdiPendaftar("Manajemen Informatika");
        $data['pendaftar']['si_prodi'] = $this->model('Pendaftar_model')->getProdiPendaftar("Sistem Informasi");
        $data['pendaftar']['pti_prodi'] = $this->model('Pendaftar_model')->getProdiPendaftar("Pendidikan Teknik Informatika");
        $data['pendaftar']['ilkom_prodi'] = $this->model('Pendaftar_model')->getProdiPendaftar("Ilmu Komputer");
        //Berdasarkan Semester
        $data['pendaftar']['dua_semester'] = $this->model('Pendaftar_model')->getSemesterPendaftar("2");
        $data['pendaftar']['empat_semester'] = $this->model('Pendaftar_model')->getSemesterPendaftar("4");
        // Data Bidang 
        $data["Bidang1"] = $this->model("User_model")->getBidang("Bidang 1");
        $data["Bidang2"] = $this->model("User_model")->getBidang("Bidang 2");
        $data["Bidang3"] = $this->model("User_model")->getBidang("Bidang 3");
        $data["Bidang4"] = $this->model("User_model")->getBidang("Bidang 4");
        $data["Bidang5"] = $this->model("User_model")->getBidang("Bidang 5");
        $data["diterima"] = $this->model("User_model")->getTotalDiterima();
        $this->view('us/templates/header', $data);
        $this->view('us/templates/slide');
        $this->view('us/pengumuman', $data);
        $this->view('chartUser', $data);
        $this->view('us/templates/footer');
        //$this->view('infoHeader');
        //$this->view('info');
        //$this->view('infoFooter');
    }
    public function proses()
    {
        $eksFotoBoleh = array('png', 'jpg', 'jpeg');
        $eksDocBoleh = array('pdf');
        // Nama
        $namaFoto = $_FILES['up_foto']['name'];
        $namaDoc = $_FILES['up_doc']['name'];
        // Explode
        $foto = explode('.', $namaFoto);
        $doc = explode('.', $namaDoc);
        // Ekstensi
        $eksFoto = strtolower(end($foto));
        $eksDoc = strtolower(end($doc));
        // Error
        $errFoto = $_FILES['up_foto']['error'];
        $errDoc = $_FILES['up_doc']['error'];
        // Ukuran
        $ukuranFoto = $_FILES['up_foto']['size'];
        $ukuranDoc = $_FILES['up_doc']['size'];
        // Tmp
        $tmpFoto = $_FILES['up_foto']['tmp_name'];
        $tmpDoc = $_FILES['up_doc']['tmp_name'];
        if (isset($_POST['Submit'])) {
            $nim = $_POST["nim"];
            $nama_leng = $_POST["nama_leng"];
            if ($this->model('User_model')->cekNimPendaftar($nim, $nama_leng) > 0) {
                Flasher::setflash('Gagal', 'Ditambahkan, NIM atau Nama Sudah Pernah Didaftarkan', 'danger');
                header('Location:' . BASEURL . '/us/daftar');
                exit;
            } else {
                if ($errFoto === 4 && $errDoc === 4) {
                    Flasher::setflash('Gagal', 'Ditambahkan, File Belum Di Uploud', 'danger');
                    header('Location:' . BASEURL . '/us/daftar');
                    exit;
                }
                if (in_array($eksFoto, $eksFotoBoleh) === true && in_array($eksDoc, $eksDocBoleh) === true) {
                    if ($ukuranFoto < 5717430 && $ukuranDoc < 10717430) {
                        // Generate Nama Gambar Baru
                        $new_Foto = uniqid();
                        $new_Foto .= '.';
                        $new_Foto .= $eksFoto;
                        // Generate Nama Doc Baru
                        $new_Doc = uniqid();
                        $new_Doc .= '.';
                        $new_Doc .= $eksDoc;
                        $destination_path = getcwd() . DIRECTORY_SEPARATOR;
                        // Target
                        $target_foto = $destination_path . '/file/foto/' . $new_Foto;
                        $target_doc = $destination_path . '/file/doc/' . $new_Doc;
                        if ($this->model('User_model')->submitPendaftaran($_POST, $new_Foto, $new_Doc) > 0) {
                            move_uploaded_file($tmpFoto, $target_foto);
                            move_uploaded_file($tmpDoc, $target_doc);
                            Flasher::setflash('Berhasil', 'Ditambahkan', 'success');
                            header('Location:' . BASEURL . '/us/daftar');
                            exit;
                        } else {
                            Flasher::setflash('Gagal', 'Ditambahkan', 'danger');
                            header('Location:' . BASEURL . '/us/daftar');
                            exit;
                        }
                    }
                    if ($ukuranFoto > 5717430 || $ukuranDoc > 10717430) {
                        Flasher::setflash('Gagal', 'Ditambahkan, File Terlalu Besar', 'danger');
                        header('Location:' . BASEURL . '/us/daftar');
                        exit;
                    }
                } else {
                    Flasher::setflash('Gagal', 'Ditambahkan, Ekstensi File Tidak Diperbolehkan', 'danger');
                    header('Location:' . BASEURL . '/us/daftar');
                    exit;
                }
            }
        }
    }
}
