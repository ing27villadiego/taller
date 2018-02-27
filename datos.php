<?php

  $dato1 = $_POST['dato1'];
  $dato2 = $_POST['dato2'];

  if ($dato2 == 1) {
    $dato3 = $dato1 / 1048576;

    $result = $dato3 / 700;

    echo "necesita :  " .$result ." CD";
  }

  if ($dato2 == 2) {
    $result = $dato1 / 1048576;
    echo "resultado es:  " .$result ;
  }

  if ($dato2 == 3) {
    $dato4 = $dato1 / 1024;
    $result = $dato4 / 700;
    echo "resultado es:  " .$result ." CD" ;
  }

  if ($dato2 == 4) {
    $result = $dato1 / 700;
    echo "necesita un " .$result . " CD ";
  }

  if ($dato2 == 5) {
    $result = $dato1 / 1048576;
    echo "resultado es:  " .$result ;
  }





 ?>
