<?php

class M_Crud extends CI_Model
{
    public function insert_data($data, $nama_tabel)
    {
        $this->db->set($data);
        $this->db->insert($nama_tabel);
    }
    public function edit_data($data, $nama_tabel, $id)
    {
        $this->db->set($data);
        $this->db->where('id_user', $id);
        $this->db->update($nama_tabel);
    }
    public function delete_data($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete("user");
    }


    //untuk nampilin satu data
    public function tampilkan_data()
    {
        $hasil = $this->db->query("Select * from user");

        return $hasil->result();
    }
    public function tampilkan_data_by_id($id)
    {
        $hasil = $this->db->query("Select * from user where id_user='$id'");

        return $hasil->row();
    }
}