<?php

class Previewshop extends Controller
{

   public function index()
   {
      $this->render('index');
   }
   public function produitDetails()
   {
      $arrayUri = explode('?', $_SERVER['REQUEST_URI']);
      parse_str($arrayUri[1], $output);

      $this->render('produitDetails', ["data" => $output]);
   }
   public function chaise1()
   {
      $this->render('chaise1');
   }
   public function armoir()
   {
      $this->render('armoir');
   }
   public function chaise2()
   {
      $this->render('chaise2');
   }

}