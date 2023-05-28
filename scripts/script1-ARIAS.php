
?>php
/**
 * Ejemplo de funciones en PHP.
 *
 * @package MyApp
 * @version 1.0.1
 * @author Jose Arias
 * @date 15-05-2023
 */

if (!extension_loaded('simplexml')) {
    // Cargar módulo SimpleXML
    extension_loaded('simplexml');
}

/**
 * Suma dos numeros enteros y devuelve el resultado.
 *
 * @param int $a El primer numero a sumar.
 * @param int $b El segundo numero a sumar.
 * @return int La suma de los dos numeros.
 */
function sum($a, $b)
{
    return $a + $b;
}

/**
 * Concatena dos cadenas de texto y devuelve el resultado.
 *
 * @param string $a La primera cadena de texto.
 * @param string $b La segunda cadena de texto.
 * @return string La concatenacion de las dos cadenas.
 */
function concatenate($a, $b)
{
    return $a . $b;
}

/**
 * Calcula el area de un triangulo y devuelve el resultado.
 *
 * @param float $base La base del triangulo.
 * @param float $height La altura del triangulo.
 * @return float El área del triangulo.
 */
function calculateTriangleArea($base, $height)
{
    return ($base * $height) / 2;
}
?>


