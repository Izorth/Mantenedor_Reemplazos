<?php
class model_gente extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	function get_gente(){
		$this->db->select('datos_personales.Nombre as nombre_dp, datos_personales.Apellido_Paterno, datos_personales.Apellido_Materno, datos_personales.Edad, datos_personales.Telefono, reemplazo.ID_datos_personales, reemplazo.ID_centro_costo, reemplazo.ID_evaluacion, evaluacion.tipo_evaluacion');
		$this->db->from('datos_personales');
		$this->db->join('reemplazo', 'reemplazo.ID_datos_personales = datos_personales.ID');
		$this->db->join('evaluacion', 'evaluacion.ID_evaluacion = reemplazo.ID_evaluacion');
		$query = $this->db->get();
  		return $query->result();
	}
}
?>
