<?php
class Directorio_model extends MY_Model {
	private $table = "directory";
	private $key_table = "id";

   public function __construct()
   {
      parent::__construct();
   }

   public function save($data)
   {
      $id = (int)$data[$this->key_table];
      $this->db->trans_begin();
      if( $id == 0 )
      {
         unset($data[$this->key_table]);
         $this->db->insert($this->table, $data);
      }
      else
      {
         $this->db->where($this->key_table, $data[$this->key_table]);
         $this->db->update($this->table, $data);
      }
      $response = $this->validation_query();
      return $response;
    }

   public function delete($key){
      $this->db->trans_begin();
      $this->db->where($this->key_table, $key);
      $this->db->delete($this->table);
      $response = $this->validation_query();
      return $response;
   }

   public function get($key){
      $row = $this->rowData($this->table, $this->key_table, $key);
      return $row;
   }

   public function grid()
   {
      $this->datatables->setSelect("apellidos, nombre, edad, direccion, telefono, id");
      $this->datatables->setFrom("directory");
      return $this->datatables->getData();
   }
}