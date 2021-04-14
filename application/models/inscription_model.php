<?php
	class inscription_model extends CI_Model{
        
        public function get_rank($id,$v1,$v2){
            $this->db->select('*,RANK() OVER(ORDER BY 
            +3*DATEDIFF(date_of_birth,curdate())/365.25
            -50*atteint
            +20*hyper_art
            +20*maladie_renale
            +20*insuff_cardiaque
            +40*maladie_respir
            +50*immunosepresseur
            +70*personnel_sante 
            DESC
            ,inscriptions.id
            ASC) rank');
            $this->db->from('inscriptions');
            $this->db->join('rendez_vous', 'rendez_vous.id = inscriptions.id');
            $this->db->where('rendez_vous.validation_1',$v1);
            $this->db->where('rendez_vous.validation_2',$v2);
			$query = $this->db->get();
			return $query->result_array();
        }

        public function check_exists($id){
            $query=$this->db->get_where('inscriptions',array('id' => $id));
            return !empty($query->row_array());
        }

        public function get_validation($id){
            $this->db->select('validation_1,validation_2');
            $this->db->from('rendez_vous');
            $this->db->where('id',$id);
			$query = $this->db->get();
			return $query->result_array();
        }

        public function get_inscriptions_total($v1,$v2){
            $this->db->select('*');
            $this->db->from('rendez_vous');
            $this->db->where('validation_1',$v1);
            $this->db->where('validation_2',$v2);
			$query = $this->db->get();
			return $query->num_rows();
        }

        public function annuler($id){
            $this->db->where('id', $id);
            $this->db->delete('inscriptions');
            $this->db->where('id', $id);
            $this->db->delete('rendez_vous');
        }

        public function ajouter_inscription(){
			$data = array(
                'id' => $this->input->post('id'),
                'CIN' => $this->input->post('CIN'),
                'numero' => $this->input->post('numero'),
                'genre' => $this->input->post('genre'),
                'gouvernerat' => $this->input->post('gouvernerat'),
                'date_of_birth' => $this->input->post('date_of_birth'),
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
                'date_of_birth' => $this->input->post('date_of_birth'),
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