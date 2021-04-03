<?php
	class inscription extends CI_Controller{
		public function index(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$id=$this->session->userdata('id');
			$d= array(
				'title' => "inscription",
			);
			$query = $this->db->get_where('inscriptions',array('id'=> $id));
			if ($query->num_rows()==0){
				$data= array(
					'id' => $id,
				);
				$this->load->view('templates/header',$d);
				$this->load->view('vaccination/inscription',$data);
				$this->load->view('templates/footer');
			}
			else{
				$data= array(
					'id' => $id,
					'inscription' => $query->row_array()
				);
				$this->load->view('templates/header',$d);
				$this->load->view('vaccination/modifier_inscription',$data);
				$this->load->view('templates/footer');
			}
		}

		public function ajouter(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>'); 
			$this->form_validation->set_rules('id', 'id', 'required');
			$this->form_validation->set_rules('CIN', 'CIN', 'required|exact_length[8]|numeric');
			$this->form_validation->set_rules('numero', 'numero', 'required|exact_length[8]|numeric');
			$this->form_validation->set_rules('genre', 'genre', 'required');
			$this->form_validation->set_rules('gouvernerat', 'gouvernerat', 'required');
			$this->form_validation->set_rules('delegation', 'delegation', 'required');
			$this->form_validation->set_rules('atteint', 'atteint', 'required');
			$this->form_validation->set_rules('diabete', 'diabete', 'required');
			$this->form_validation->set_rules('hyper_art', 'hyper_art', 'required');
			$this->form_validation->set_rules('maladie_renale', 'maladie_renale', 'required');
			$this->form_validation->set_rules('insuff_cardiaque', 'insuff_cardiaque', 'required');
			$this->form_validation->set_rules('greffe_organe', 'greffe_organe', 'required');
			$this->form_validation->set_rules('maladie_respir', 'maladie_respir', 'required');
			$this->form_validation->set_rules('immunosepresseur', 'immunosepresseur', 'required');
			$this->form_validation->set_rules('poids', 'poids', 'required|numeric');
			$this->form_validation->set_rules('taille', 'taille', 'required|numeric');
			$this->form_validation->set_rules('personnel_sante', 'personnel_sante', 'required');
			if($this->form_validation->run() === FALSE){
				redirect_back();
			} else {
				$this->inscription_model->ajouter_inscription();
				redirect(acceuil);
			}
		}
		public function delete($id) {   
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->inscription_model->delete_inscription($id);
			redirect_back();
		}

		public function update(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>'); 
			$this->form_validation->set_rules('id', 'id', 'required');
			$this->form_validation->set_rules('CIN', 'CIN', 'required');
			$this->form_validation->set_rules('numero', 'numero', 'required');
			$this->form_validation->set_rules('genre', 'genre', 'required');
			$this->form_validation->set_rules('gouvernerat', 'gouvernerat', 'required');
			$this->form_validation->set_rules('delegation', 'delegation', 'required');
			$this->form_validation->set_rules('atteint', 'atteint', 'required');
			$this->form_validation->set_rules('diabete', 'diabete', 'required');
			$this->form_validation->set_rules('hyper_art', 'hyper_art', 'required');
			$this->form_validation->set_rules('maladie_renale', 'maladie_renale', 'required');
			$this->form_validation->set_rules('insuff_cardiaque', 'insuff_cardiaque', 'required');
			$this->form_validation->set_rules('greffe_organe', 'greffe_organe', 'required');
			$this->form_validation->set_rules('maladie_respir', 'maladie_respir', 'required');
			$this->form_validation->set_rules('immunosepresseur', 'immunosepresseur', 'required');
			$this->form_validation->set_rules('poids', 'poids', 'required');
			$this->form_validation->set_rules('taille', 'taille', 'required');
			$this->form_validation->set_rules('personnel_sante', 'personnel_sante', 'required');
			if($this->form_validation->run() === FALSE){
				redirect_back();
			} else {
				$this->inscription_model->update_inscription();
				redirect(inscription);
			}
		}
    }
?>
           