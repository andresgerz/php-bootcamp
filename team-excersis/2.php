<?php
/* 
Ejercicio 2: Guerra del Alfabeto
Tarea
Escribe una función que acepte “cadenas de pelea” que consta solo de letras minúsculas y
devuelve quién gana la pelea. Cuando el lado izquierdo gana, regresa ¡El lado izquierdo gana!,
cuando el lado derecho gana, regresa ¡El lado derecho gana!, en otro caso, regresa ¡Luchemos
de nuevo! 

*/

function gerraAlfabeto() {

  switch($x) {
  
    case 'w' || 'm';
      return 4;
  
    case 'p' || 'q';
      return 3;
  
    case 'b' || 'd';
      return 2;
  
    case 's' || 'z';
      return 1;
  
    default;
      return 0;
  }
}