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

    public function obtener_cliente_id($id_cliente){
      $this->db->select('*');
      $this->db->from('clientes');
      $this->db->where('id_cliente', $id_cliente);
      $consultacliente = $this->db->get();
      $resultadocliente = $consultacliente->row();
      return $resultadocliente;
  }
}