<?php
class Pendaftar_model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllPendaftarPerBid($kondisi)
    {
        $this->db->query('SELECT nim,nama_leng,prodi,keterangan,keputusan_diterima FROM eors_user_pend WHERE pil_wajib=:uta OR pil_ops=:ops ');
        $this->db->bind('uta', $kondisi);
        $this->db->bind('ops', $kondisi);
        return $this->db->resulSet();
    }
    public function getAllPendaftar()
    {
        $this->db->query('SELECT nim,nama_leng,prodi,keterangan,keputusan_diterima FROM eors_user_pend ');
        return $this->db->resulSet();
    }
    public function getPendaftarByNim($id)
    {
        $this->db->query('SELECT*FROM eors_user_pend WHERE nim=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function cekLogin($data)
    {
        $this->db->query('SELECT*FROM eors_admin WHERE user_id=:username');
        $this->db->bind('username', $data['username']);
        return $this->db->single();
    }
    public function getDataMahasiswa($data)
    {
        $this->db->query('SELECT*FROM eors_user_pend WHERE nim=:id AND keterangan=:ket');
        $this->db->bind('id', $data['nim']);
        $this->db->bind('ket', "Belum Wawancara");
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getDataMahasiswaBidang($data)
    {
        $this->db->query('SELECT*FROM eors_user_pend WHERE nim=:id AND keputusan_diterima LIKE :ket');
        $this->db->bind('id', $data['nim']);
        $this->db->bind('ket', "Bidang%");
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function insertDataMahasiswaBidang($data)
    {
        $this->db->query('UPDATE eors_user_pend SET keputusan_diterima=:ket WHERE nim=:id');
        $this->db->bind('ket', $data['pil']);
        $this->db->bind('id', $data['nim']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getAdmin($data)
    {
        $this->db->query('SELECT*FROM eors_admin WHERE user_id=:id');
        $this->db->bind('id', $data);
        return $this->db->single();
    }
    public function updatePass($new_pass, $nim)
    {
        $this->db->query('UPDATE eors_admin SET password =:new_pass WHERE user_id =:nim');
        $this->db->bind('new_pass', $new_pass);
        $this->db->bind('nim', $nim);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getTotSeluruhPendaftar()
    {
        $this->db->query('SELECT * FROM eors_user_pend');
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getTotSeluruhWawancara()
    {
        $this->db->query('SELECT * FROM eors_user_pend WHERE keterangan =:ket');
        $this->db->bind('ket', "Sudah Wawancara");
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getSeluruhPendaftar($kondisi)
    {
        $this->db->query('SELECT*FROM eors_user_pend WHERE pil_wajib=:uta OR pil_ops=:ops');
        $this->db->bind('uta', $kondisi);
        $this->db->bind('ops', $kondisi);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getSeluruhWawancara($kondisi)
    {
        $this->db->query('SELECT*FROM eors_user_pend WHERE (pil_wajib=:uta AND keterangan=:ket) OR (pil_ops=:ops AND keterangan=:ket)');
        $this->db->bind('uta', $kondisi);
        $this->db->bind('ops', $kondisi);
        $this->db->bind('ket', "Sudah Wawancara");
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getUtamaPendaftar($kondisi)
    {
        $this->db->query('SELECT*FROM eors_user_pend WHERE pil_wajib=:uta');
        $this->db->bind('uta', $kondisi);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getOpsionalPendaftar($kondisi)
    {
        $this->db->query('SELECT*FROM eors_user_pend WHERE pil_ops=:ops');
        $this->db->bind('ops', $kondisi);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getProdiPendaftar($kondisi)
    {
        $this->db->query('SELECT*FROM eors_user_pend WHERE prodi=:prodi');
        $this->db->bind('prodi', $kondisi);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getProdiWawancara($kondisi)
    {
        $this->db->query('SELECT*FROM eors_user_pend WHERE prodi=:prodi AND keterangan=:ket');
        $this->db->bind('prodi', $kondisi);
        $this->db->bind('ket', "Sudah Wawancara");
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getSemesterPendaftar($kondisi)
    {
        $this->db->query('SELECT*FROM eors_user_pend WHERE semester=:sms');
        $this->db->bind('sms', $kondisi);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getSemesterWawancara($kondisi)
    {
        $this->db->query('SELECT*FROM eors_user_pend WHERE semester=:sms AND keterangan=:ket');
        $this->db->bind('sms', $kondisi);
        $this->db->bind('ket', "Sudah Wawancara");
        $this->db->execute();
        return $this->db->rowCount();
    }
    // public function cariDataPendaftar($id, $keywoard)
    // {
    //     $query = "SELECT nim,nama_leng,prodi,keterangan FROM eors_user_pend WHERE pil_wajib=:id OR pil_ops=:id  AND nim LIKE :keywoard";
    //     $hasil = $this->db->query($query);
    //     $this->db->bind('id', $id);
    //     $this->db->bind('keywoard', "%$keywoard%");
    //     return $this->db->resulSet();
    // }
    // public function cariDataPendaftarAll($keywoard)
    // {
    //     $query = "SELECT nim,nama_leng,prodi,keterangan FROM eors_user_pend WHERE nim LIKE :keywoard";
    //     $hasil = $this->db->query($query);
    //     $this->db->bind('keywoard', "%$keywoard%");
    //     return $this->db->resulSet();
    // }
    public function deleteDataByNim($id)
    {
        $this->db->query('DELETE FROM eors_user_pend WHERE nim=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function deleteDataWawancaraByNim($id)
    {
        $this->db->query('DELETE FROM eors_wawancara WHERE nim=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }


    public function cekNimPendaftar($nim, $nama_leng)
    {
        $query = 'SELECT * FROM eors_user_pend WHERE nim = :nim OR nama_leng = :nama_leng';
        $this->db->query($query);
        $this->db->bind('nim', $nim);
        $this->db->bind('nama_leng', $nama_leng);
        return $this->db->single();
    }
    public function cekWawancara($id, $admin)
    {
        $query = 'SELECT * FROM eors_wawancara WHERE user_id = :id_admin AND nim = :id';
        $this->db->query($query);
        $this->db->bind('id_admin', $admin);
        $this->db->bind('id', $id['nim']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getDataNilai($id)
    {
        $query = 'SELECT * FROM eors_wawancara WHERE nim = :id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resulSet();
    }
    public function updateKet($id)
    {
        $query = "UPDATE eors_user_pend SET
        keterangan=:ket WHERE nim=:nim";
        $this->db->query($query);
        $this->db->bind('nim', $id['nim']);
        $this->db->bind('ket', "Sudah Wawancara");
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function insertNilai($data, $total, $ket, $admin)
    {
        $query = "INSERT INTO eors_wawancara (user_id,nim,tema_1,tema_2,tema_3,tema_4,total,ket_lulus) VALUES (:user,:nim,:tema1,:tema2,:tema3,:tema4,:total,:ket)";
        $this->db->query($query);
        $this->db->bind('user', $admin);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('tema1', $data['tema_1']);
        $this->db->bind('tema2', $data['tema_2']);
        $this->db->bind('tema3', $data['tema_3']);
        $this->db->bind('tema4', $data['tema_4']);
        $this->db->bind('total', $total);
        $this->db->bind('ket', $ket);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function editPendaftaran($data, $foto, $document)
    {
        // var_dump($data);
        // var_dump($document);
        // var_dump($foto);
        $query = "UPDATE eors_user_pend SET
        nama_leng=:nama_leng,nama_pang=:nama_pang,alamat_as=:alamat_as,alamat_sk=:alamat_sk,email=:email,wa=:wa,peng_org=:peng_org,hobi=:hobi,motto=:motto,penyakit=:penyakit,nama_sd=:nama_sd,thn_sd=:thn_sd,nama_smp=:nama_smp,thn_smp=:thn_smp,nama_sma=:nama_sma,thn_sma=:thn_sma,lainnya=:lainnya,keterangan='Belum Wawancara',up_foto=:up_foto,up_doc=:up_doc WHERE nim=:nim";
        $this->db->query($query);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('nama_leng', $data['nama_leng']);
        $this->db->bind('nama_pang', $data['nama_pang']);
        $this->db->bind('alamat_as', $data['alamat_as']);
        $this->db->bind('alamat_sk', $data['alamat_sk']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('wa', $data['wa']);
        $this->db->bind('peng_org', $data['peng_org']);
        $this->db->bind('hobi', $data['hobi']);
        $this->db->bind('motto', $data['motto']);
        $this->db->bind('penyakit', $data['penyakit']);
        $this->db->bind('nama_sd', $data['nama_sd']);
        $this->db->bind('thn_sd', $data['thn_sd']);
        $this->db->bind('nama_smp', $data['nama_smp']);
        $this->db->bind('thn_smp', $data['thn_smp']);
        $this->db->bind('nama_sma', $data['nama_sma']);
        $this->db->bind('thn_sma', $data['thn_sma']);
        $this->db->bind('lainnya', $data['lainnya']);
        $this->db->bind('up_foto', $foto);
        $this->db->bind('up_doc', $document);
        $this->db->execute();
        return $this->db->rowCount();
    }
}