<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantencion_model extends CI_Model {
    //completar con atributos de formularios
    private $_columns = array(
		'id'          => null,
		'emp_id'          => 0,
		'date'          => '',
		'status'          => 0,
	);
	protected static $_table = 'mype_mantencion';
	protected static $_id    = 'id';
	public static    $status    = array('Inactivo','Activo');

	public function __construct() {
		parent::__construct();
		//Do your magic here
	}
	public function findAll($where = array()) {
		$this->load->database();
			
		$result = array();
		$res    = $this->db->get_where(self::$_table, $where);
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
    }
    public function findAllLimit($limit = 0) {
		
		$result = array();
		$this->db->limit($limit);
		$this->db->order_by('date', 'desc');
		$res    = $this->db->get_where(self::$_table);
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$result[] = $this->create($value);
			}
		}
		return $result;
	}
	public function getRequired() {
		$requiredFields = array(
                    'date','emp_id','status'
		);
		return $requiredFields;
	}
	public function validate() {
		
		$emptyCollumn = array();
		foreach ($this->_columns as $key => $value) {
			if (empty(str_replace(' ', "", $value)) && in_array($key, $this->getRequired())) {
				$emptyCollumn[] = $key;
			}
		}
		return $emptyCollumn;
	}
	public function isNew() {
		return $this->_columns['id'] == 0 ||  is_null($this->_columns['id']) ;
	}
	public function getStatus() {
		return self::$status[$this->_columns['status']];
	}

	public function setColumns($row = array()) {
		foreach ($row as $key => $value) {
			if(isset($this->_columns[$key])){
				$this->_columns[$key] = $value;
			}

		}
	}
	public function set($key, $value) {
		$this->_columns[$key] = $value;
	}
	public function findById($id = null) {
		$id = intval($id);
	
		$res    = $this->db->get_where(self::$_table, array(''.self::$_id.'' => $id));
		$result = null;
		if ($res->num_rows() == 1) {
			$result = $this->create($res->row_object());
		}
		return $result;
	}
	public function get($attr) {
		return $this->_columns[$attr];
	}

	public function create($row) {
		$mantencion = new Mantencion_model();
		$mantencion->setColumns($row);
		return $mantencion;
	}

	public function save() {
		try {
			
			if ($this->_columns['id'] == 0 || is_null($this->_columns['id'])) {
				$this->db->insert(self::$_table, $this->_columns);
				//$this->_columns['id'] = $this->db->insert_id();
			} else {
				$this->db->where('id', $this->_columns['id']);
				$this->db->update(self::$_table, $this->_columns);
			}
		} catch (Exception $e) {
			echo "se produjo una excepcion del tipo".$e->getMessage();
		}
	}

	public function toArray() {
		return get_object_vars($this);
	}
	

}

/* End of file Travel_model.php */
/* Location: ./application/models/Travel_model.php */