<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cuaca_model extends CI_Model
{   

    public function harianyk($tanggal)
    {
        return $this->db->order_by('kategori', 'ASC')->get_where('cuaca_harian', array('Wilayah' => 'Yogyakarta', 'Tanggal' => $tanggal))->result();
    }
    public function harianslm($tanggal)
    {
        return $this->db->order_by('kategori', 'ASC')->get_where('cuaca_harian', array('Wilayah' => 'Sleman', 'Tanggal' => $tanggal))->result();
    }
    public function hariankp($tanggal)
    {
        return $this->db->order_by('kategori', 'ASC')->get_where('cuaca_harian', array('Wilayah' => 'Kulonprogo', 'Tanggal' => $tanggal))->result();
    }
    public function hariangk($tanggal)
    {
        return $this->db->order_by('kategori', 'ASC')->get_where('cuaca_harian', array('Wilayah' => 'Gunungkidul', 'Tanggal' => $tanggal))->result();
    }
    public function harianbtl($tanggal)
    {
        return $this->db->order_by('kategori', 'ASC')->get_where('cuaca_harian', array('Wilayah' => 'Bantul', 'Tanggal' => $tanggal))->result();
    }
    public function prospek()
    {
        $this->db->limit(1);
        return $this->db->order_by('tanggal_input', 'DESC')->get_where('cuaca_mingguan')->result();
    }

   //index
   public function getCuaca($tanggal){
    $cuaca=array('Cerah'=>'cerah-am.png','Berawan'=>'berawan-am.png','Udara kabur'=>'berawan tebal-pm.png','Kabut'=>'kabut-am.png','Cerah berawan'=>'cerah berawan-am.png','Hujan ringan'=>'hujan ringan-am.png','Hujan lebat'=>'hujan lebat-am.png','Hujan petir'=>'hujan petir-am.png','Hujan lokal'=>'hujan lokal-am.png','Hujan sedang'=>'hujan sedang-am.png');

    $tabel=array('cuaca_harian_pagi','cuaca_harian_siang','cuaca_harian_malam','cuaca_harian_dinihari');
    $kota=array('Yogyakarta','Sleman','Bantul','Kulonprogo','Gunungkidul');
    $data3=null;
    foreach ($kota as $kt ) {
        $data3 .='<tr>';
        $data2=null;
        foreach ($tabel as $tl) {
            $data=$this->db->get_where($tl,array('Tanggal'=>$tanggal,'Wilayah'=>$kt));
            if ($data->num_rows()>0) {
                $data=$data->result()[0];
                $data2.='<td scope="col" colspan="4">
                        <div>
                            <img width="40" height="40" src="'.base_url('../File_BMKG/Cuaca/icon_cuaca/'.$cuaca[$data->Jenis]).'"><br>
                            <h5><a href="">'.$data->Jenis.'</a></h5>
                            <h6>'.$data->kelembapan_min.'% | '.$data->suhu_min.'&#8451;</h6>
                        </div>
                    </td>';
                # code...
            }else{
                $data2.='<td scope="col" colspan="4" height="100">
                            <h6>Data belum ada</h6>
                        </td>';
            }
            # code...
        }
        $data3.='<td width="120">
                        <p><strong>'.$kt.'</strong></p>
                </td>'.$data2.'</tr>';
        # code...
    }
    return $data3;
}

//index
public function hariann($tanggal){
    $jam=date('H:i');
    $wilayah = array('Yogyakarta', 'Sleman','Bantul','Kulonprogo','Gunungkidul');
    $cuaca=array('Cerah'=>'cerah-am.png','Berawan'=>'berawan-am.png','Udara kabur'=>'berawan tebal-pm.png','Kabut'=>'kabut-am.png','Cerah berawan'=>'cerah berawan-am.png','Hujan ringan'=>'hujan ringan-am.png','Hujan lebat'=>'hujan lebat-am.png','Hujan petir'=>'hujan petir-am.png','Hujan lokal'=>'hujan lokal-am.png','Hujan sedang'=>'hujan sedang-am.png');

        $angin=array('North (Utara)'=>'wi-towards-n','NNE'=>'wi-towards-nne','NE (Timur Laut)'=>'wi-towards-ne','ENE'=>'wi-towards-ene','East (Timur)'=>'wi-towards-e','ESE'=>'wi-towards-ese','SE (Tenggara)'=>'wi-towards-se','SSE'=>'wi-towards-sse','South (Selatan)'=>'wi-towards-s','SSW'=>'wi-towards-ssw','SW (Baratdaya)'=>'wi-towards-sw','NNW'=>'wi-towards-nnw');
    $tabel=null;

    if ($jam>='00:00'&&$jam<='05:59') {
        # code...
        $tabel='cuaca_harian_dinihari';
    }else if ($jam>='06:00'&&$jam<='11:59') {
        # code...
        $tabel='cuaca_harian_pagi';
    }else if ($jam>='12:00'&&$jam<='17:59') {
        # code...
        $tabel='cuaca_harian_siang';
    }else{
         $tabel='cuaca_harian_malam';
    }
    $data2=null;
    $akt='active';
    for ($i=0; $i < 5; $i++) { 
        if ($i!=0) {
            # code...
            $akt=null;
        }
        # code...
        $data=$this->db->get_where($tabel,array('Tanggal'=>$tanggal,'Wilayah'=>$wilayah[$i]));
        if ($data->num_rows()!=0) {
            # code...
            $data=$data->result()[0];
            $data2.='<div class="carousel-item '.$akt.'">
                            <h4 style="text-align: center;"><b>'.$wilayah[$i].'</b></h4><br>
                            <img width="100" height="100" src="'.base_url().'../File_BMKG/Cuaca/icon_cuaca/'.$cuaca[$data->Jenis].'" style="margin:0px 0px 0px 50px;"><br>
                            <br>
                            <h5 style="text-align: center;">'.$data->Jenis.'</h5>
                            <h5 style="text-align: center;">'.$data->suhu_min.'ᵒC</h5>
                        </div>';
        }else{
            
            $data2.='<div class="carousel-item '.$akt.'">
                            <h4 style="text-align: center;">'.$wilayah[$i].'</h4><br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <h5 style="text-align: center;">Data cuaca belum ada</h5>
                            <h5 style="text-align: center;"></h5>
                        </div>';
        }
    }
    return $data2;
    
}

    public function get_list_cuaca($tanggal){
        $tabel=array('Pagi'=>'cuaca_harian_pagi','Siang'=>'cuaca_harian_siang','Malam'=>'cuaca_harian_malam','Dini hari'=>'cuaca_harian_dinihari');

        $kota=array('Yogyakarta','Sleman','Bantul','Kulonprogo','Gunungkidul');

        $cuaca=array('Cerah'=>'cerah-am.png','Berawan'=>'berawan-am.png','Udara kabur'=>'berawan tebal-pm.png','Kabut'=>'kabut-am.png','Cerah berawan'=>'cerah berawan-am.png','Hujan ringan'=>'hujan ringan-am.png','Hujan lebat'=>'hujan lebat-am.png','Hujan petir'=>'hujan petir-am.png','Hujan lokal'=>'hujan lokal-am.png','Hujan sedang'=>'hujan sedang-am.png','Panas'=>'cerah-am.png');
        $data2=null;
        foreach ($kota as $key =>$val) {  
            $i=0;          
            foreach ($tabel as $k => $v) {
                $this->db->select('Wilayah, Jenis, suhu_min, suhu_maks, kelembapan_min, kelembapan_maks');
                $data=$this->db->get_where($v,array('Wilayah'=>$val,'Tanggal'=>$tanggal));
                if ($data->num_rows()>0) {
                    $data=$data->result_array()[0];
                    $data2[$key][$i] = $data;
                    $data2[$key][$i]['Cuaca'] = $cuaca[$data['Jenis']];
                }else{
                    $data2[$key][$i] = null;
                }
                $i++;
            }
        }
        return json_encode($data2);
    }

    public function peringatan()
    {
        return $this->db->get('peringatan')->result();
    }
    
}