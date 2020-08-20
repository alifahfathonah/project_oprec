<?php
class User_model
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function submitPendaftaran($data, $foto, $document)
    {
        // var_dump($data);
        // var_dump($document);
        // var_dump($foto);
        $query = "INSERT INTO eors_user_pend
        VALUES 
        (:nim,:nama_leng,:nama_pang,:semester,:prodi,:jk,:agama,:alamat_as,:alamat_sk,:email,:wa,:ipk,:peng_org,:pil_wajib,:pil_ops,:hobi,:motto,:penyakit,:nama_sd,:thn_sd,:nama_smp,:thn_smp,:nama_sma,:thn_sma,:lainnya,'Belum Wawancara',:up_foto,:up_doc,'Belum Ada')";
        $this->db->query($query);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('nama_leng', $data['nama_leng']);
        $this->db->bind('nama_pang', $data['nama_pang']);
        $this->db->bind('semester', $data['semester']);
        $this->db->bind('prodi', $data['prodi']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('alamat_as', $data['alamat_as']);
        $this->db->bind('alamat_sk', $data['alamat_sk']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('wa', $data['wa']);
        $this->db->bind('ipk', $data['ipk']);
        $this->db->bind('peng_org', $data['peng_org']);
        $this->db->bind('pil_wajib', $data['pil_wajib']);
        $this->db->bind('pil_ops', $data['pil_ops']);
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
    public function cekNimPendaftar($nim, $nama_leng)
    {
        $query = 'SELECT * FROM eors_user_pend WHERE nim = :nim OR nama_leng = :nama_leng';
        $this->db->query($query);
        $this->db->bind('nim', $nim);
        $this->db->bind('nama_leng', $nama_leng);
        return $this->db->single();
    }
    public function getBidang($id)
    {
        $query = 'SELECT*FROM eors_user_pend WHERE keputusan_diterima =:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->resulSet();
    }
    public function getTotalDiterima()
    {
        $query = 'SELECT*FROM eors_user_pend WHERE keputusan_diterima LIKE :id';
        $this->db->query($query);
        $this->db->bind('id', "Bidang%");
        $this->db->execute();
        return $this->db->rowCount();
    }
}