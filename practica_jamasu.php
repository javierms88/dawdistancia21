

<?php

/**
 * Devuelve "Hola" más el nombre de la persona que pasemos por parámetro.
 *
 * @author Javier Márquez Suárez
 * @version 1.2
 * @param string $param1 la cadena que queramos
 * @return string $param2 Devolveremos una cadena con un añadido
 * @internal: Es una función de prueba, podemos poner más parámetros concatenados
 */
function funcionInventada1($param1)
{

  echo "Hola";
  $param2 = "Hola ".($param1);
  return $param2;
}

/**
 * Esta función devuelve un número multiplicando la edad por 23
 *
 * @author Javier Márquez Suárez
 * @param integer $edad
 * @return integer $puntos  devolvemos un número
 * @version 1.3
 * @internal: Es una función de prueba, podemos poner cualquier otro número multiplicando
*/
function funcionInventada2($edad)
{
  echo "Tu edad es ".$edad;
  $puntos = $edad * 23;
  return $puntos;
}

/**
 * Aquí empezamos a invocar funciones
 * @access public
*/
echo "Tus puntos son :".funcionInventada2(54);
echo "La cadena queda :".funcionInventada1("amigo");

?>
