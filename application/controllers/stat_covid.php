<?php
	class Stat_covid extends CI_Controller{
		public function index(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$d= array(
				'type' => $this->session->userdata('type'),
				'title' => "Statistiques COVID-19",
			);
			$this->load->view('templates/header',$d);
			$this->load->view('covid-19/stat_covid',$d);
			$this->load->view('templates/footer');
		}
    }
    ?>