# Primeros Pasos con PHP 8

PHP es un lenguaje de programación del lado del servidor que se usa principalmente para el desarrollo web. A continuación, exploraremos cómo escribir y ejecutar tu primer código en PHP.

## 1. Creación de un Archivo PHP

Para escribir código en PHP, necesitas un archivo con la extensión `.php`. Sigue estos pasos:

1. Abre tu editor de código favorito (**VS Code recomendado**).
2. Crea un nuevo archivo y guárdalo con el nombre `index.php`.
3. Escribe el siguiente código:
   ```php
   <?php
   echo "¡Hola, mundo desde PHP!";
   ?>
   ```
4. Guarda el archivo.

## 2. Ejecutar PHP desde la Terminal
Si deseas ejecutar tu script sin necesidad de un servidor web, puedes hacerlo directamente desde la terminal.

1. Abre la terminal en la carpeta donde guardaste `index.php`.
2. Ejecuta el siguiente comando:
   ```sh
   php index.php
   ```
3. Si todo está bien, verás la salida:
   ```
   ¡Hola, mundo desde PHP!
   ```

## 3. Levantar un Servidor Local con PHP
Para probar código en un entorno más realista, puedes iniciar un servidor web local con PHP.

1. Navega hasta la carpeta donde guardaste `index.php`.
2. Ejecuta el siguiente comando en la terminal:
   ```sh
   php -S localhost:8000
   ```
3. Abre tu navegador y accede a `http://localhost:8000`.
4. Verás la salida de tu script en la web.

## 4. Mezcla de PHP con HTML y CSS
PHP se puede incrustar dentro de código HTML para generar contenido dinámico.

Ejemplo de archivo `index.php` con HTML y PHP mezclado:
```php
<!DOCTYPE html>
<html>
<head>
    <title>Mi primera página PHP</title>
</head>
<body>
    <h1>Bienvenido a mi sitio</h1>
    <p>Hoy es <?php echo date('d/m/Y'); ?></p>
</body>
</html>
```

Cuando accedas a `http://localhost:8000`, verás una página con la fecha actual generada dinámicamente por PHP.

## 5. Uso de Variables y Echo
PHP permite definir variables y usarlas en la salida del código.

Ejemplo:
```php
<?php
$name = "Juan";
echo "Hola, $name";
?>
```
Esto imprimirá `Hola, Juan`.

## 6. Comentarios en PHP
Puedes agregar comentarios en tu código para documentar o desactivar temporalmente partes del código.

- **Comentario de una línea:**
  ```php
  // Esto es un comentario de una línea
  ```

- **Comentario de múltiples líneas:**
  ```php
  /*
  Esto es un comentario
  de varias líneas.
  */
  ```

## 7. Uso de PHP en Formularios HTML
PHP se usa frecuentemente para manejar formularios en sitios web.

Ejemplo básico de formulario con PHP:
```php
<!DOCTYPE html>
<html>
<head>
    <title>Formulario en PHP</title>
</head>
<body>
    <form method="post" action="procesar.php">
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
```

En `procesar.php`, puedes recibir el dato enviado con:
```php
<?php
$nombre = $_POST['nombre'];
echo "Hola, $nombre";
?>
```

## 8. Prueba de Código en Línea
Si no quieres instalar nada, puedes probar código PHP en línea en sitios como:
- [PHP Sandbox](https://phpsandbox.io/)
- [Online PHP Compiler](https://www.programiz.com/php/online-compiler)

---

Con estos primeros pasos, ya tienes lo básico para empezar a programar en PHP. 🚀

