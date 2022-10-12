<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Crud");
    }
    public function push_data()
    {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];

        $nama_tabel = "user";

        if ($nama != null && $alamat != null && $pekerjaan != null) {
            $datanya = [
                "nama" => $nama,
                "alamat" => $alamat,
                "pekerjaan" => $pekerjaan,
            ];

            $this->M_Crud->insert_data($datanya, $nama_tabel);

            redirect('home');
        } else {
            echo "Ada form yg kosong!";
        }
    }
    public function edit_data($id)
    {
        $enama = $_POST['nama'];
        $ealamat = $_POST['alamat'];
        $epekerjaan = $_POST['pekerjaan'];

        $nama_tabel = "user";

        if ($enama != null && $ealamat != null && $epekerjaan != null) {
            $datanya = [
                "nama" => $enama,
                "alamat" => $ealamat,
                "pekerjaan" => $epekerjaan,
            ];

            $this->M_Crud->edit_data($datanya, $nama_tabel, $id);

            redirect('home');
        } else {
            echo "Ada form yg kosong!";
        }
    }
    public function delete_data($id)
    {
        $this->M_Crud->delete_data($id);
        echo "successs delete";
        redirect('home');
    }
}