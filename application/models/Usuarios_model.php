<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function login($username, $password){

		$this->db->select('*');
		$this->db->where("usuario", $username);
		$this->db->where("pass", $password);
		$resultados = $this->db->get("usuario");

		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}
		else{
			return false;
		}
	}
}
