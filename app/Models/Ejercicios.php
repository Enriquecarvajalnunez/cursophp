<?php

//Impresión del arreglo

for ($i = 0; $i < count($jobs); $i++) {
  echo '<h5>' . $jobs[$i]->getTitle(). '</h5>';
}

//var_dump($jobs[0]);

//Ejercicios arreglos
$arreglo = [
  'keyStr1' => 'lado',
  0 => 'ledo',

  'keyStr2' => 'lido',
  1 => 'lodo',
  2 => 'ludo'
];

//imprimir arreglor

foreach ($arreglo as $val) {
  echo $val . ',';
}
echo '<br>decirlo al reves lo dudo</br>';

foreach (array_reverse($arreglo) as $val) {
  echo $val . ',';
}

//var_dump($arreglo['keyStr1']);
//echo $arreglo['keyStr1'];
//echo $arreglo[0];

//ejercicio 2

$paises = [
  'Colombia' => ['Cali', 'Bogota', 'santander'],
  'Mexico' => ['Monterrey', 'la paz', 'queretano'],
  'Usa' => ['Florida', 'california', 'virginia'],
  'Alemania' => ['Luxemburgo', 'corumba', 'Rio'],
  'Peru' => ['Lima', 'sao paulo', 'carolina del norte']
];

foreach ($paises as $key => $value) {
  echo '<strong>' . $key . '</strong>:';
  foreach ($value as $element) {
    echo ' ' . $element;
  }
  echo '<br>';
}

//Ejercicios Operadores
/*
Ejercicio 1.
Calcula el resultado de 32+3 y 3(2+3). Escribe el procedimiento que empleaste en la sección de discusiones.
*/

$a = 32;
$b = 3;
$c = 2;

echo $a + $b . '<br>';
echo $b * ($c + $b);
echo '<br>';


//Ejercicio 2

$valor = 'cadena';

if ($valor > 5 && $valor < 10) {
  echo 'el valor es mayor a 5 y menor a 10' . '<br>';
} else {
  if ($valor >= 0 && $valor <= 20) {
    echo 'El valor es mayor o igual a cero y menor o igual a 20' . '<br>';
  } else {
    if (is_string($valor)) {
      echo 'El valor es de tipo cadena' . '<br>';
    }
  }
}

?>