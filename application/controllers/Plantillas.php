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
		$this->load->model(['Plantillas_model', 'Users_model']);

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

		$listaPlantillas = $this->Plantillas_model->getPlantillas();

		$data = [
			'page' => [
				'title' => 'Plantillas',
				'view' => 'pages/listaPlantilla.php',
				'listaPlantillas' => $listaPlantillas
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
		
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|is_unique[plantillas.nombre]');
		
		if( $this->form_validation->run() === false ) {     
			$this->load->view('plantillas', $data);  
		} else {
			$nombre = $this->input->post('nombre', true); 
			$mensaje = $this->input->post('mensaje', true);
			$tipo_mensaje = $this->input->post('tipo_mensaje', true);  
			$sender_id = $this->input->post('sender_id', true);

			$crearPlantilla = $this->Plantillas_model->insertPlantilla($nombre, $mensaje, $sender_id, $tipo_mensaje);  

			if ($crearPlantilla) {
                $this->session->set_flashdata('success_message', 'Plantilla creada');
                redirect('home'); 
            } else {
                $this->session->set_flashdata('error_message', 'Algo salio mal');
                redirect('plantillas/crear', 'refresh');
            }
		}
	}

	public function modificar() { 
		$id_plantilla = $_GET['id_plantilla']; 
		$plantilla = $this->Plantillas_model->getPlantilla($id_plantilla); 
		
		$data = [
			'page' => [
				'title' => 'Modificar Plantilla',
				'view' => 'pages/modificarPlantilla.php',
				'plantilla' => $plantilla
			],
			'user' => (array) $this->_user
		];

		$this->load->view('plantillas', $data);
	}

	public function eliminar() {
		$id_plantilla = $_GET['id_plantilla']; 
		$this->Plantillas_model->deletePlantilla($id_plantilla); 

		$this->session->set_flashdata('success_message', 'Plantilla eliminada');
        redirect('plantillas'); 
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
