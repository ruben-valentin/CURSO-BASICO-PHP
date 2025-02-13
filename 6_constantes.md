# Constantes en PHP 8

Las **constantes** en PHP son valores que no pueden cambiar durante la ejecución del script. Son útiles para almacenar valores que deben permanecer inmutables a lo largo del programa.

## 1. Definición de Constantes Globales

A diferencia de las variables, las constantes **no** llevan el prefijo `$` y su nombre suele escribirse en mayúsculas por convención.

Ejemplo:
```php
<?php
const PI = 3.1416;
echo PI;
?>
```

**Reglas para las constantes:**
- No llevan `$` al inicio.
- Se nombran en **mayúsculas** por convención.
- No pueden redefinirse.

## 2. Uso de la Función `define()`

Otra forma de definir constantes es usando la función `define()`. A diferencia de `const`, `define()` permite definir constantes **dinámicamente** (por ejemplo, con variables o en funciones).

Ejemplo:
```php
<?php
define("SALUDO", "Hola, mundo!");
echo SALUDO;
?>
```

**Diferencias entre `const` y `define()`:**
- `const` se usa en tiempo de compilación, mientras que `define()` se ejecuta en tiempo de ejecución.
- `define()` permite definir constantes con valores calculados en ejecución.

## 3. Definición de Constantes en Clases

Dentro de las clases, las constantes se definen con `const` y son accesibles sin instanciar la clase.

Ejemplo:
```php
<?php
class Config {
    const BASE_URL = "https://miweb.com";
    const VERSION = "1.0.0";
}

echo Config::BASE_URL;
?>
```

**Características:**
- Se acceden usando `NombreClase::NOMBRE_CONSTANTE`.
- Son inmutables y no pueden cambiarse.
- Son útiles para configuraciones dentro de las clases.

---

Con esto ya sabes cómo definir y usar constantes en PHP 8, tanto globalmente como dentro de clases. 🚀

