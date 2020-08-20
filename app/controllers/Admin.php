<?php
class Admin extends Controller
{
    public function index()
    {
        if (isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin/home');
            exit;
        } else {
            $data['judul'] = "Login";
            $data['id'] = "4";
            $data['css'] = "login";
            $this->view('admin/templates/header', $data);
            $this->view('admin/index');
            $this->view('admin/templates/footerLogin');
        }
    }
    public function home()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin');
            exit;
        } else {
            $data['judul'] = "Dashboard";
            $data['class'] = "active";
            $data['id'] = '1';
            $data['admin'] = $this->model('Pendaftar_model')->getAdmin($_SESSION['username']);
            $this->view('admin/templates/header', $data);
            $this->view('admin/templates/navbar', $data);
            $this->view('admin/home/index', $data);
            $this->view('admin/templates/footer');
        }
    }
    // public function pendaftaran($nama = 'Deyan', $pekerjaan = 'Programmer')
    public function pendaftaran()
    {
        // $data['nama'] = $nama;
        // $data['pekerjaan'] = $pekerjaan;
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin');
            exit;
        } else {
            $data['class'] = "active";
            $data['judul'] = "Pendaftaran | Live Count System";
            $data['id'] = '2';
            // Live Count Pendaftaran
            // Berdasarkan Bidang
            $data['pendaftar']['seluruh'] = $this->model('Pendaftar_model')->getTotSeluruhPendaftar();
            $data['pendaftar']['se_bid1'] = $this->model('Pendaftar_model')->getSeluruhPendaftar("Bidang 1");
            $data['pendaftar']['se_bid2'] = $this->model('Pendaftar_model')->getSeluruhPendaftar("Bidang 2");
            $data['pendaftar']['se_bid3'] = $this->model('Pendaftar_model')->getSeluruhPendaftar("Bidang 3");
            $data['pendaftar']['se_bid4'] = $this->model('Pendaftar_model')->getSeluruhPendaftar("Bidang 4");
            $data['pendaftar']['se_bid5'] = $this->model('Pendaftar_model')->getSeluruhPendaftar("Bidang 5");
            // Utama
            $data['pendaftar']['ut_bid1'] = $this->model('Pendaftar_model')->getUtamaPendaftar("Bidang 1");
            $data['pendaftar']['ut_bid2'] = $this->model('Pendaftar_model')->getUtamaPendaftar("Bidang 2");
            $data['pendaftar']['ut_bid3'] = $this->model('Pendaftar_model')->getUtamaPendaftar("Bidang 3");
            $data['pendaftar']['ut_bid4'] = $this->model('Pendaftar_model')->getUtamaPendaftar("Bidang 4");
            $data['pendaftar']['ut_bid5'] = $this->model('Pendaftar_model')->getUtamaPendaftar("Bidang 5");
            // Opsional
            $data['pendaftar']['ops_bid1'] = $this->model('Pendaftar_model')->getOpsionalPendaftar("Bidang 1");
            $data['pendaftar']['ops_bid2'] = $this->model('Pendaftar_model')->getOpsionalPendaftar("Bidang 2");
            $data['pendaftar']['ops_bid3'] = $this->model('Pendaftar_model')->getOpsionalPendaftar("Bidang 3");
            $data['pendaftar']['ops_bid4'] = $this->model('Pendaftar_model')->getOpsionalPendaftar("Bidang 4");
            $data['pendaftar']['ops_bid5'] = $this->model('Pendaftar_model')->getOpsionalPendaftar("Bidang 5");
            // Berdasarkan Prodi
            $data['pendaftar']['mi_prodi'] = $this->model('Pendaftar_model')->getProdiPendaftar("Manajemen Informatika");
            $data['pendaftar']['si_prodi'] = $this->model('Pendaftar_model')->getProdiPendaftar("Sistem Informasi");
            $data['pendaftar']['pti_prodi'] = $this->model('Pendaftar_model')->getProdiPendaftar("Pendidikan Teknik Informatika");
            $data['pendaftar']['ilkom_prodi'] = $this->model('Pendaftar_model')->getProdiPendaftar("Ilmu Komputer");
            //Berdasarkan Semester
            $data['pendaftar']['dua_semester'] = $this->model('Pendaftar_model')->getSemesterPendaftar("2");
            $data['pendaftar']['empat_semester'] = $this->model('Pendaftar_model')->getSemesterPendaftar("4");

            // Live Count Wawancara
            // Berdasarkan Bidang
            $data['wawancara']['seluruh'] = $this->model('Pendaftar_model')->getTotSeluruhWawancara();
            $data['wawancara']['se_bid1'] = $this->model('Pendaftar_model')->getSeluruhWawancara("Bidang 1");
            $data['wawancara']['se_bid2'] = $this->model('Pendaftar_model')->getSeluruhWawancara("Bidang 2");
            $data['wawancara']['se_bid3'] = $this->model('Pendaftar_model')->getSeluruhWawancara("Bidang 3");
            $data['wawancara']['se_bid4'] = $this->model('Pendaftar_model')->getSeluruhWawancara("Bidang 4");
            $data['wawancara']['se_bid5'] = $this->model('Pendaftar_model')->getSeluruhWawancara("Bidang 5");
            // Berdasarkan Prodi
            $data['wawancara']['mi_prodi'] = $this->model('Pendaftar_model')->getProdiWawancara("Manajemen Informatika");
            $data['wawancara']['si_prodi'] = $this->model('Pendaftar_model')->getProdiWawancara("Sistem Informasi");
            $data['wawancara']['pti_prodi'] = $this->model('Pendaftar_model')->getProdiWawancara("Pendidikan Teknik Informatika");
            $data['wawancara']['ilkom_prodi'] = $this->model('Pendaftar_model')->getProdiWawancara("Ilmu Komputer");
            //Berdasarkan Semester
            $data['wawancara']['dua_semester'] = $this->model('Pendaftar_model')->getSemesterWawancara("2");
            $data['wawancara']['empat_semester'] = $this->model('Pendaftar_model')->getSemesterWawancara("4");
            $this->view('admin/templates/header', $data);
            $this->view('admin/templates/navbar', $data);
            $this->view('admin/pendaftaran/index', $data);
            $this->view('chart', $data);
            $this->view('admin/templates/footer');
        }
    }
    public function insertKeputusan()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin');
            exit;
        } else {
            $data['class'] = "active";
            $data['judul'] = "Pendaftaran | Keputusan Penerimaan";
            $data['id'] = '3';
            $nim = $_POST["nim"];
            if ($this->model('Pendaftar_model')->getDataMahasiswa($_POST) > 0) {
                Flasher::setflash('Gagal', 'Ditambahkan, Pendaftar Belum Melakukan Wawancara', 'danger');
                header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                exit;
            } else {
                if ($this->model('Pendaftar_model')->getDataMahasiswaBidang($_POST) > 0) {
                    Flasher::setflash('Gagal', 'Ditambahkan, Pendaftar Sudah Diterima Dibidang Lain', 'danger');
                    header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                    exit;
                } else {
                    if ($this->model('Pendaftar_model')->insertDataMahasiswaBidang($_POST) > 0) {
                        Flasher::setflash('Berhasil', 'Ditambahkan', 'success');
                        header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                        exit;
                    } else {
                        Flasher::setflash('Gagal', 'Ditambahkan, Terjadi Kesalahan', 'danger');
                        header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                        exit;
                    }
                }
            }
        }
    }
    public function pendaftar()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin');
            exit;
        } else {
            $data['class'] = "active";
            $data['judul'] = "Pendaftaran | Daftar Pendaftar";
            $data['id'] = '3';
            if ($_SESSION['username'] === "1815091037" || $_SESSION['username'] === "Demisioner@Bidang5" || $_SESSION['username'] === "Demisioner@Komunitas") {
                $data['pendaftar'] = $this->model('Pendaftar_model')->getAllPendaftarPerBid("Bidang 5");
                $data['bidang'] = "Bidang 5";
            } else if ($_SESSION['username'] === "1815091063"  || $_SESSION['username'] === "Demisioner@Bidang4") {
                $data['pendaftar'] = $this->model('Pendaftar_model')->getAllPendaftarPerBid("Bidang 4");
                $data['bidang'] = "Bidang 4";
            } else if ($_SESSION['username'] === "1815091048"  || $_SESSION['username'] === "Demisioner@Bidang3") {
                $data['pendaftar'] = $this->model('Pendaftar_model')->getAllPendaftarPerBid("Bidang 3");
                $data['bidang'] = "Bidang 3";
            } else if ($_SESSION['username'] === "1815051052"  || $_SESSION['username'] === "Demisioner@Bidang2") {
                $data['pendaftar'] = $this->model('Pendaftar_model')->getAllPendaftarPerBid("Bidang 2");
                $data['bidang'] = "Bidang 2";
            } else if ($_SESSION['username'] === "1815051083"  || $_SESSION['username'] === "Demisioner@Bidang1") {
                $data['pendaftar'] = $this->model('Pendaftar_model')->getAllPendaftarPerBid("Bidang 1");
                $data['bidang'] = "Bidang 1";
            } else {
                $data['pendaftar'] = $this->model('Pendaftar_model')->getAllPendaftar();
                $data['bidang'] = "Keseluruhan";
            }
            $this->view('admin/templates/header', $data);
            $this->view('admin/templates/navbar', $data);
            $this->view('admin/pendaftaran/data', $data);
            $this->view('admin/templates/footer');
        }
    }
    public function detail($id)
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin');
            exit;
        } else {
            $data['id'] = '5';
            $data['class'] = "active";
            $data['judul'] = "Pendaftaran | Detail Pendaftar";
            $data['pendaftar'] = $this->model('Pendaftar_model')->getPendaftarByNim($id);
            $data['nilai'] = $this->model('Pendaftar_model')->getDataNilai($id);
            if ($_SESSION['username'] === "1815091037" || $_SESSION['username'] === "Demisioner@Bidang5" || $_SESSION['username'] === "Demisioner@Komunitas") {
                // Buka
                //$this->view('admin/templates/header', $data);
                //$this->view('admin/templates/navbar', $data);
                //$this->view('admin/pendaftaran/detail', $data);
                //$this->view('admin/templates/footer');

                // Tutup
                $this->view('infoHeader');
                $this->view('infoAdmin');
                $this->view('infoFooter');
            } else if ($_SESSION['username'] === "1815091063"  || $_SESSION['username'] === "Demisioner@Bidang4") {
                // Buka
                //$this->view('admin/templates/header', $data);
                //$this->view('admin/templates/navbar', $data);
                //$this->view('admin/pendaftaran/detail', $data);
                //$this->view('admin/templates/footer');

                // Tutup 
                $this->view('infoHeader');
                $this->view('infoAdmin');
                $this->view('infoFooter');
            } else if ($_SESSION['username'] === "1815091048"  || $_SESSION['username'] === "Demisioner@Bidang3") {
                // Buka
      		//$this->view('admin/templates/header', $data);
                //$this->view('admin/templates/navbar', $data);
                //$this->view('admin/pendaftaran/detail', $data);
                //$this->view('admin/templates/footer');

                // Tutup
                 $this->view('infoHeader');
                $this->view('infoAdmin');
                $this->view('infoFooter');
            } else if ($_SESSION['username'] === "1815051052"  || $_SESSION['username'] === "Demisioner@Bidang2") {
                // Buka
                 //$this->view('admin/templates/header', $data);
                //$this->view('admin/templates/navbar', $data);
                //$this->view('admin/pendaftaran/detail', $data);
                //$this->view('admin/templates/footer');

                // Tutup
               $this->view('infoHeader');
                $this->view('infoAdmin');
                $this->view('infoFooter');
            } else if ($_SESSION['username'] === "1815051083"  || $_SESSION['username'] === "Demisioner@Bidang1") {
                // Dibuka bidang 1 -> 9 Mei 2020 jam 12.07 WITA
                //$this->view('admin/templates/header', $data);
                //$this->view('admin/templates/navbar', $data);
                //$this->view('admin/pendaftaran/detail', $data);
                //$this->view('admin/templates/footer');
                
                // Tutup
                 $this->view('infoHeader');
                $this->view('infoAdmin');
                $this->view('infoFooter');
            } else if ($_SESSION['username'] === "AdminDeyan") {
                $this->view('admin/templates/header', $data);
                $this->view('admin/templates/navbar', $data);
                $this->view('admin/pendaftaran/detail', $data);
                $this->view('admin/templates/footer');
            }else {
            	//ketua, wakil, demisioner
                $this->view('admin/templates/header', $data);
                $this->view('admin/templates/navbar', $data);
                $this->view('admin/pendaftaran/detail', $data);
                $this->view('admin/templates/footer');
                
                //Tutup
                //$this->view('infoHeader');
                //$this->view('infoAdmin');
                //$this->view('infoFooter');
            }
        }
    }
    public function prosesLogin()
    {
        if (isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin/home');
            exit;
        } else {
            if (isset($_POST["Submit"])) {
                $data['admin'] = $this->model('Pendaftar_model')->cekLogin($_POST);
                if ($data['admin'] > 0) {
                    if (password_verify($_POST['password'], $data['admin']['password'])) {
                        $_SESSION['login'] = true;
                        $_SESSION['username'] = $_POST['username'];
                        Flasher::setFlash('Benar', 'Anda Telah Login, Jaga Selalu Data Anda', 'success');
                        header('Location:' . BASEURL . '/admin/home');
                        exit;
                    } else {
                        Flasher::setFlash('Username atau Password', 'Salah', 'danger');
                        header('Location:' . BASEURL . '/admin');
                        exit;
                    }
                } else {
                    Flasher::setFlash('Username atau Password', 'Salah', 'danger');
                    header('Location:' . BASEURL . '/admin');
                    exit;
                }
            }
        }
    }
    public function logout()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin');
            exit;
        } else {
            $_SESSION = [];
            session_unset();
            session_destroy();
            header('Location:' . BASEURL . '/admin');
            exit;
        }
    }
    public function gantiPassword()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin');
            exit;
        } else {
            if (isset($_POST['Submit'])) {
                $data['admin'] = $this->model('Pendaftar_model')->getAdmin($_SESSION['username']);
                if (password_verify($_POST['password'], $data['admin']['password'])) {
                    if ($_POST['password_new'] === $_POST['re_password_new']) {
                        if (strlen($_POST['password_new']) >= 8) {
                            $new_pass = password_hash($_POST['password_new'], PASSWORD_DEFAULT);
                            if ($this->model('Pendaftar_model')->updatePass($new_pass, $_SESSION['username']) > 0) {
                                Flasher::setFlash('Password', 'Berhasil Diubah', 'success');
                                header('Location:' . BASEURL . '/admin/home');
                                exit;
                            }
                        } else {
                            Flasher::setFlash('Password', 'Gagal Diubah, password baru kurang dari 8 karakter', 'danger');
                            header('Location:' . BASEURL . '/admin/home');
                            exit;
                        }
                    } else {
                        Flasher::setFlash('Password', 'Gagal Diubah, password baru tidak sama', 'danger');
                        header('Location:' . BASEURL . '/admin/home');
                        exit;
                    }
                } else {
                    Flasher::setFlash('Password', 'Gagal Diubah, password saat ini salah', 'danger');
                    header('Location:' . BASEURL . '/admin/home');
                    exit;
                }
            }
        }
    }
    // public function cari()
    // {
    //     if (!isset($_SESSION['login'])) {
    //         header('Location:' . BASEURL . '/admin');
    //         exit;
    //     } else {
    //         $data['class'] = "active";
    //         $data['judul'] = "Pendaftaran | Daftar Pendaftar";
    //         $data['id'] = '3';
    //         if ($_SESSION['username'] === "1815091037") {
    //             $data['pendaftar'] = $this->model('Pendaftar_model')->cariDataPendaftar("Bidang 5", $_POST['cari']);
    //             $data['bidang'] = "Bidang 5";
    //         } else if ($_SESSION['username'] === "1815091063") {
    //             $data['pendaftar'] = $this->model('Pendaftar_model')->cariDataPendaftar("Bidang 4", $_POST['cari']);
    //             $data['bidang'] = "Bidang 4";
    //         } else if ($_SESSION['username'] === "1815091048") {
    //             $data['pendaftar'] = $this->model('Pendaftar_model')->cariDataPendaftar("Bidang 3", $_POST['cari']);
    //             $data['bidang'] = "Bidang 3";
    //         } else if ($_SESSION['username'] === "1815051052") {
    //             $data['pendaftar'] = $this->model('Pendaftar_model')->cariDataPendaftar("Bidang 2", $_POST['cari']);
    //             $data['bidang'] = "Bidang 2";
    //         } else if ($_SESSION['username'] === "1815051083") {
    //             $data['pendaftar'] = $this->model('Pendaftar_model')->cariDataPendaftar("Bidang 1", $_POST['cari']);
    //             $data['bidang'] = "Bidang 1";
    //         } else {
    //             $data['pendaftar'] = $this->model('Pendaftar_model')->cariDataPendaftarAll($_POST['cari']);
    //             $data['bidang'] = "Keseluruhan";
    //         }
    //         $this->view('admin/templates/header', $data);
    //         $this->view('admin/templates/navbar', $data);
    //         $this->view('admin/pendaftaran/data', $data);
    //         $this->view('admin/templates/footer');
    //     }
    // }
    public function hapus($id)
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin');
            exit;
        } else {
            $data['id'] = '3';
            $data['class'] = "active";
            $data['judul'] = "Pendaftaran | Dadtar Pendaftar";
            // if ($_SESSION['username'] === "1815091037") {
            if ($this->model('Pendaftar_model')->deleteDataWawancaraByNim($id) > 0) {
                if ($this->model('Pendaftar_model')->deleteDataByNim($id) > 0) {
                    Flasher::setFlash('Berhasil', 'Dihapus', 'success');
                    header('Location:' . BASEURL . '/admin/pendaftar');
                    exit;
                } else {
                    Flasher::setFlash('Gagal', 'Dihapus', 'danger');
                    header('Location:' . BASEURL . '/admin/pendaftar');
                    exit;
                }
            } else {
                if ($this->model('Pendaftar_model')->deleteDataByNim($id) > 0) {
                    Flasher::setFlash('Berhasil', 'Dihapus', 'success');
                    header('Location:' . BASEURL . '/admin/pendaftar');
                    exit;
                } else {
                    Flasher::setFlash('Gagal', 'Dihapus', 'danger');
                    header('Location:' . BASEURL . '/admin/pendaftar');
                    exit;
                }
            }
            // }
        }
    }
    public function insertNilai()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin');
            exit;
        } else {
            $nim = $_POST["nim"];
            $admin = $_SESSION['username'];
            $hasil = ($_POST['tema_1'] + $_POST['tema_2'] + $_POST['tema_3'] + $_POST['tema_4']) / 4;
            if ($hasil > 6) {
                $ket = "Direkomendasikan";
            } else {
                $ket = "Opsional";
            }
            if ($this->model('Pendaftar_model')->cekWawancara($_POST, $admin) > 0) {
                Flasher::setflash('Gagal', 'Ditambahkan, Anda Sudah Memasukkan Nilai Sebelumnya', 'danger');
                header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                exit;
            } else {
                  if ($this->model('Pendaftar_model')->insertNilai($_POST, $hasil, $ket, $admin) > 0) {
                    if ($this->model('Pendaftar_model')->updateKet($_POST) > 0) {
                        Flasher::setflash('Berhasil', 'Ditambahkan', 'success');
                        header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                        exit;
                    } else {
                        Flasher::setflash('Berhasil', 'Ditambahkan', 'success');
                        header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                        exit;
                    }
                } else {
                    Flasher::setflash('Gagal', 'Ditambahkan', 'danger');
                    header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                    exit;
                }
            }
        }
    }
    public function updateData()
    {
        if (!isset($_SESSION['login'])) {
            header('Location:' . BASEURL . '/admin');
            exit;
        } else {
            if ($_FILES['up_foto']['error'] === 4 && $_FILES['up_doc']['error'] === 4) {
                $data['gambar'] = $_POST['up_foto_lama'];
                $data['doc'] = $_POST['up_doc_lama'];
                // var_dump($data['gambar'], $data['doc']);
                if (isset($_POST['Submit'])) {
                    $nim = $_POST["nim"];
                    if ($this->model('Pendaftar_model')->editPendaftaran($_POST, $data['gambar'], $data['doc']) > 0) {
                        Flasher::setflash('Berhasil', 'Diubah', 'success');
                        header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                        exit;
                    } else {
                        Flasher::setflash('Gagal', 'Diubah', 'danger');
                        header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                        exit;
                    }
                }
            } else if ($_FILES['up_foto']['error'] === 4) {
                $data['gambar'] = $_POST['up_foto_lama'];
                // var_dump($data['gambar']);
                // var_dump($_FILES);
                $eksDocBoleh = array('pdf');
                // Nama
                $namaDoc = $_FILES['up_doc']['name'];
                // Explode
                $doc = explode('.', $namaDoc);
                // Ekstensi
                $eksDoc = strtolower(end($doc));
                // Ukuran
                $ukuranDoc = $_FILES['up_doc']['size'];
                // Tmp
                $tmpDoc = $_FILES['up_doc']['tmp_name'];
                if (isset($_POST['Submit'])) {
                    $nim = $_POST["nim"];
                    if (in_array($eksDoc, $eksDocBoleh) === true) {
                        if ($ukuranDoc < 10717430) {
                            // Generate Nama Doc Baru
                            $new_Doc = uniqid();
                            $new_Doc .= '.';
                            $new_Doc .= $eksDoc;
                            $destination_path = getcwd() . DIRECTORY_SEPARATOR;
                            // Target
                            $target_doc = $destination_path . '/file/doc/' . $new_Doc;
                            if ($this->model('Pendaftar_model')->editPendaftaran($_POST,  $data['gambar'], $new_Doc) > 0) {
                                move_uploaded_file($tmpDoc, $target_doc);
                                Flasher::setflash('Berhasil', 'Diubah', 'success');
                                header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                                exit;
                            } else {
                                Flasher::setflash('Gagal', 'Diubah', 'danger');
                                header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                                exit;
                            }
                        }
                        if ($ukuranDoc > 10717430) {
                            Flasher::setflash('Gagal', 'Diubah, File Terlalu Besar', 'danger');
                            header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                            exit;
                        }
                    } else {
                        Flasher::setflash('Gagal', 'Diubah, Ekstensi File Tidak Diperbolehkan', 'danger');
                        header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                        exit;
                    }
                }
            } else if ($_FILES['up_doc']['error'] === 4) {
                $data['doc'] = $_POST['up_doc_lama'];
                // var_dump($data['doc']);
                // var_dump($_FILES);
                $eksFotoBoleh =  array('png', 'jpg', 'jpeg');;
                // Nama
                $namaFoto = $_FILES['up_foto']['name'];
                // Explode
                $Foto = explode('.', $namaFoto);
                // Ekstensi
                $eksFoto = strtolower(end($Foto));
                // Ukuran
                $ukuranFoto = $_FILES['up_foto']['size'];
                // Tmp
                $tmpFoto = $_FILES['up_foto']['tmp_name'];
                if (isset($_POST['Submit'])) {
                    $nim = $_POST["nim"];
                    if (in_array($eksFoto, $eksFotoBoleh) === true) {
                        if ($ukuranFoto < 5717430) {
                            // Generate Nama Doc Baru
                            $new_Foto = uniqid();
                            $new_Foto .= '.';
                            $new_Foto .= $eksFoto;
                            $destination_path = getcwd() . DIRECTORY_SEPARATOR;
                            // Target
                            $target_foto = $destination_path . '/file/foto/' . $new_Foto;
                            if ($this->model('Pendaftar_model')->editPendaftaran($_POST, $new_Foto, $data['doc']) > 0) {
                                move_uploaded_file($tmpFoto, $target_foto);
                                Flasher::setflash('Berhasil', 'Diubah', 'success');
                                header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                                exit;
                            } else {
                                Flasher::setflash('Gagal', 'Diubah', 'danger');
                                header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                                exit;
                            }
                        }
                        if ($ukuranFoto > 5717430) {
                            Flasher::setflash('Gagal', 'Diubah, File Terlalu Besar', 'danger');
                            header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                            exit;
                        }
                    } else {
                        Flasher::setflash('Gagal', 'Diubah, Ekstensi File Tidak Diperbolehkan', 'danger');
                        header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                        exit;
                    }
                }
            } else {
                // var_dump($_FILES['up_foto'], $_FILES['up_doc']);
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
                // Ukuran
                $ukuranFoto = $_FILES['up_foto']['size'];
                $ukuranDoc = $_FILES['up_doc']['size'];
                // Tmp
                $tmpFoto = $_FILES['up_foto']['tmp_name'];
                $tmpDoc = $_FILES['up_doc']['tmp_name'];
                if (isset($_POST['Submit'])) {
                    $nim = $_POST["nim"];
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
                            if ($this->model('Pendaftar_model')->editPendaftaran($_POST, $new_Foto, $new_Doc) > 0) {
                                move_uploaded_file($tmpFoto, $target_foto);
                                move_uploaded_file($tmpDoc, $target_doc);
                                Flasher::setflash('Berhasil', 'Diubah', 'success');
                                header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                                exit;
                            } else {
                                Flasher::setflash('Gagal', 'Diubah', 'danger');
                                header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                                exit;
                            }
                        }
                        if ($ukuranFoto > 5717430 || $ukuranDoc > 10717430) {
                            Flasher::setflash('Gagal', 'Diubah, File Terlalu Besar', 'danger');
                            header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                            exit;
                        }
                    } else {
                        Flasher::setflash('Gagal', 'Diubah, Ekstensi File Tidak Diperbolehkan', 'danger');
                        header('Location:' . BASEURL . '/admin/detail/' . $nim . '');
                        exit;
                    }
                }
            }
        }
    }
}
