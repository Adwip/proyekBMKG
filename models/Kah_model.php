<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kah_model extends CI_Model
{

    public function kimia($bulan)
    {
        return $this->db->get_where('kimia_air_hujan3', array('bulan' => $bulan))->result();
    }

    public function ket_kah(){
        return $this->db->get('keterangan_kah')->result();
    }

    public function spm($bulan)
    {
        return $this->db->get_where('spm', array('bulan' => $bulan))->result();
    }

    public function ket_spm(){
        return $this->db->get('ket_spm')->result();
    }
}
