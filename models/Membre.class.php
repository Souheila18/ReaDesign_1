<?php

class Membre{

    private $_id_membre;
    private $_mdp;
    private $_email;
    private $_nom_client;


    public function __construct($_id_membre,$_nom_client,$_mdp,$_email){

    $this->_id_membre = $_id_membre;
    $this->_mdp =$_mdp;
    $this->_email =$_email;
    $this->_nom_client =$_nom_client;

    }

    public function id_membre(){
       return $this->_id_membre; 
    }

    public function mdp(){
        return $this->_mdp; 
     }

     public function email(){
        return $this->_email; 
     }

     public function nom_client(){
        return $this->_nom_client; 
     }
}

?>