<?php

class Revista extends Modelo{

    public $nombre_tabla = 'revista';
    public $pk = 'id_revista';
    
    
    public $atributos = array(
        
        'nombre'=>array(),
        'portada'=>array(),
        'fecha'=>array(),
        'volumen'=>array(),
        'titulo'=>array(),
        'subtitulo'=>array(),
        'numero'=>array(),
        'clave'=>array(),
        'directorio'=>array(),
        'editorial'=>array(),
        'id_status'=>array()

    );
    
    public $errores = array( );
    
    private $nombre;
    private $portada;
    private $fecha;
    private $volumen;
    private $titulo;
    private $subtitulo;
    private $numero;
    private $clave;
    private $directorio;
    private $editorial;
    private $id_status;
    
    function Revista(){
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

        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er=new ER();
        if(!$er->valida_nombre($valor)){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
            
        }

            $this->nombre = trim($valor);
        
    }

    public function get_portada(){

        return $this->portada;
    } 

    public function set_portada($valor){

        /*$er=new ER();
        if(!$er->valida_nombre($valor)){
            $this->errores[] = "Este apellido (".$valor.") no es valido";
            
        }*/

            $this->portada = trim($valor);
        
    }

    public function get_fecha(){

        return $this->fecha;
    } 

    public function set_fecha($valor){

        $er=new ER();
        if($er->valida_fecha($valor)){
            $this->errores[] = "Este fecha (".$valor.") no es valido";
            
        }

            $this->fecha = trim($valor);
        
    }

    public function get_volumen(){

        return $this->volumen;
    } 

    public function set_volumen($valor){

        /*$er=new ER();
        if(!$er->valida_fecha($valor)){
            $this->errores[] = "Este fecha (".$valor.") no es valido";
            
        }*/

            $this->volumen = trim($valor);
    }

    public function get_titulo(){

        return $this->titulo;
    } 

    public function set_titulo($valor){

        /*$er=new ER();
        if(!$er->valida_fecha($valor)){
            $this->errores[] = "Este fecha (".$valor.") no es valido";
            
        }*/

            $this->titulo = trim($valor);
        
    }

    public function get_subtitulo(){

        return $this->subtitulo;
    } 

    public function set_subtitulo($valor){

        /*$er=new ER();
        if(!$er->valida_fecha($valor)){
            $this->errores[] = "Este fecha (".$valor.") no es valido";
            
        }*/

            $this->subtitulo = trim($valor);
        
    }

    public function get_numero(){

        return $this->numero;
    } 

    public function set_numero($valor){

        $er=new ER();
        if(!$er->valida_numericos($valor)){
            $this->errores[] = "Este numero (".$valor.") no es valido";
            
        }

            $this->numero = trim($valor);
        
    }

    public function get_clave(){

        return $this->clave;
    } 

    public function set_clave($valor){

        $er=new ER();
        if(!$er->valida_alfanumericos($valor)){
            $this->errores[] = "Este clave (".$valor.") no es valido";
            
        }

            $this->clave = trim($valor);
        
    }

    public function get_directorio(){

        return $this->directorio;
    } 

    public function set_directorio($valor){

        /*$er=new ER();
        if(!$er->valida_alfanumericos($valor)){
            $this->errores[] = "Este clave (".$valor.") no es valido";
            
        }*/

            $this->directorio = trim($valor);
        
    }

    public function get_editorial(){

        return $this->editorial;
    } 

    public function set_editorial($valor){

        /*$er=new ER();
        if(!$er->valida_alfanumericos($valor)){
            $this->errores[] = "Este clave (".$valor.") no es valido";
            
        }*/

            $this->editorial = trim($valor);
        
    }

    public function get_id_status(){

        return $this->id_status;
    } 

    public function set_id_status($valor){

        $er=new ER();
        if(!$er->valida_numericos($valor)){
            $this->errores[] = "Este clave (".$valor.") no es valido";
            
        }

            $this->id_status = trim($valor);
        
    }
    
}

?>
