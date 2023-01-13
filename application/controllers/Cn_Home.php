<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cn_Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('vi_home.php');
    }
}

/* End of file IndexHome.php */
