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
				'title' => "gestion",
			);
            $data = array(
                'inscription' => $this->inscription_model->get_inscriptions(), 
            );
            $this->load->view('templates/header',$d);
            $this->load->view('gestion/gestion',$data);
            $this->load->view('templates/footer');
        }
    }
?>