<?php

class continente extends Modelo{
    public $nombre_tabla = 'continente';
    public $pk = 'idcontinente';
    
    
    public $atributos = array(
        'nombre'=>array(),
        
    );
    
    public $errores = array( );
    
    private $nombre;
   
       
    
    function continente(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->sube;
    } 

    public function set_nombre($nombre){

        $er = new Er();
        
        if ( !$er->valida_nombre($nombre) ){
            $this->errores[] = "Este nombre (".$nombre.") no es valido";
        }
        else{
            $this->nombre = trim($nombre);
        }
    }

}

?>
