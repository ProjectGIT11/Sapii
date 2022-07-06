<?php

class LoginServ_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function ConsultarUsuario_get($documento) {
        $sql = "SELECT *
                FROM users
                WHERE documento='" . $documento . "'";

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_assoc()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function Ingresar_get($username = null, $contra = null) {

        /*   if (!is_null($username) || !is_null($contra)) {
          $query = $this->db->select('*')->from('usuarios')->where('username', $username, 'clave', $contra)->get();

          if ($query->num_rows() === 1) {
          return $query->row_array();
          }
          return null;
          }

          return null; */
$contra='$2y$10$B5wpfH3OWG./MqY2viVhQOjy/hg.cBgh7Xu0Wv3jF9u3afP7zGqq.';

        $sql = "SELECT *
                FROM users
                WHERE email='" . $username . "' and password='" . $contra . "'";

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_assoc()) {
            //print_r($fila);die;
            return $fila;
        }
    }

}
