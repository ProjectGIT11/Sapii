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

    public function FuenteNodoUser_get($id = null) {
        $sql = "SELECT * FROM user_nodo WHERE user_id =" . $id;

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_assoc()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function ProyectoXNodo_get($id_nodo = null) {
        $sql = "SELECT act.id, act.codigo_actividad ,apbt.nombre , act.nombre,  apbt.entidad, apbt.objetivo, apbt.nombre_contacto, apbt.fecha_inicio, apbt.fecha_cierre  FROM articulacion_pbts as apbt
                INNER JOIN actividades AS act
                ON apbt.actividad_id=act.id
                WHERE apbt.nodo_id=" . $id_nodo;

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_all()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function ProyectoxIdAct_get($id = null) {
        $sql = "SELECT * FROM actividades WHERE id=" . $id;

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_assoc()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function ProyectoxCodProd_get($id = null) {
        $sql = "SELECT act.id, act.codigo_actividad , act.nombre FROM articulacion_pbts as apbt
                INNER JOIN actividades AS act
                ON apbt.actividad_id=act.id
                WHERE act.codigo_actividad='" . $id . "'";

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_assoc()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function ProyectoArt_Pbt_get($codigo) {
        $sql = "SELECT * FROM articulacion_pbts WHERE codigo='" . $codigo . "'";

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_assoc()) {
            //print_r($fila);die;
            return $fila;
        }
    }

    public function ProyectoArt_Pbt_Tlnt_get($id) {
        $sql = "SELECT * from articulaciones_pbt_talento WHERE articulacion_pbt_id=" . $id . " AND talento_lider=1";

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_assoc()) {
            //print_r($fila);die;
            return $fila;
        }
    }
    
    public function ProyectoUser_Consult_get($id){
        $sql = "SELECT * FROM talentos WHERE id=".$id;

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_assoc()) {
            //print_r($fila);die;
            return $fila;
        }
    }
    
    public function ProyectoUser_talentos_Consult_get($id){
        $sql = "SELECT * FROM users WHERE id=".$id;

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_assoc()) {
            //print_r($fila);die;
            return $fila;
        }
    }
    
    public function ProyectoUser_Empresa_get($id){
        $sql = "SELECT * FROM empresas WHERE user_id=".$id;

        //print_r($sql);die;
        $query = $this->db->query($sql);
        //print_r($query);
        while ($fila = $query->result_id->fetch_assoc()) {
            //print_r($fila);die;
            return $fila;
        }
    }
    
    
    
    public function ProyectoUser_TipoDoc_get($id){
        $sql = "SELECT * FROM tiposdocumentos WHERE id=".$id;

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
