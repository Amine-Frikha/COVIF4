<?php
	class user_model extends CI_Model{
		public function register($enc_password){
            $data = array(
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'email' => $this->input->post('email'),
                'password' => $enc_password
            );
            $this->db->insert('users',$data);
        }
        public function check_exists($email){
            $query=$this->db->get_where('users',array('email' => $email));
            return empty($query->row_array());
        }
        public function login($email,$password){
            $this->db->where('email', $email);
            $this->db->where('password', $password);
            $result = $this->db->get('users');
            if($result->num_rows() == 1){
                return $result->row(0)->id;
            }else{
                return false;
            }
        }
        public function afficher_users(){
            $this->db->order_by('id','DESC');
			$query = $this->db->get('users');
			return $query->result_array();
        }

        public function delete_user($id) {   
            $this->db->where('id',$id);
            $this->db->delete('users');
        }

        public function update_user($enc_password) {
            $data = array(
                'nom' => $this->input->post('nom'),
                'prenom' => $this->input->post('prenom'),
                'email' => $this->input->post('email'),
                'password' => $enc_password,
                'type' => $this->input->post('type')
            );
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('users', $data);
        }
    }
?>