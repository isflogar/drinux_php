<?php

class MY_Controller extends CI_Controller
{
   public $base_url;
   public $base_url_public_js;
   public $base_url_public_css;
   public $base_url_public_lib;
   public $lib_css;
   public $lib_js;
   public $putCss = array();
   public $putJS = array();
   public $messages = array("success"=>"", "warning"=>"", "error"=>"");
   public $response = array("result"=>false, "msg"=>"", "data"=>"");
   public $nombre_modulo;
   public $title = TITLE_SYSTEM;

   //variables user and login;
   public $user_name, $user_perfil, $user_id;

   public function __construct()
   {
      parent::__construct();
      //urls
      $this->base_url = base_url();
      $this->base_url_public_js = $this->base_url."public/js/";
      $this->base_url_public_css = $this->base_url."public/css/";
      $this->base_url_public_lib = $this->base_url."public/lib/";
      $this->lib_css = array();
      $this->lib_js = array();
   }

   public function addLibJs($lib)
   {
      $this->putJS[] = $this->base_url_public_lib.$lib;
   }

   public function addJs($lib)
   {
      $this->putJS[] = $this->base_url_public_js.$lib;
   }

   public function addLibCss($lib)
   {
      $this->putCss[] = $this->base_url_public_lib.$lib;
   }

   public function addCss($lib)
   {
      $this->putCss[] = $this->base_url_public_css.$lib;
   }

   public function join_library()
   {
      foreach ($this->putCss as $key => $value)
      {
         $this->lib_css[] = $value;
      }

      foreach ($this->putJS as $key => $value)
      {
         $this->lib_js[] = $value;
      }
   }

   public function getTemplate($title = '', $view, $var = '', $modal=''){
      $this->join_library();

      $this->title = ( empty($title) ) ? $this->title : $this->title .= " | ".$title;
      $this->nombre_modulo = $title;

         $this->load->view("head_admin", array(
            "title"=>$this->title,
            "nombre_modulo"=>$this->nombre_modulo,
            "lib_css" => $this->lib_css,
            "menu" => array(),
            "fullname_usu" => "DRINUX"
         ));
         $alerta = show_flash_message();
         $this->load->view($view, $var);
         $this->load->view("footer_admin", array(
            "lib_js"=>$this->lib_js,
            "modal"=>$modal,
            "alerta" => $alerta
         ));
   }
}