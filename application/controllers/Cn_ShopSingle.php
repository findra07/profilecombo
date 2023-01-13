<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_ShopSingle extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Md_Shop');
    }

    public function index()
    {
        $id_barang = $this->input->get('id_barang');
        $id_kategori = $this->input->get('id_kategori');

        $data['subkategori'] = $this->daftarsubkategori($id_kategori);

        $data['single'] = $this->Md_Shop->contentsingle($id_barang);
        $this->load->view('vi_shopsingle', $data);
    }

    public function daftarsubkategori($id_kategori)
    {
        $datalissub = $this->db->query("SELECT * FROM tabel_subkategori WHERE id_kategori = '$id_kategori'")->result();

        return $datalissub;
    }
}

/* End of file Cn_ShopSingle.php */
