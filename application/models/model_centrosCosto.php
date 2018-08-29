<?php
class model_centrosCosto extends CI_Model{
	function __construct(){
		$this->load->database();
	}

	function get_centrosCostos(){
		$this->db->select('Centro_de_Costo.nombre as nombre_ccosto,Centro_de_Costo.codigo,Centro_de_Costo.id_area,Area.nombre');
		$this->db->from('Centro_de_Costo');
		$this->db->join('Area', 'Area.id = Centro_de_Costo.id_area');
		$query = $this->db->get();
  		return $query->result();
	}
}
?>

