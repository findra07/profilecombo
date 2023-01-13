<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_Katalog extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Md_Katalog');
        $this->load->model('Md_Shop');
    }

    public function index()
    {
        $id = $this->input->get('id_kategori');
        $search = $this->input->get('search');
        $kategori = urldecode($this->input->get('kategori'));

        $data['tampilmerk'] = $this->Md_Katalog->get_listmerk($id);

        $data['tampilkategori'] = $this->Md_Shop->getTampilKategori();

        $data['subkategori'] = $this->Md_Katalog->searchKategori($id, $search);
        $this->load->view('vi_katalog', $data);
    }

    public function getProduct($page)
    {
        // $id_kategori = $this->input->get('id_kategori');
        $id_kategori = $this->input->get('idKat');
        $id_merk = $this->input->get('merk');
        $product_name = $this->input->get('product_name') === 'null' ? 'pintu' : $this->input->get('product_name');
        // $data = $this->Product_model->getProduct($product_name);

        // $this->output->set_content_type('application/json')->set_output(json_encode($res));
        $convert = str_replace('%20', ' ', $product_name);
        //konfigurasi pagination
        $this->load->library('pagination');
        $config['base_url']     = site_url('Cn_Katalog'); //site url
        $config['per_page']     = 12;  //show record per halaman
        $config["uri_segment"]     = 3;  // uri parameter
        $config["use_page_numbers"] = TRUE;
        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config["per_page"];
        // $limit = $config["per_page"];
        $config['total_rows'] = $this->Md_Katalog->totalProduct($convert, $id_kategori, $id_merk); //total row
        // Membuat Style pagination untuk BootStrap v4
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
        $config['num_links'] = 2;

        $this->pagination->initialize($config);

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 

        $data = $this->Md_Katalog->getProduct($config["per_page"], $start, $convert, $id_kategori, $id_merk);
        $paginationku = $this->pagination->create_links();
        $res = count($data) > 0 ?
            array(
                'status' => true,
                'data' => $data,
                'message' => 'get product succesfully',
                'code' => 200,
                'link' => $paginationku,
                'total_rows' => $config['total_rows']
            ) :
            array(
                'status' => false,
                'data' => [],
                'message' => 'product not found',
                'code' => 200
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($res));
    }
}

/* End of file Controllername.php */
