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
                'inscription' => $this->inscription_model->get_inscriptions(), 
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
                'inscription' => $this->inscription_model->get_inscriptions1(), 
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
                'inscription' => $this->inscription_model->get_inscriptions2(), 
            );
            $this->load->view('templates/header',$d);
            $this->load->view('gestion/gestion',$data);
            $this->load->view('templates/footer');
        }
    }
?>