<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		#$data['query']  = $this->main_model->get_list('mahasiswa',array('perpage'=>10,'offset'=>0,array('by'=>'maha_id','sorting'=>'DESC')));
		
		$mahasiswa = array("Faris Eko", "Allexandro Billy S", "Rendy");
		echo "Nama = " . $mahasiswa[0] . ", " . $mahasiswa[1] . " dan " . $mahasiswa[2] . ".";

		#$this->load->view('home');
	}
	
}
