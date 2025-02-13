# Variables y Tipos de Datos en PHP 8

En PHP, las variables y los tipos de datos son fundamentales para almacenar y manipular información dentro de un programa. A continuación, exploraremos cómo declarar variables, los tipos de datos disponibles y cómo manipularlos.

## 1. Declaración de Variables en PHP

### **Reglas para declarar variables en PHP:**
- Las variables comienzan con el símbolo `$`.
- Deben comenzar con una letra o un guion bajo (`_`), pero no con un número.
- No pueden contener espacios; en su lugar, se usa `camelCase` o `snake_case`.
- Son **sensibles a mayúsculas y minúsculas** (`$nombre` y `$Nombre` son diferentes).

Ejemplo:
```php
<?php
$nombre = "Juan";
$edad = 25;
$_ciudad = "Madrid";
?>
```

## 2. Tipos de Datos en PHP
PHP es un lenguaje de tipado **dinámico**, lo que significa que no es necesario declarar el tipo de una variable explícitamente. Algunos de los tipos de datos más utilizados en PHP son:

### **Principales tipos de datos:**
- **String (cadena de texto)**
  ```php
  $texto = "Hola, mundo";
  ```
- **Integer (número entero)**
  ```php
  $numero = 42;
  ```
- **Float (número decimal)**
  ```php
  $precio = 10.99;
  ```
- **Boolean (verdadero o falso)**
  ```php
  $esVerdadero = true;
  ```
- **Array (lista de valores)**
  ```php
  $colores = ["rojo", "azul", "verde"];
  ```
- **NULL (sin valor definido)**
  ```php
  $vacio = NULL;
  ```

## 3. Tipado Dinámico y Débil

PHP permite cambiar el tipo de dato de una variable en tiempo de ejecución, lo que se conoce como **tipado dinámico**. También realiza conversiones automáticas entre tipos, lo que se denomina **tipado débil**.

Ejemplo:
```php
<?php
$variable = "10"; // String
$variable = $variable + 2; // Ahora es un Integer (12)
echo $variable; // Imprime 12
?>
```

## 4. Conversiones de Tipos (Type Casting)

Si necesitas forzar una conversión de tipo, puedes hacerlo manualmente.

Ejemplo:
```php
<?php
$numero = "42";
$numeroEntero = (int) $numero; // Convierte a Integer
$numeroDecimal = (float) $numero; // Convierte a Float
$texto = (string) $numero; // Convierte a String
$booleano = (bool) $numero; // Convierte a Boolean
?>
```

## 5. Concatenación e Interpolación de Cadenas

En PHP, puedes combinar cadenas de texto utilizando **concatenación** o **interpolación**.

### **Concatenación (`.`)**
```php
<?php
$nombre = "Juan";
$mensaje = "Hola, " . $nombre . " bienvenido.";
echo $mensaje;
?>
```
**Salida:** `Hola, Juan bienvenido.`

### **Interpolación (comillas dobles " ")**

Si usas comillas dobles, PHP interpretará las variables dentro de la cadena.
```php
<?php
$nombre = "Ana";
echo "Hola, $nombre, ¿cómo estás?";
?>
```
**Salida:** `Hola, Ana, ¿cómo estás?`

Para evitar conflictos, puedes encerrar la variable entre llaves:
```php
echo "Hola, {$nombre}, ¿cómo estás?";
```

---

Con estos conceptos básicos de variables y tipos de datos, ya puedes empezar a trabajar con datos dinámicos en PHP 8. 🚀

