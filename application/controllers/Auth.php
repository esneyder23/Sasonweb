<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}
	public function index()
	{
		if ($this->session->userdata("sign-in")) {
			redirect(base_url()."dashboard");
		}
		else{
			$this->load->view("admin/sign-in");
		}
		

	}

	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Usuarios_model->login($username, sha1($password));
		if (empty($res)) {
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect("/");
		}
		else{

			$data  = array(
				'idUsuario' => $res[0]->id, 
				'nombre' => $res[0]->nombres,
				'correo' => $res[0]->correo,
				'pass' => $res[0]->pass,
				'login' => TRUE
			);


			$this->session->set_userdata($data);
			
			redirect(base_url()."dashboard");
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
