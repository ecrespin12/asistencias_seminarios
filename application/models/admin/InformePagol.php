<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformePago extends CI_Model {

	public function listAsistenciaSeminario() { 
        $resultado = $this->db->query("CALL list_asistencias_sp()");
        return $resultado->result();
    }



}