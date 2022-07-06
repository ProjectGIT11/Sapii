<?php

class Proyectos_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get($id = null) {

        if (!is_null($id)) {
            $query = $this->db->select('*')->from('usuarios')->where('idusuarios', $id)->get();
            if ($query->num_rows() === 1) {
                return $query->row_array();
            }
            return null;
        }
        $query = $this->db->select('*')->from('usuarios')->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return null;
    }

    public function UsersProyect_get($id_user = null) {
        $sql = "SELECT * 
                FROM users 
                INNER JOIN model_has_roles 
                INNER JOIN roles
                ON roles.id=model_has_roles.role_id
                ON users.id = model_has_roles.model_id 
                WHERE users.id=" . $id_user;

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_assoc()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function Users_get($id = null) {
        $sql = "SELECT *
                FROM usuarios
                WHERE idusuarios=" . $id;

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_array()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function DetalleProyecto_get($id = null) {
        $sql = "SELECT *
                FROM registro
                WHERE idRegistro=" . $id;

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_array()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function ListaPVG_get() {
        $sql = "select g.nombre AS 'nombreUser', g.apellido, rf.idRegistro_full, rf.Codigo_Proyecto, e.nombre from gestoes_x_proyecto AS gxp
inner join registro_full AS rf
inner join gestores AS g
inner join estados AS e
on rf.idRegistro_full=gxp.registro_full_idRegistro_full and rf.estados_idestados = e.idestados and g.idGestores = gxp.gestores_idGestores";

//print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_array()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function save($user) {

        //print_r($user);die;
        $res = $this->db->set($this->_setUser($user))->insert('usuarios');
//print_r($res);die;
        if ($res > 0) {
            $data = $this->db->insert_id();
            print_r($data);
            die;
            //echo json_encode($data);
            //return ;
            //return true;
        } else {
            $data = 0;
            echo json_encode($data);
            //return false;
        }
    }

    private function _setUser($user) {
        return array(
            'nombre' => $user['nombre'],
            'direccion' => $user['direccion'],
            'telefono' => $user['telefono'],
            'email' => $user['email'],
            'edad' => $user['edad'],
            'tipo_doc' => $user['tipo_doc'],
            'documento' => $user['documento'],
            'fecha_nacimiento' => $user['fecha_nacimiento'],
            'roles_idroles' => $user['roles_idroles'],
            'perfil_idPerfil' => $user['perfil_idPerfil'],
            'dependencia_iddependencia' => $user['dependencia_iddependencia'],
            'gerarquico_idgerarquico' => $user['gerarquico_idgerarquico'],
            'avatar' => $user['avatar']
        );
    }

}
