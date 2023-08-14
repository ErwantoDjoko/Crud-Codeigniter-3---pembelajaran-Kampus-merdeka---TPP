<?php

class Hello extends CI_Controller {

	public function index()
	{
        $this->load->model('mhs_Model');

        $mhs = $this->mhs_Model->getMahasiswa();
        // var_dump($mhs);die;

        $data = array(
            'mhs'=> $mhs,
        );

		$this->load->view('v_hello',$data);
	}
}
