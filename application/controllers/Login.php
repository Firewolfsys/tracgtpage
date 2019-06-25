<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Login class.
 * 
 * @extends CI_Controller
 */
class Login extends CI_Controller {

	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->model('login_model');
		
	}
	public function index() {
	}
	
	/**
	 * register function.
	 * 
	 * @access public
	 * @return void
	 */

	/**
	 * login function.
	 * 
	 * @access public
	 * @return void
	 */
	public function login() {
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->login_model->resolve_user_login($username, $password)) {
				$user_id = $this->login_model->get_user_id_from_username($username);
				$user    = $this->login_model->get_user($user_id);
				// set session user datas
				$_SESSION['user_id_web']        = (int)$user->id;
				$_SESSION['username_web']       = (string)$user->username;
				$_SESSION['logged_in_web']      = (bool)true;
				// user login ok
				//redirect(base_url());
				$this->datos['claseresultado'] = "success";
        		$this->datos['resultado'] = "Bienvenido ".$_SESSION['username_web'] ;
        		$this->load->view('main/header',$this->datos);
		        $this->load->view('main/principal');
		        $this->load->view('main/footer');
				
			} else {
				// login failed
				$this->datos['claseresultado'] = "danger";
        		$this->datos['resultado'] = "Usuario o Contraseña incorrecto.!";
        		$this->load->view('main/header',$this->datos);
		        $this->load->view('main/principal');
		        $this->load->view('main/footer');
				
			}
		
	}
	
	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		
		// create the data object
		$data = new stdClass();
		$usuario = $_SESSION['username_web'];
		if (isset($_SESSION['logged_in_web']) && $_SESSION['logged_in_web'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			//redirect(base_url());
			$this->datos['claseresultado'] = "info";
        	$this->datos['resultado'] = "Feliz dia ". $usuario;
        	$this->load->view('main/header',$this->datos);
		    $this->load->view('main/principal');
		    $this->load->view('main/footer');
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}
	
}
