<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		
	}

	
	// CRUD users
	function data_users(){

		$data['users'] = $this->Model->get_data('users')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/users',$data);
		$this->load->view('admin/footer');
	}

	function user_add(){		
		$this->load->view('admin/header');
		$this->load->view('admin/users_add');
		$this->load->view('admin/footer');
	}

	function users_add_act(){		
		$name_user = $this->input->post('name_user');
		
		
		$this->form_validation->set_rules('name_user','nama users','required');

		if($this->form_validation->run() != false){
			$data = array(
				'name_user' => $name_user,
				
				
			);
			$this->Model->insert_data($data,'users');
			redirect(base_url().'users/data_users');
		}else{
			$this->load->view('admin/header');
			$this->load->view('admin/users_add');
			$this->load->view('admin/footer');
		}
	}

	function users_edit($id){				
		$where = array(
			'id_user' => $id		
		);
		$data['users'] = $this->Model->edit_data($where,'users')->result();	
		$data['skil'] = $this->db->query("select * from users,skils where users.id_user=skils.user_id and users.id_user='$id'")->result();
			
		$this->load->view('admin/header');
		$this->load->view('admin/users_edit',$data);
		$this->load->view('admin/footer');
	}

	function users_update(){
	$this->output->enable_profiler(true) ;		
		$id = $this->input->post('user_id');
		$name_user = $this->input->post('name_user');
		
			$where = array(
				'id_user' => $id		
			);
			$data = array(
				'name_user' => $name_user,
				'use' => $name_user,				
			);
			$this->Model->update_data($where,$data,'users');
			
			
	}

	function users_hapus($id){				
		$where = array(
			'id_user' => $id		
		);
		$this->Model->delete_data($where,'users');		
		redirect(base_url().'users/data_users');
	}



	function tambah_skil($id){	
	$this->output->enable_profiler(true) ;			
		$data['users'] = $this->db->query("select * from users,skils where users.id_user='$id'")->result();		
		$this->load->view('admin/header');
		$this->load->view('admin/tambah_skil',$data);
		$this->load->view('admin/footer');
	}

	function skil_update(){	
	
		// $id = $this->input->post('id_skil');
		$name_skil = $this->input->post('name_skil');
		$user_id = $this->input->post('user_id');
		
		
			$data = array(
				'name_skil' => $name_skil,
				'user_id'=>$user_id			
			);
			$this->Model->insert_data($data,'skils');
			redirect(base_url().'users/data_users');
		
	}

	

	

}
