<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam_model extends CI_Model {

    //manip table pinjam
    public function simpanPinjam($data)
    {
        $this->db->insert('pinjam', $data);
    }

    public function getPinjamPag()
    {
        return $this->db->get('pinjam')->result_array();
    }

    public function selectData($table, $where)
    {
        return $this->db->get($table, $where);
    }

    public function updateData($data, $where)
    {
        $this->db->update('pinjam', $data, $where);
    }

    public function deleteData($tabel, $where)
    {
        $this->db->delete($tabel, $where);
    }

    public function joinData()
    {
        $this->db->select('*');
        $this->db->from('pinjam');
        $this->db->join('pinjam_detail', 'pinjam_detail.no_pinjam=pinjam.no_pinjam', 'Right');
        $this->db->join('user', 'user.id=pinjam.id', 'Inner');
        return $this->db->get()->result_array();
    }

    //manip tabel detai pinjam
    public function simpanDetail($idbooking, $nopinjam)
    {
        $sql = "INSERT INTO pinjam_detail (no_pinjam,id_buku) 
                     SELECT pinjam.no_pinjam,booking_detail.id_buku 
                       FROM pinjam, booking_detail 
                      WHERE booking_detail.id_booking=$idbooking AND pinjam.no_pinjam='$nopinjam'";
        $this->db->query($sql);
    }

}

/* End of file Pinjam_model.php */
