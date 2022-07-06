<?php

class Procesos_model extends CI_Model {

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

    public function ListaProyect_get() {
        $sql = "SELECT  e.nombre,rf.idRegistro_full, u.nombre, u.email, rf.Codigo_Proyecto, r.idRegistro, rf.estados_idestados
FROM registro_full AS rf
INNER JOIN usuarios AS u
INNER JOIN registro AS r
INNER JOIN estados AS e
on u.idUsuarios=rf.usuarios_idUsuarios and rf.estados_idestados=e.idestados and rf.registro_idRegistro = r.idRegistro
";

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_all()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function DataGestor_get($id = null) {
        $sql = "SELECT *
                FROM gestores
                WHERE idGestores=" . $id;

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_array()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function ListaGestores_get($id = null) {
        $sql = "SELECT *
                FROM gestores
                WHERE rol_idRol=" . $id;

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_array()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function ListaEstados_get() {
        $sql = "SELECT *
                FROM estados";

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_array()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function EditarRegEstados_get() {

        $id = $_GET['id'];
        $registro = $_GET['registro'];
        $gestor = $_GET['gestor'];
        $full = $_GET['Re_full'];

        $sql = "UPDATE `registro_full` SET `estados_idestados`=$id WHERE registro_idRegistro=$registro";
        
        $sql2 = "INSERT INTO `gestoes_x_proyecto` VALUES (null,$full,$gestor)";

        //print_r($sql2);die;
        $query = $this->db->query($sql);
        
        $query = $this->db->query($sql2);

        return 1;
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

    public function guardar($id, $nombre, $apellido, $documento, $email) {

        $sql = "UPDATE gestores SET nombre='$nombre',apellido='$apellido',documento=$documento,email='$email' WHERE idGestores=$id";

        //print_r($sql);die;
        $query = $this->db->query($sql);

        return 1;
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

    private function _setGestors($gestors) {
        return array(
            'nombre' => $gestors['nombre'],
            'apellido' => $gestors['apellido'],
            'documento' => $gestors['documento'],
            'email' => $gestors['email']
        );
    }

}
