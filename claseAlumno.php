<?php

//definimos la clase
class claseAlumno
{
//atributos
  public $nombre="";
  public $edad="";
  public $curso="";
  public $ciclo="";

//getters
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getEdad()
  {
    return $this->edad;
  }
  public function getCurso()
  {
    return $this->curso;
  }
  public function getCiclo()
  {
    return $this->ciclo;
  }

//setters
  public function setNombre($nombre)
  {
    $this->nombre=$nombre;
  }
  public function setEdad($edad)
  {
    if ($edad>=18) {
      echo "<br>El alumno tiene= 18 o más";
    }
    elseif ($edad<18) {
      echo "<br>El alumno tiene= menos de 18";
    }
  }
  public function setCurso($curso)
  {

    if ($curso==1){
      echo "<br>Curso= 1";
    }
    elseif ($curso==2){
      echo "<br>Curso= 2";
    }
    elseif ($curso>2){
      echo "<br>Curso= 1";
    }
  }
  public function setCiclo($ciclo)
  {
    $this->ciclo=$ciclo;
  }
}

 ?>
