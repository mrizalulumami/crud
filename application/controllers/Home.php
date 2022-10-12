<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Crud");
    }

    public function index()
    {
        $data['title'] = "Home Page";

        $data['tabel_user'] = $this->M_Crud->tampilkan_data();

        $this->load->view('home_dashboard', $data);
    }
    public function halaman_tambah()
    {
        $data['title'] = "Create page";

        $this->load->view("tambah_data", $data);
    }
    public function halaman_edit($id)
    {
        $data['title'] = "Create page";

        $data['du'] = $this->M_Crud->tampilkan_data_by_id($id);

        $this->load->view("edit_page", $data);
    }
}