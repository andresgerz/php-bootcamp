<?php
/* 
  3. Escribir un programa que dado dos números enteros, devuelva TRUE si alguno de los números es 30, así como también cuando la suma de los mismos sea 30 o más. 
 */



$arr1 = Array(30, 15, 30, 1, 30);
$arr2 = Array(1, 15, 50, 0, 30);


for ($i = 0; $i < count($arr1); $i++) {

  $nros = '(' . $arr1[$i] . ', ' . $arr2[$i] . ')';
  $nrosIgual30 = $arr1[$i] === 30 || $arr2[$i] === 30;
  $sumaIgual30 = $arr1[$i] + $arr2[$i] === 30;

  echo $nrosIgual30 ? $nros . ' -> número/-s son igual a 30 ' . '<br>':'';

  echo $sumaIgual30 ? $nros . ' -> La suma es 30 ó más' . '<br>': '';
}