<?php
	class Pages extends CI_Controller{
		public function view($page = 'acceuil'){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = 'Tableau de bord';
			$this->load->view('templates/header',$data);
			$this->load->view('pages/'.$page,$data);
			$this->load->view('templates/footer');
		}
	}
?>