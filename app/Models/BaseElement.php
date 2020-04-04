<?php
namespace App\Models;

require 'Printable.php';

class BaseElement implements Printable{
    private $title;
    private $descripcion;
    private $visible;
    private $months;

    public function __construct($title, $descripcion, $visible, $months)
    {
      $this-> setTitle($title);// valida el parametro en el condicional de la función
      $this->descripcion = $descripcion;
      $this->visible = $visible;
      $this->months = $months;    
    }

    public function getTitle(){
        return $this->title;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getVisible(){
        return $this->visible;
    }
    public function getMonths(){
        return $this->months;
    }

    public function setTitle($t){
      if($t ==''){
        $this->title = 'N/A';
      }else{
        $this->title = $t;
      }        
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    public function setVisble($visible){
        $this->visible = $visible;
    }
    public function setMonths($months){
        $this->months = $months;
    }

 //Funciones
  
public function getDurationAsString(){
  $year = floor($this->months / 12);
  $extraMonths = $this->months % 12;

  if($year == 0){
    return "$extraMonths months";    
  }
  if($year >= 1 && $this->months >= 1){
    return "$year years $extraMonths months";
  }
}

//@override function implementada
public function getDescription()
    {
        return $this->getDescripcion();
    }
}

