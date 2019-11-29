<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Estudiante_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function _get_carrera()
  {
    $this->db->select('*');
    $read = $this->db->get('carrera');
    return $read->result();
  }

  function _get_estudiante()
  {

    $this->db->select('e.nombre as nom_est,e.apellido as ape_est,e.matricula,c.nombre as carrera,r.nombre as recinto,e.tanda');
    $this->db->from('estudiante as e');
    $this->db->join('carrera as c', 'c.id = e.carrera_id');
    $this->db->join('provincia as p', 'p.id = e.provincia_id');
    $this->db->join('recinto as r', 'r.id = e.recinto_id');
    $this->db->order_by("e.matricula", "ASC");
    $read = $this->db->get();
    return $read->result();
  }

  function _get_provincia()
  {
    $this->db->select('*');
    $read = $this->db->get('provincia');
    return $read->result();
  }

  function _get_recinto()
  {
    $this->db->select('*');
    $read = $this->db->get('recinto');
    return $read->result();
  }

  function _set_insert($data)
  {
    $this->db->trans_begin();

    $numero = self::_get_secuencia_matricula();
    if (empty($numero[0]->matricula)) {
      $num = date('y') . '-10001';
    } else {
      $num_ = explode('-', $numero[0]->matricula);
      $num = (intval($num_[1]) + 1);
    }

    $tabla = array(
      'matricula' => date('y') . '-' . $num,
      'nombre' => $data['nombre'],
      'apellido' => $data['apellido'],
      'cedula' => $data['cedula'],
      'sexo' => $data['sexo'],
      'provincia_id' => $data['provincia'],
      'recinto_id' => $data['recinto'],
      'carrera_id' => $data['carrera'],
      'tanda' => $data['tanda']
    );

    $this->db->insert('estudiante', $tabla);

    if ($this->db->trans_status() === false) {

      $this->db->trans_rollback();
      return 'false';
    } else {
      $this->db->trans_commit();
      return 'true';
    }
  }

  function _get_secuencia_matricula()
  {
    $this->db->select('matricula');
    $this->db->order_by("matricula", "desc");
    $this->db->limit(1);
    $read = $this->db->get('estudiante');
    return $read->result();
  }
}
