<?php
	class Stat_vaccin extends CI_Controller{
		public function index(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$d= array(
				'type' => $this->session->userdata('type'),
				'title' => "Statistiques Du Vaccin",
			);
			$this->load->view('templates/header',$d);
			$this->load->view('vaccination/stat_vaccin',$d);
			$this->load->view('templates/footer');
		}
    }
    ?>