<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		//$data['query']  = $this->main_model->get_list('mahasiswa',array('perpage'=>10,'offset'=>0,array('by'=>'maha_id','sorting'=>'DESC')));
		
		//$mahasiswa = array(
		//	 array('nama' =>  'Faris Eko N', 'nim' => '1614321021','photo' => '','jurusan' => 'Teknik Informatika','kelas' => 'kelas D' ),
		//	  array('nama' =>  'Mukamat Rendi S', 'nim' => '1614321046','photo' => 'assets/imj/Rendi.jpeg','jurusan' => 'Teknik Informatika','kelas' => 'kelas D' ),
		//		array('nama' =>  'Noviyanti', 'nim' => '1614321015','photo' => '','jurusan' => 'Teknik Informatika','kelas' => 'kelas D' ),
		//		  array('nama' =>  'Subaris', 'nim' => '1614321008','photo' => 'assets/imj/Baris.jpeg','jurusan' => 'Teknik Informatika','kelas' => 'kelas D' ),
		///		   array('nama' =>  'Allexandro Billy S', 'nim' => '1614321059','photo' => '','jurusan' => 'Teknik Informatika','kelas' => 'kelas D' )
		//);

		//$data['mahasiswa'] = $mahasiswa;
		//echo "Nama = " . $mahasiswa[0] . ", " . $mahasiswa[1] . " dan " . $mahasiswa[2] . ".";

		$this->load->view('home',$data);
	}
	
}
