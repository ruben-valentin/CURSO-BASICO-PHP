# Instalación y Configuración de PHP

PHP es un lenguaje de programación que se ejecuta en el servidor, por lo que necesitamos instalarlo en nuestro ordenador o utilizar un servidor remoto que lo tenga disponible. Vamos a ver las opciones más recomendadas para cada sistema operativo.

## 1. Instalación en macOS con Homebrew
Si utilizas macOS, la forma más sencilla de instalar PHP es a través de **Homebrew**, un gestor de paquetes para macOS y Linux.

### **Pasos:**
1. Abre la terminal.
2. Escribe el siguiente comando para instalar PHP:
   ```sh
   brew install php
   ```
3. Verifica que la instalación fue exitosa ejecutando:
   ```sh
   php -v
   ```
   Esto te mostrará la versión instalada de PHP.

## 2. Instalación en Windows
En Windows, puedes instalar PHP utilizando **XAMPP**, un paquete que incluye PHP, MySQL y Apache.

### **Pasos:**
1. Descarga **XAMPP** desde su [sitio oficial](https://www.apachefriends.org/es/index.html).
2. Ejecuta el instalador y selecciona **PHP** y **Apache**.
3. Una vez instalado, abre XAMPP y activa **Apache** para empezar a usar PHP.
4. Para verificar que PHP está instalado, abre una terminal y ejecuta:
   ```sh
   php -v
   ```

## 3. Instalación en Linux
En Linux, la instalación de PHP varía según la distribución. Para Debian y Ubuntu, puedes instalarlo con:

```sh
sudo apt update
sudo apt install php
```
Para Fedora y CentOS:
```sh
sudo dnf install php
```
Verifica la instalación con:
```sh
php -v
```

## 4. Uso de entornos preconfigurados (XAMPP, WAMP, MAMP)
Si no quieres instalar PHP manualmente, puedes usar un paquete que lo incluya junto con un servidor web y una base de datos:

- **XAMPP** (Windows, macOS, Linux) – Incluye Apache, MySQL y PHP.
- **WAMP** (Solo Windows) – Alternativa a XAMPP, con MySQL y Apache.
- **MAMP** (macOS y Windows) – Facilita la instalación de PHP con un entorno gráfico.

## 5. Verificación de la instalación
Para asegurarte de que PHP está funcionando correctamente, abre una terminal y ejecuta:
```sh
php -v
```
Si ves un mensaje con la versión de PHP, significa que la instalación fue exitosa. También puedes probar creando un archivo `index.php` con este contenido:
```php
<?php
  echo '¡Hola, PHP está funcionando!';
?>
```
Guárdalo y ejecútalo en un servidor web local o con el comando:
```sh
php -S localhost:8000
```
Esto levantará un servidor en tu máquina al que puedes acceder en `http://localhost:8000`.

---

Con estos pasos, habrás instalado y configurado PHP correctamente en tu equipo. ¡Listo para empezar a programar! 🚀


## Solución: PHP no se reconoce en PowerShell con XAMPP

### ✅ **Solución rápida: Ejecutar PHP correctamente en PowerShell**
En PowerShell, usa:

```sh
.\php -v
```

El `.` indica que el comando debe ejecutarse desde la carpeta actual.
Si esto funciona, significa que PHP está correctamente instalado, pero PowerShell requiere que especifiques la ruta completa o uses `.` para ejecutar binarios en la carpeta actual.

---

### 🔧 **Solución 2: Agregar PHP al PATH**
Si prefieres poder ejecutar `php -v` desde cualquier ubicación, debes agregar la ruta de PHP de XAMPP al **PATH** de Windows.

#### 1️⃣ Agregar PHP al PATH manualmente:
1. **Abrir las variables de entorno**:
   - Presiona `Win + R`, escribe `sysdm.cpl` y presiona **Enter**.
   - Ve a la pestaña **Opciones avanzadas** y haz clic en **Variables de entorno**.

2. **Editar la variable de entorno `Path`**:
   - En "Variables del sistema", busca `Path` y haz clic en **Editar**.
   - Haz clic en **Nuevo** y agrega la siguiente ruta:
     ```
     C:\xampp\php
     ```
   - Presiona **Aceptar** en todas las ventanas.

3. **Reiniciar la terminal** y probar de nuevo con:
   ```sh
   php -v
   ```
   Si esto funciona, ya puedes ejecutar PHP desde cualquier ubicación en la terminal.

---

### 🔄 **Solución 3: Usar `setx` para agregar PHP al PATH desde PowerShell**
Si prefieres hacerlo desde PowerShell, ejecuta este comando:

```sh
setx PATH "$env:PATH;C:\xampp\php" /M
```

Luego, cierra y vuelve a abrir PowerShell y prueba:

```sh
php -v
```

---

### 🚀 **Conclusión**
Si solo necesitas probar PHP rápidamente, usa:

```sh
.\php -v
```

Si quieres ejecutarlo desde cualquier carpeta, **agrega PHP al PATH** siguiendo las soluciones 2 o 3.

Si sigues teniendo problemas, revisa si `php.exe` está en `C:\xampp\php` y verifica los permisos del sistema. 💪🔥
