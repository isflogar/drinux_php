<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

function include_action_script()
{
  $ci = & get_instance();
  $class = $ci->router->fetch_class();
  $action = $ci->router->fetch_method();
  $relative_path = 'assets/dist/js/' . $class . '/' . $action . '.js';
  if (file_exists(FCPATH . $relative_path))
  {
   echo '<script type = "text/javascript" src ="' . base_url($relative_path . '?time=' . time()) . '"></script>';
  }
}

function create_flash_message($type, $message)
{
  $ci = & get_instance();
  $ci->session->set_flashdata('data_message', array(
   'message' => $message,
   'type' => $type));
}

function show_flash_message()
{
  $ci = & get_instance();
  $data_message = $ci->session->flashdata('data_message');
  $ci->session->unset_userdata('data_message');
  return $data_message;
}

function set_date_format($date_db)
{
  $date_list = explode("-", $date_db);
  $new_date = $date_list[2]."/".$date_list[1]."/".$date_list[0];
  return $new_date;
}

function debug_r($array){
  echo "<pre>";
  print_r($array);
  die;
}
