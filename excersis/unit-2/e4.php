<?php

/* 
4. Escribir un programa que dado un animal, devuelva los siguientes valores:
		Perro = Perruno
		Gato = Felino
		Caballo = Salvaje
		Pez = Acuático
    Cualquier otro = No aplica 
*/
    
function animal($name) {
  switch($name) {
		case $name === 'Perro':
			return 'Perruno';
		case $name === 'Gato':
			return 'Felino';
		case $name === 'Caballo':
			return 'Salvaje';
		case $name === 'Pez':
			return 'Acuático';
		default:
		  return 'No aplica';
	}
}

echo animal('Hormiga');