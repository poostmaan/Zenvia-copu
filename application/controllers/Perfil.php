<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Plantillas Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Controllers
 * @category    Plantillas
 * @author      Muhammad Haibah <inibah97@gmail.com>
 * @link        https://github.com/inibah97
 */
class Plantillas extends CI_Controller
{
	/**
	 * User data
	 * 
	 * @var object
	 */
	private $_user;

	/**
	 * Construct functions
	 * 
	 * @return void
	 */
	public function __construct()
	{
		// Load the parent construct
		parent::__construct();

		// Load the libraries
		$this->load->library(['session', 'form_validation']);

		// Load the helpers
		$this->load->helper(['url','string','cookie']); 

		// Load the models
		$this->load->model([]);

		// Check session
		$this->checkSession();

		// Get user data from resource by session 
		$this->_user = $this->Users_model->getUserByField([
			'username' => $this->session->username
		], true);
	}

	/**
	 * Default for this controller.
	 *
	 * @return void
	 */
	public function index()
	{

		$data = [
			'page' => [
				'title' => 'Perfil',
				'view' => 'perfil/Perfil.php',
			],
			'user' => (array) $this->_user
		];

		$this->load->view('perfil', $data); 
	}

	/**
	 * Check Session
	 * 
	 * @return void
	 */
	private function checkSession()
	{
		if (!$this->session->has_userdata('username')) {
			redirect('login');
			die;
		}
	}
}
