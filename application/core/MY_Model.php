<?php
class MY_Model extends CI_Model {
   public function __construct()
   {
      parent::__construct();
   }

   public function rowData($table, $name_id, $value_id)
   {
      $q = $this->db->get_where($table, array($name_id => $value_id));
      return $q->row();
   }

   public function allData($table, $data_where)
   {
       foreach($data_where as $column => $value)
       {
         $q = $this->db->where($column, $value);
       }
       return $q->get($table)->result();
   }

   public function validation_query()
   {
      if ($this->db->trans_status() === TRUE)
      {
         $this->db->trans_commit();
         $response = array("result" => true, "msg" => "");
      }
      else
      {
         $this->db->trans_rollback();
         $response = array("result" => false, "msg" =>  $this->db->_error_message());
      }
      return $response;
   }
}