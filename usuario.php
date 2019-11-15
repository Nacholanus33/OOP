<?php

class Usuario{
    private $nombre;
    private $email;
    private $contrasenia;
    private $type;

    public function __construct($nombre, $mail, $contrasenia) {
        $this->nombre=$nombre;
        $this->mail=$mail;
        $this->setPass($contrasenia);
        
      }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre( $nombre ) {
        $this->nombre = $nombre;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail( $email ) {
        $this->Email = $email;
    }
    public function getContrasenia(){
        return $this->contrasenia;
     
    }
    public function setPass($contrasenia) {
        $this->contrasenia=$this->encriptarPass($contrasenia);
    }
    private function encriptarPass(string $pass) {
        return password_hash($pass, PASSWORD_DEFAULT);
    }
}
    









