<?php

//leccion 15

// OPERADOR AND - &&
# Opción 1:
# $valor_1 and $valor_2
# Opción 2:
# $valor_1 && $valor_2

# Declaración de variables:
$gatos_felinos = true;
$gatos_tienen_4_patas = true;

var_dump( $gatos_felinos and $gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(true)
echo "<br>";
echo "<br>";

# Declaración de variables:
$gatos_aves = false;
$gatos_tienen_4_patas = true;

var_dump( $gatos_aves and $gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(false)
echo "<br>";
echo "<br>";

# Declaración de variables:
$gatos_vuelan = false;
$gatos_programan_con_PHP = false;

var_dump( $gatos_vuelan and $gatos_programan_con_PHP ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(false)
echo "<br>";
echo "<br>";

// -------------------------------------------------------

// Operador OR - ||
# Opción 1:
# $valor_1 or $valor_2
# Opción 2:
# $valor_1 || $valor_2

# Declaración de variables:
$gatos_felinos = true;
$gatos_tienen_4_patas = true;

var_dump( $gatos_felinos or $gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(true)
echo "<br>";
echo "<br>";

# Declaración de variables:
$gatos_aves = false;
$gatos_tienen_4_patas = true;

var_dump( $gatos_aves or $gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(true)
echo "<br>";
echo "<br>";

# Declaración de variables:
$gatos_vuelan = false;
$gatos_tienen_6_colas = false;

var_dump( $gatos_vuelan or $gatos_tienen_6_colas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(false)
echo "<br>";
echo "<br>";

// -------------------------------------------------------

// Operador NOT (!) ||
# !$valor

# Declaración de variables:
$gatos_aves = false;

var_dump( !$gatos_aves ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(true)
echo "<br>";
echo "<br>";

# Declaración de variables:
$gatos_tienen_4_patas = true;

var_dump( !$gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
# ----------------
# Impresión en consola/navegador:
# bool(false)