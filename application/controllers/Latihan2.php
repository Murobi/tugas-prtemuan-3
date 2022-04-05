<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan2 extends CI_Controller {

    public function index() {        
        $this->load->view('input_matakuliah.php');
    }

    public function cetak(){
        $kodeMataKuliah = $this->input->post('kode');
        $namaMataKuliah = $this->input->post('nama');
        $sksMataKuliah = $this->input->post('sks');

        if($nilaiKuliah < 60){
            $nilaiKuliah = "Wajib Remedial";
        }else {
            $nilaiKuliah = "Tidak Remedial";
        }


        if($sksMataKuliah== 3 || $sksMataKuliah == 4){
            $sksUnggulan = "Unggulan SKS";
        }else {
            $sksUnggulan = "SKS regular";
        }


        //membuat object untuk parsing data ke view yg dituju
        $data = [
            'kode' => $kodeMataKuliah,
            'nama' => $namaMataKuliah,
            'sks' => $sksMataKuliah,
            'nilai' => $nilaiKuliah,
            'unggulan' => $sksUnggulan
        ];

        //kirim ke view
        $this->load->view('output_matakuliah.html', $data);


    }

}