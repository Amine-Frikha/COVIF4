<?php
	class Pages extends CI_Controller{
		public function view($page = 'acceuil'){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$id=$this->session->userdata('id');
			$exist=$this->inscription_model->check_exists($id);
			if($exist){
				$v1=$this->inscription_model->get_validation($id)[0]['validation_1'];
				$v2=$this->inscription_model->get_validation($id)[0]['validation_2'];
				$d= array(
					'exist' => $exist,
					'done' => $v2,
					'queue' => $this->inscription_model->get_rank($id,$v1,$v2),
					'total' => $this->inscription_model->get_inscriptions_total($v1,$v2),
					'type' => $this->session->userdata('type'),
					'title' => "COVIF4",
				);
			}
			else{
				$d= array(
					'exist' => $exist,
					'type' => $this->session->userdata('type'),
					'title' => "COVIF4",
				);
			}
			$this->load->view('templates/header',$d);
			$this->load->view('pages/'.$page,$d);
			$this->load->view('templates/footer');
		}
	}
?>