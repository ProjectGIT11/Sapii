<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
include_once APPPATH . '/libraries/REST_Controller.php';
/* Heredamos de la clase CI_Controller */

class Usuarios extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuarios_model');
    }

    public function index_get() {
        $user = $this->Usuarios_model->get();

        if (!is_null($user)) {
            $this->response(array('response' => $user), 200);
        } else {
            $this->response(array('error' => 'No hay Noticias para Mostrar....'), 404);
        }
    }

    public function BucarUser_get($id) {
        if (!$id) {
            $this->response(null, 400);
        }
        $user = $this->Usuarios_model->Users_get($id);
        if (!is_null($user)) {
            $this->response(array('response' => $user), 200);
        } else {
            $this->response(array('error' => 'Nada'), 404);
        }
    }

    public function find_get($id) {
        if (!$id) {
            $this->response(null, 400);
        }
        $user = $this->Usuarios_model->get($id);
        if (!is_null($user)) {
            $this->response(array('response' => $user), 200);
        } else {
            $this->response(array('error' => 'Nada'), 404);
        }
    }

    public function find_perfil_get($id) {
        if (!$id) {
            $this->response(null, 400);
        }
        $user = $this->Usuarios_model->Perfil_get($id);
        if (!is_null($user)) {
            $this->response(array('response' => $user), 200);
        } else {
            $this->response(array('error' => 'Nada'), 404);
        }
    }

    public function UserxEmpresa_get($id) {
        if (!$id) {
            $this->response(null, 400);
        }
        $user = $this->Usuarios_model->UsersxEmpresa_get($id);
        if (!is_null($user)) {
            $this->response(array('response' => $user), 200);
        } else {
            $this->response(array('error' => 'Nada'), 404);
        }
    }
    
    public function UserxEmpresaCoach_get($id) {
        if (!$id) {
            $this->response(null, 400);
        }
        $user = $this->Usuarios_model->UsersxEmpresaCoach_get($id);
        if (!is_null($user)) {
            $this->response(array('response' => $user), 200);
        } else {
            $this->response(array('error' => 'Nada'), 404);
        }
    }

    public function guardar_get() {
        //$id = $_GET['Registrar_user_model'];
        $id = $this->Usuarios_model->save($this->get());
        //print($od);
    }

    public function index_put() {
        if (!$this->put('noticias')) {
            $this->response(null, 400);
        }
        $update = $this->Usuarios_model->update($this->put('user'));
        if (!is_null($update)) {
            $this->response(array('response' => 'Noticia actualizada!'), 200);
        } else {
            $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
        }
    }

    public function index_delete($id) {
        if (!$id) {
            $this->response(null, 400);
        }
        $delete = $this->Usuarios_model->delete($id);
        if (!is_null($delete)) {
            $this->response(array('response' => 'Noticia eliminada!'), 200);
        } else {
            $this->response(array('error', 'Algo se ha roto en el servidor...'), 400);
        }
    }

    //Serviciso que actualiza la tabla Usuarios
    public function ServicioPSO_get($cedula) {
        if (!$cedula) {
            $this->response(null, 400);
        }
        $user = $this->Usuarios_model->ActualizarUser_get($cedula);
        print_r($user);die;
        if (!is_null($user)) {
            $this->response(array('response' => $user), 200);
        } else {
            $this->response(array('error'=>'No se puede Actualizar los usuarios'), 400);
        }
    }
    
    public function ServicioDemograPSO_get($cedula) {
        if (!$cedula) {
            $this->response(null, 400);
        }
        $user = $this->Usuarios_model->CargarDenmograUser_get($cedula);
        print_r($user);die;
        if (!is_null($user)) {
            $this->response(array('response' => $user), 200);
        } else {
            $this->response(array('error'=>'No se puede Actualizar los usuarios'), 400);
        }
    }

}
