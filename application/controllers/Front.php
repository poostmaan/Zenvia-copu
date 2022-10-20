<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Front Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Controllers
 * @category    Front
 * @author      Muhammad Haibah <inibah97@gmail.com>
 * @link        https://github.com/inibah97
 */
class Front extends CI_Controller
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
		$this->load->model([]);

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
				'title' => 'Front'
			],
			'user' => (array) $this->_user
		];

		$this->load->view('home/front.php', $data);
	} 

}
