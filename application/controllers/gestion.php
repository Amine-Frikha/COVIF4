<?php
    class gestion extends CI_Controller{
        public function index(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
            if($this->session->userdata('type')!='admin'){
                redirect_back();
            }
            $d = array(
				'type' => $this->session->userdata('type'),
				'title' => "liste complete",
			);
            $data = array(
                'inscription' => $this->gestion_model->get_inscriptions(), 
            );
            $this->load->view('templates/header',$d);
            $this->load->view('gestion/gestion',$data);
            $this->load->view('templates/footer');
        }

        public function non_vaccines(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
            if($this->session->userdata('type')!='admin'){
                redirect_back();
            }
            $d = array(
				'type' => $this->session->userdata('type'),
				'title' => "Non vaccinés",
			);
            $data = array(
                'inscription' => $this->gestion_model->get_inscriptions1(), 
            );
            $this->load->view('templates/header',$d);
            $this->load->view('gestion/gestion',$data);
            $this->load->view('templates/footer');
        }

        public function vaccines_1_fois(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
            if($this->session->userdata('type')!='admin'){
                redirect_back();
            }
            $d = array(
				'type' => $this->session->userdata('type'),
				'title' => "Vaccinés une fois",
			);
            $data = array(
                'inscription' => $this->gestion_model->get_inscriptions2(), 
            );
            $this->load->view('templates/header',$d);
            $this->load->view('gestion/gestion',$data);
            $this->load->view('templates/footer');
        }

        public function modifier($id){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
            if($this->session->userdata('type')!='admin'){
                redirect_back();
            }
            $d = array(
				'type' => $this->session->userdata('type'),
				'title' => "modification",
			);
            $data = array(
                'inscription' => $this->gestion_model->get_inscription($id), 
            );
            $this->load->view('templates/header',$d);
            $this->load->view('gestion/modification',$data);
            $this->load->view('templates/footer');
        }
        
		public function rendez_vous(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
            if($this->session->userdata('type')!='admin'){
                redirect_back();
            }
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>'); 
			$this->form_validation->set_rules('id', 'id');
			$this->form_validation->set_rules('date_1', 'date_1');
			$this->form_validation->set_rules('validation_1', 'validation_1');
			$this->form_validation->set_rules('date_2', 'date_2');
			$this->form_validation->set_rules('validation_2', 'validation_2');
            
            $this->gestion_model->rendez_vous();
            redirect('gestion');
		}
    }
?>