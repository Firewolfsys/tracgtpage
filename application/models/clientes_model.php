<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class clientes_model extends CI_Model {


    /**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
  	parent::__construct();
		$this->load->database();
  }
    
 
  public function obtener_todos(){
      $this->db->select('*');
      $this->db->from('v_clientes');
      $consulta = $this->db->get();
      $resultado = $consulta->result();
      return $resultado;
  }
}