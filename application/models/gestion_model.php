<?php
	class gestion_model extends CI_Model{
        
        public function get_inscriptions(){
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
            $this->db->join('users', 'users.id = inscriptions.id');
            $this->db->join('rendez_vous', 'rendez_vous.id = inscriptions.id');
			$query = $this->db->get();
			return $query->result_array();
        }

        public function get_inscriptions1(){
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
            $this->db->join('users', 'users.id = inscriptions.id');
            $this->db->join('rendez_vous', 'rendez_vous.id = inscriptions.id');
            $this->db->where('rendez_vous.validation_1',0);
            $this->db->where('rendez_vous.validation_2',0);
			$query = $this->db->get();
			return $query->result_array();
        }

        public function get_inscriptions2(){
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
            $this->db->join('users', 'users.id = inscriptions.id');
            $this->db->join('rendez_vous', 'rendez_vous.id = inscriptions.id');
            $this->db->where('rendez_vous.validation_1',1);
            $this->db->where('rendez_vous.validation_2',0);
			$query = $this->db->get();
			return $query->result_array();
        }
        
        public function get_inscription($id){
            $this->db->select('*,RANK() OVER(ORDER BY 
            users.id
            DESC) rank');
            $this->db->from('inscriptions');
            $this->db->join('users', 'users.id = inscriptions.id');
            $this->db->join('rendez_vous', 'rendez_vous.id = inscriptions.id');
            $this->db->where('users.id',$id);
			$query = $this->db->get();
			return $query->result_array();
        }

        public function rendez_vous() {
            $data = array(
                'id' => $this->input->post('id'),
                'date_1' => $this->input->post('date_1'),
                'validation_1' => $this->input->post('validation_1'),
                'date_2' => $this->input->post('date_2'),
                'validation_2' => $this->input->post('validation_2'),
            );
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('rendez_vous', $data);
        }
    }
?>