<?php

class Equipo extends Modelo {

    public $nombre_tabla = 'equipo';
    public $pk = 'idequipo';
	
    public $atributos = array(
        'nombre'=>array(),
        'idpais'=>array(),
        'escudo'=>array(),
    );
    public $errores = array();
    private $nombre;
    private $idpais;
    private $escudo;

    function Equipo() {
        parent::Modelo();
    }

    public function get_atributos() {
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key] = $this->$key;
        }
        return $rs;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getIdpais() {
        return $this->idpais;
    }

    public function getEscudo() {
        return $this->escudo;
    }

    public function setNombre($nombre) {
        $er = new Er();
        if (!$er->valida_nombre($nombre)) {
            $this->errores[] = "Este nombre (" . $nombre . ") no es valido";
        }
        $this->nombre = trim($nombre);
    }

    public function setIdpais($idpais) {
        $this->idpais = trim($idpais);
    }

    public function setEscudo($escudo) {
        $this->escudo = trim($escudo);
    }

//    public function get_atributos(){
//        $rs = array();
//        foreach ($this->atributos as $key => $value) {
//            $rs[$key]=$this->$key;
//        }
//        return $rs;
//    }
//    
//    
//    public function get_nombre(){
//        return $this->sube;
//    } 
//
//    public function set_nombre($valor){
//
//        $er = new Er();
//        
//        if ( !$er->valida_email($valor) ){
//            $this->errores[] = "Este e-mail (".$valor.") no es valido";
//        }
//
//        $rs = $this->consulta_sql("select * from usuarios where email = '$valor'");
//        $rows = $rs->GetArray();
//        
//        if(count($rows) > 0){
//            $this->errores[] = "Este e-mail (".$valor.") ya esta registrado"; 
//        }else{
//            $this->email = trim($valor);
//        }
//    }
//
//    public function get_password(){
//        return $this->baja;
//    }
//    
//    public function set_password($valor){
//        $this->password = trim( md5($valor) );
//    }
//    
}

?>
