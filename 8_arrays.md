# Arrays en PHP 8

Los **arrays** en PHP permiten almacenar múltiples valores en una sola variable. Son una estructura de datos fundamental y se pueden clasificar en **arrays indexados** y **arrays asociativos**.

## 1. Creación de Arrays Indexados

Los **arrays indexados** utilizan números como claves (índices) para acceder a los valores.

### **Sintaxis de un array indexado:**
```php
$colores = ["rojo", "azul", "verde"];
echo $colores[0]; // Imprime "rojo"
```
Otra forma de declarar un array:
```php
$numeros = array(1, 2, 3, 4);
echo $numeros[2]; // Imprime "3"
```

## 2. Arrays Asociativos

Los **arrays asociativos** utilizan claves de tipo string en lugar de números.

### **Ejemplo de array asociativo:**
```php
$persona = [
    "nombre" => "Juan",
    "edad" => 25,
    "ciudad" => "Madrid"
];
echo $persona["nombre"]; // Imprime "Juan"
```
Otra forma de declararlo:
```php
$datos = array(
    "pais" => "España",
    "capital" => "Madrid"
);
echo $datos["capital"]; // Imprime "Madrid"
```

## 3. Iteración con `foreach`

El bucle `foreach` es la forma más sencilla de recorrer un array en PHP.

### **Ejemplo con array indexado:**
```php
$frutas = ["manzana", "pera", "uva"];
foreach ($frutas as $fruta) {
    echo "$fruta ";
}
```
**Salida:** `manzana pera uva`

### **Ejemplo con array asociativo:**
```php
$usuario = [
    "nombre" => "Ana",
    "edad" => 30
];
foreach ($usuario as $clave => $valor) {
    echo "$clave: $valor ";
}
```
**Salida:** `nombre: Ana edad: 30`

## 4. Uso de Claves y Valores en Arrays

Podemos extraer claves y valores de un array usando las funciones `array_keys()` y `array_values()`.

### **Ejemplo:**
```php
$productos = [
    "producto1" => "Laptop",
    "producto2" => "Teléfono"
];

$claves = array_keys($productos);
$valores = array_values($productos);

print_r($claves); // Imprime ["producto1", "producto2"]
print_r($valores); // Imprime ["Laptop", "Teléfono"]
```

---

Con estos conceptos, puedes manejar arrays en PHP de manera eficiente, utilizando índices, claves y recorriéndolos con `foreach`. 🚀

