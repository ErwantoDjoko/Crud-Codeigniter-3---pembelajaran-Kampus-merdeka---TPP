<?php

class Mata_kuliah extends CI_Controller { 

    public function index(){
        $this->load->model('mtk_model');

        $matakuliah = $this->mtk_model->getMatakuliah();

        $data = array(
            'matakuliah'=> $matakuliah,
            'pages' => 'v_matakuliah',
        );

        $this->load->view('main',$data);
    }

    public function add(){
        $data = array(
            'pages' => "v_mtk_form"
        );
        $this->load->view('main',$data);
    }

    public function simpan(){

        $this->load->model('mtk_model');

        $kode_mata_kuliah = $this->input->post('kode_mata_kuliah');
        $nama_mata_kuliah = $this->input->post('nama_mata_kuliah');
        $num_sks = $this->input->post('num_sks');
        $status = $this->input->post('status');

        $data = array(
            'kd_matakuliah'       => $kode_mata_kuliah,
            'nm_matakuliah'      => $nama_mata_kuliah,
            'num_sks'     => $num_sks,
            'status'   => $status,
        );

        $this->mtk_model->simpanmtk($data);

        redirect('../mata_kuliah');
    }

    public function edit(){
        $this->load->model('mtk_model');

        $kd_matakuliah = $this->input->get('kd_matakuliah');

        $matakuliah = $this->mtk_model->getMatakuliahBykd($kd_matakuliah);

        $data = array(
            'matakuliah'=> $matakuliah,
            'pages' => 'v_edit_mtk',
        );

        $this->load->view('main',$data);
    }

    public function update(){
        $this->load->model('mtk_model');

        $kode_mata_kuliah = $this->input->post('kode_mata_kuliah');
        $nama_mata_kuliah = $this->input->post('nama_mata_kuliah');
        $num_sks = $this->input->post('num_sks');
        $status = $this->input->post('status');

        $data = array(
            'kd_matakuliah'       => $kode_mata_kuliah,
            'nm_matakuliah'      => $nama_mata_kuliah,
            'num_sks'     => $num_sks,
            'status'   => $status,
        );

        $this->mtk_model->updateMtk($data);

        redirect('../mata_kuliah');

    }

}
