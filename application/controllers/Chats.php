<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Chats Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Controllers
 * @category    Chats
 * @author      Muhammad Haibah <inibah97@gmail.com>
 * @link        https://github.com/inibah97
 */
class Chats extends CI_Controller
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
                'title' => 'Login'
            ]
        ];

        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(500)
            ->set_output(json_encode(array(
                    'text' => 'Error 500',
                    'type' => 'danger'
            )));
  
    }


}
