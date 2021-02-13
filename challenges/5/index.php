<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Ejemplo de Debug</title>
   </head>
   <body>
      <?php

        /* me intereza que analicen como funciona (debuggear)
        y la pregunta de siempre ... funciona ?
        */

         /* 
           El algoritmo llamaba a la funcion calcular_suma_de_factoriales() antes de que este definida y también estaba mal concatenado y quería imprimir las variables como strings.
           
         */
         $m=5;
         $n=10;
         
         
         function factorial($param) {
            $resultado = 1;
            
            for ($i=1; $i<=$param; $i++) {
               $resultado = $resultado * $i;
            }
            
            return $resultado;
         }
         
         function sumar($param1, $param2) {
            return $param1 + $param2;
         }
         
         function calcular_suma_de_factoriales($param1, $param2) {
            $factorial1 = factorial($param1);
            $factorial2 = factorial($param2);
            $result = sumar($factorial1, $factorial2);
            return $result;
         }
         
         $suma_de_factoriales = calcular_suma_de_factoriales($m, $n);
          
         echo "fact(" .  $m . ") + fact(" . $n . ") = " . $suma_de_factoriales;

         ?>
   </body>
</html>