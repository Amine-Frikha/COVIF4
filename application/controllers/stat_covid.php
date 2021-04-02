<?php
	class Stat_covid extends CI_Controller{
		public function index(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['title'] = 'Statistiques COVID-19';
			$this->load->view('templates/header',$data);
			$this->load->view('covid-19/stat_covid',$data);
			$this->load->view('templates/footer');
		}
    }
    ?>