<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Mensajes Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Controllers
 * @category    Mensajes
 * @author      Muhammad Haibah <inibah97@gmail.com>
 * @link        https://github.com/inibah97
 */
class Mensajes extends CI_Controller
{
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
        $this->load->library([]);

        // Load the helpers
        $this->load->helper(['url', 'string', 'cookie']);

        // Load the models
        $this->load->model([]);
    }

    /**
     * Login - Default for this controller
     * 
     * @return void
     */
    public function index()
    {

        $data = [
            'page' => [
                'title' => 'Mensajes'
            ] 
        ];

  
    }


}
