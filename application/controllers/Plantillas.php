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
		$this->load->library(['session']);

		// Load the helpers
		$this->load->helper(['url']);

		// Load the models
		$this->load->model(['Users_model']);

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
				'title' => 'Plantillas',
				'view' => 'pages/listaPlantilla.php'
			],
			'user' => (array) $this->_user
		];

		$this->load->view('plantillas', $data);
	}

	public function crear() {
		$data = [
			'page' => [
				'title' => 'Crear Plantilla',
				'view' => 'pages/crearPlantilla.php'
			],
			'user' => (array) $this->_user
		];

		$this->load->view('plantillas', $data);
	}

	public function modificar() { 
		$data = [
			'page' => [
				'title' => 'Modificar Plantilla',
				'view' => 'pages/modificarPlantilla.php'
			],
			'user' => (array) $this->_user
		];

		$this->load->view('plantillas', $data);
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
