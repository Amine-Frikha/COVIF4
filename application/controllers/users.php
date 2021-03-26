<?php
	class users extends CI_Controller{
        public function affiche(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$data['user'] = $this->user_model->afficher_users();
			$d= array(
				'title' => "Utilisateurs",
				'section' => $this->section_model->afficher_sections(),
			);
			$this->load->view('pages/header',$d);
			$this->load->view('users/users',$data);
        }

        public function delete($id) {   
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->user_model->delete_user($id);
			redirect_back();
		}
        
        public function ajouter_user(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->form_validation->set_rules('nom','nom','required');
            $this->form_validation->set_rules('prenom','prenom','required');
            $this->form_validation->set_rules('email','email','required|callback_check_exists');
            $this->form_validation->set_rules('password','Mot de passe','required');
            $this->form_validation->set_rules('password2','confirmer mot de passe','matches[password]');
			if($this->form_validation->run() === FALSE){
				$d= array(
                    'title' => "ajouter utilisateur",
                    'section' => $this->section_model->afficher_sections(),
                );
                $this->load->view('pages/header',$d);
				$this->load->view('users/ajouter_user');
			} else {
                $enc_password = md5($this->input->post('password'));
                $this->user_model->register($enc_password);
				redirect('users/affiche');
			}
        }
        
        public function modifier($id){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$query = $this->db->get_where('users',array('id'=> $id));
			$data['user'] = $query->row_array();
			$d= array(
				'title' => "modifier utilisateur",
				'section' => $this->section_model->afficher_sections(),
			);
			$this->load->view('pages/header',$d);
			$this->load->view('users/modifier_user',$data);
		}

		public function valider(){
			if(!$this->session->userdata('logged_in')){
				redirect('users/login');
			}
			$this->form_validation->set_rules('nom','nom','required');
            $this->form_validation->set_rules('prenom','prenom','required');
            $this->form_validation->set_rules('email','email','required');
            $this->form_validation->set_rules('password','Mot de passe','required');
            $this->form_validation->set_rules('new_password','Mot de passe','required');
            $this->form_validation->set_rules('password2','confirmer mot de passe','matches[new_password]');
            $enc = md5($this->input->post('password'));
            $enc_password = md5($this->input->post('new_password'));
            $q=$this->db->get_where('users',array('id' => $this->input->post('id')));
            $query = $q->row_array();
            if($query['password'] != $enc)
                redirect_back();
			if($this->form_validation->run() === FALSE){
                redirect_back();
			} else {
				$this->user_model->update_user($enc_password);
				redirect('users/affiche');
			}
		}

		public function register(){
            $this->form_validation->set_rules('nom','nom','required');
            $this->form_validation->set_rules('prenom','prenom','required');
            $this->form_validation->set_rules('email','email','required|callback_check_exists');
            $this->form_validation->set_rules('password','Mot de passe','required');
            $this->form_validation->set_rules('password2','confirmer mot de passe','matches[password]');
            if($this->form_validation->run() === FALSE){
                $this->load->view('pages/register');
            }else{
                $enc_password = md5($this->input->post('password'));
                $this->user_model->register($enc_password);
                $this->session->set_flashdata('user_registered','Vous êtes maintenant inscrit');
                redirect('');
            }
        }

        public function login(){
            $this->form_validation->set_rules('email','email','required');
            $this->form_validation->set_rules('password','Mot de passe','required');
            if($this->form_validation->run() === FALSE){
                $this->load->view('pages/login');
            }else{
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
                $user_id = $this->user_model->login($email,$password);
                if($user_id){
                    $q=$this->db->get_where('users',array('id' => $user_id));
                    $query = $q->row_array();
                    $user_data=array(
                        'id' => $user_id,
                        'nom' => $query['nom'],
                        'prenom' => $query['prenom'],
                        'type' => $query['type'],
                        'logged_in' => true
                    );
                    $this->session->set_userdata($user_data);
                    $this->session->set_flashdata('user_loggedin','Vous êtes maintenant connecté');
                    redirect('pages/view');
                }else{
                    $this->session->set_flashdata('user_loggedin','Vous êtes maintenant connecté');
                    redirect('users/login');
                }
            }
        }

        public function logout(){
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('nom');
            $this->session->unset_userdata('prenom');
            $this->session->set_flashdata('user_loggedout','Vous êtes maintenant déconnecté');
            redirect('login');
        }
        
        public function check_exists($email){
            $this->form_validation->set_message('check_exists','Ce compte est déjà en utilisation');
            return $this->user_model->check_exists($email);
        }
	}
?>