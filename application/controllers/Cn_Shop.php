<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_Shop extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Md_Shop');
    }

    public function index()
    {
        $this->load->library('pagination');

        $id_kategori = $this->input->get('id_kategori');
        $id_merk = $this->input->get('id_merk');
        $id_subkategori = $this->input->get('id_subkategori');


        $config['base_url'] = site_url('Cn_Shop/index');
        $config['total_rows'] = $this->Md_Shop->getTotalProduk($id_kategori, $id_merk, $id_subkategori)->num_rows();
        $config['per_page'] = 15;
        // $config["use_page_numbers"] = TRUE;
        // $config['uri_segment'] = 3;
        // $coice = $config["total_rows"] / $config['per_page'];
        // $config["num_links"] = floor($coice);

        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center barang_pagination">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close']     = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']      = '</span></li>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']      = '<span aria-hidden="true"> &raquo;</span></span></li>';
        $config['prev_link']        = 'Prev';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']      = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';

        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        // $config["use_page_numbers"] = TRUE;
        // $page = $this->uri->segment(3);
        // $start = ($page - 1) * $config["per_page"];

        $data['subkategori'] = $this->daftarsubkategori($id_kategori);


        $data['tampilproduk'] = $this->Md_Shop->getSemua($id_kategori, $id_merk, $id_subkategori, $config["per_page"], $data['start']);
        $data['tampilkategori'] = $this->Md_Shop->getTampilKategori();
        $data['tampilmerk'] = $this->Md_Shop->getTampilMerk($id_kategori);

        // $data['pagination'] = $this->pagination->create_links();
        $this->load->view('vi_shop', $data);
    }

    public function detail()
    {
        $data['tampilproduk'] = $this->Md_Shop->getSemua();
        $this->load->view('vi_shopsingle', $data);
    }

    public function daftarsubkategori($id_kategori)
    {
        $datalissub = $this->db->query("SELECT * FROM tabel_subkategori WHERE id_kategori = '$id_kategori'")->result();

        return $datalissub;
    }
}

/* End of file Cn_Shop.php */
