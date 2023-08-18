<?php

class Mahasiswa extends CI_Controller {

	public function index()
	{
        $this->load->model('mhs_Model');

        $mhs = $this->mhs_Model->getMahasiswa();

        $data = array(
            'mhs'=> $mhs,
            'pages' => 'v_mhs',
        );

        $this->load->view('main',$data);
	}

    public function add(){

        $data = array(
            'pages' => 'v_mhs_form',
        );

        $this->load->view('main',$data);

    }

    public function simpan(){

        $this->load->model('mhs_Model');

        $nim = $this->input->post('nim');
        $nama = $this->input->post('nmmhs');
        $prodi = $this->input->post('prodi');
        $jurusan = $this->input->post('jurusan');

        $data = array(
            'nim'       => $nim,
            'nama'      => $nama,
            'prodi'     => $prodi,
            'jurusan'   => $jurusan,
        );

        $this->mhs_Model->registerMhs($data);

        redirect('../mahasiswa');
    }


    public function view(){
        $this->load->model('mhs_Model');

        $nim = $this->input->get('nim');

        $profile = $this->mhs_Model->getMahasiswaByNim($nim);
        $data = array(
            'profile'=> $profile,
           
            'pages' => 'v_mhs_d',
        );

        $this->load->view('main',$data);
    }

    public function edit(){
        $this->load->model('mhs_Model');

        $nim = $this->input->get('nim');

        $profile = $this->mhs_Model->getMahasiswaByNim($nim);

        $data = array(
            'profile'=> $profile,
            'pages' => 'edit_mhs',
        );

        $this->load->view('main',$data);
    }


    public function update(){
        $this->load->model('mhs_Model');

        $nim = $this->input->post('nim');
        $nama = $this->input->post('nmmhs');
        $prodi = $this->input->post('prodi');
        $jurusan = $this->input->post('jurusan');

        $data = array(
            'nim'       => $nim,
            'nama'      => $nama,
            'prodi'     => $prodi,
            'jurusan'   => $jurusan,
        );

        $this->mhs_Model->updateMhs($data);

        redirect('../mahasiswa');

    }
     public function delete(){
        $this->load->model('mhs_Model');

        $nim = $this->input->get('nim');



        $this->mhs_Model->deleteMhs($nim);

        redirect('../mahasiswa');

    }
}
