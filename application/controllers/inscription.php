<?php
	class inscription extends CI_Controller{
		public function index(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data= array(
				'inscription' => $this->inscription_model->afficher_inscriptions(),
				'id' => $this->session->userdata('id'),
			);
			$d= array(
				'title' => "inscription",
				'inscription' => $this->inscription_model->afficher_inscriptions(),
			);
			$this->load->view('templates/header',$d);
			$this->load->view('vaccination/inscription',$data);
			$this->load->view('templates/footer');
		}

		public function ajouter(){
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
				$d= array(
					'title' => "ajouter inscription",
					'inscription' => $this->inscription_model->afficher_inscriptions(),
				);
				$this->load->view('templates/header',$d);
				$this->load->view('vaccination/ajouter_inscription');
			} else {
				$this->inscription_model->ajouter_inscription();
				redirect(inscriptions);
			}
		}
		public function delete($id) {   
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->inscription_model->delete_inscription($id);
			redirect_back();
		}
		
		public function modifier($id){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$query = $this->db->get_where('inscriptions',array('id'=> $id));
			$data['inscription'] = $query->row_array();
			$d= array(
				'title' => "modifier inscription",
				'inscription' => $this->inscription_model->afficher_inscriptions(),
			);
			$this->load->view('templates/header',$d);
			$this->load->view('vaccination/modifier_inscription',$data);
		}

		public function valider(){
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
				redirect(inscriptions);
			}
		}
    }
?>
           