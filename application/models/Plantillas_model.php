<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Plantillas Model Class
 *
 * @package     CodeIgniter Simple Login
 * @subpackage  Models
 * @category    Plantillas
 * @author      Muhammad Haibah <inibah97@gmail.com>
 * @link        https://github.com/inibah97 Thanks you
 */
class Plantillas_model extends CI_Model
{
    /**
     * The table used in this model
     * 
     * @var array
     */
    private $_table = [
        'plantillas'
    ];

    /**
     * Construct functions
     * 
     * @return void
     */
    public function __construct()
    {
        // Load the parent construct
        parent::__construct();

        // Load the database libraries
        $this->load->database();
    }

    public function getPlantilla($id_plantilla) {
        $this->db->where('id_plantilla', $id_plantilla);
        return $this->db->get($this->_table[0])->result();    
        
    }

    public function getPlantillas() {
        return $this->db->get($this->_table[0])->result(); 
    }

    /**
     * Insert new plantilla to resources
     * 
     * @param  string $username
     * @param  string $password
     * @param  array  $options
     * @return int              database affected rows
     */
    public function insertPlantilla(
        $nombre, 
        $mensaje,
        $sender_id,
        $tipo_mensaje, 
        // $options = [] 
    ) {
        $insert = [ 
            'id_plantilla' => $this->guidv4(),  
            'nombre' => $nombre,
            'sender_id' => $sender_id,
            'mensaje' => $mensaje, 
            'tipo_mensaje' => $tipo_mensaje, 
            'fecha_creacion' => date('Y-m-d H:i:s'),
            'fecha_modificacion' => date('Y-m-d H:i:s'),
        ];

        // foreach ($options as $key => $value) { 
        //     $insert[$key] = $value;
        // }

        $this->db->insert($this->_table[0], $insert);
        return $this->db->affected_rows();
    }

    public function deletePlantilla($id_plantilla) {
        $this->db->where('id_plantilla', $id_plantilla);
        $this->db->delete($this->_table[0]);   
    }

    /**
     * Update user by specific data
     * 
     * @param  int   $id   USERS.ID
     * @param  array $data
     * @return int         Database affected rows
     */
    public function updateUser($id, $data)
    {
        $update = [
            'updated_at' => time()
        ];

        foreach ($data as $key => $value) {
            $update[$key] = $value;
        }

        $this->db->set($update);
        $this->db->where('id', $id);
        $this->db->update($this->_table[0]);
        return $this->db->affected_rows();
    }
}
