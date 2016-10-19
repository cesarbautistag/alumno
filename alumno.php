<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alumno</title>
  </head>
  <body>
    <?php
    //incluimos la clase anteriormente creada
    include "claseAlumno.php";
    //generamos los objetos

    $alumno1=new claseAlumno();
      $alumno1->setNombre("Cesar");
      echo "Nombre del alumno= ".$alumno1->getNombre();

      $alumno1->setEdad(18);

      $alumno1->setCurso(2);


      $alumno1->setCiclo("DAW");
      echo "<br>Ciclo del alumno= ".$alumno1->getCiclo();
     ?>
  </body>
</html>
