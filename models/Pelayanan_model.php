<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayanan_model extends CI_Model
{
    function __construct(){
        parent::__construct();
        $this->db3 = $this->load->database('third', TRUE);
    }

    public function form_pelayanan()
    {
        return $this->db3->get('form_pelayanan')->result();
    }

    public function tarif_pelayanan()
    {
        return $this->db3->get('tarif_pelayanan')->result();
    }

    public function syarat_permohonan()
    {
        return $this->db3->get('syarat_permohonan')->result();
    }

    public function alur_permohonan()
    {
        return $this->db3->get('alur_permohonan')->result();
    }
}