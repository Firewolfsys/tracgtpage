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
				$_SESSION['user_id']        = (int)$user->id;
				$_SESSION['username']       = (string)$user->username;
				$_SESSION['logged_in']      = (bool)true;
				$_SESSION['is_confirmed']   = (bool)$user->is_confirmed;
				$_SESSION['is_admin']       = (bool)$user->is_admin;
				// user login ok
				redirect(base_url());
				
			} else {
				
				// login failed
				$data->error = 'Usuario o Contraseña invalido.';
				
				// send error to the view
				$this->load->view('login/header');
				$this->load->view('login/login', $data);
				$this->load->view('login/footer');
				
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
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			
			redirect(base_url());
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
			
		}
		
	}
	
}
