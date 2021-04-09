<?php
	class inscription_model extends CI_Model{
		public function __construct(){
			$this->load->database();
        }
        public function get_inscriptions(){
            $this->db->select('*');
            $this->db->from('inscriptions');
            $this->db->join('users', 'users.id = inscriptions.id');
            $this->db->join('rendez_vous', 'rendez_vous.id = inscriptions.id');
			$query = $this->db->get();
			return $query->result_array();
        }
        
        

        public function ajouter_inscription(){
			$data = array(
                'id' => $this->input->post('id'),
                'CIN' => $this->input->post('CIN'),
                'numero' => $this->input->post('numero'),
                'genre' => $this->input->post('genre'),
                'gouvernerat' => $this->input->post('gouvernerat'),
                'delegation' => $this->input->post('delegation'),
                'atteint' => $this->input->post('atteint'),
                'diabete' => $this->input->post('diabete'),
                'hyper_art' => $this->input->post('hyper_art'),
                'maladie_renale' => $this->input->post('maladie_renale'),
                'insuff_cardiaque' => $this->input->post('insuff_cardiaque'),
                'greffe_organe' => $this->input->post('greffe_organe'),
                'maladie_respir' => $this->input->post('maladie_respir'),
                'immunosepresseur' => $this->input->post('immunosepresseur'),
                'poids' => $this->input->post('poids'),
                'taille' => $this->input->post('taille'),
                'personnel_sante' => $this->input->post('personnel_sante'),
                
            );
            $data_r = array(
                'id' => $this->input->post('id'),
            );
            $this->db->insert('inscriptions', $data);
            $this->db->insert('rendez_vous', $data_r);
        }
        
        public function delete_inscription($id) {
            $this->db->where('id',$id);
            $this->db->delete('inscriptions');
        }

        public function update_inscription() {
            $data = array(
                'id' => $this->input->post('id'),
                'CIN' => $this->input->post('CIN'),
                'numero' => $this->input->post('numero'),
                'genre' => $this->input->post('genre'),
                'gouvernerat' => $this->input->post('gouvernerat'),
                'delegation' => $this->input->post('delegation'),
                'atteint' => $this->input->post('atteint'),
                'diabete' => $this->input->post('diabete'),
                'hyper_art' => $this->input->post('hyper_art'),
                'maladie_renale' => $this->input->post('maladie_renale'),
                'insuff_cardiaque' => $this->input->post('insuff_cardiaque'),
                'greffe_organe' => $this->input->post('greffe_organe'),
                'maladie_respir' => $this->input->post('maladie_respir'),
                'immunosepresseur' => $this->input->post('immunosepresseur'),
                'poids' => $this->input->post('poids'),
                'taille' => $this->input->post('taille'),
                'personnel_sante' => $this->input->post('personnel_sante'),
            );
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('inscriptions', $data);
        }
    }
?>