# Llamadas a APIs Externas con PHP 8

En PHP, podemos hacer peticiones a APIs externas para obtener datos de servicios web. Para ello, podemos utilizar `cURL` o `file_get_contents()`.

## 1. Introducción a cURL

**cURL** es una biblioteca que permite realizar peticiones HTTP desde PHP. Es ideal para interactuar con APIs REST.

### **Verificar si cURL está instalado:**
```php
phpinfo();
```
Si no está habilitado, debes activarlo en `php.ini` descomentando la línea:
```ini
extension=curl
```

## 2. Realizar Peticiones GET con cURL

Podemos hacer una solicitud GET con cURL de la siguiente manera:
```php
$url = "https://api.example.com/data";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
```

### **Opciones adicionales de cURL:**
- `CURLOPT_TIMEOUT`: Define el tiempo máximo de espera.
- `CURLOPT_HTTPHEADER`: Permite enviar encabezados personalizados.

## 3. Decodificación de Respuestas JSON

Muchas APIs devuelven datos en formato JSON. Para convertirlo en un array asociativo en PHP, usamos `json_decode()`:
```php
$json = '{"nombre": "Juan", "edad": 30}';
$datos = json_decode($json, true);

echo $datos["nombre"]; // Imprime "Juan"
```

Para comprobar si la decodificación fue exitosa:
```php
if (json_last_error() === JSON_ERROR_NONE) {
    echo "JSON válido";
} else {
    echo "Error en JSON";
}
```

## 4. Alternativa con `file_get_contents()`

Para hacer peticiones GET más sencillas, podemos usar `file_get_contents()`:
```php
$url = "https://api.example.com/data";
$response = file_get_contents($url);
$datos = json_decode($response, true);

echo $datos["resultado"];
```

### **Diferencias entre cURL y file_get_contents():**
| Característica | cURL | file_get_contents() |
|--------------|------|----------------|
| Soporta métodos POST, PUT, DELETE | ✅ Sí | ❌ No |
| Configurable con opciones avanzadas | ✅ Sí | ❌ No |
| Más simple y directo | ❌ No | ✅ Sí |

---

Con estas técnicas, puedes integrar APIs externas en tus proyectos PHP de manera eficiente. 🚀

