# Operadores y Estructuras de Control en PHP 8

En PHP, los operadores y estructuras de control nos permiten realizar cálculos, tomar decisiones y ejecutar bloques de código repetitivamente.

## 1. Operadores Aritméticos y Lógicos

### **Operadores Aritméticos**
Se utilizan para realizar cálculos matemáticos:

| Operador | Descripción | Ejemplo |
|----------|------------|---------|
| `+` | Suma | `$a + $b` |
| `-` | Resta | `$a - $b` |
| `*` | Multiplicación | `$a * $b` |
| `/` | División | `$a / $b` |
| `%` | Módulo (resto) | `$a % $b` |
| `**` | Exponenciación | `$a ** $b` |

Ejemplo:
```php
$a = 10;
$b = 3;
echo $a + $b; // 13
```

### **Operadores Lógicos**
Se usan para evaluar condiciones booleanas:

| Operador | Descripción | Ejemplo |
|----------|------------|---------|
| `&&` o `and` | AND lógico | `$a && $b` |
| `||` o `or` | OR lógico | `$a || $b` |
| `!` | Negación lógica | `!$a` |

Ejemplo:
```php
$esMayor = ($edad >= 18) && ($pais == "España");
```

## 2. Condiciones con `if`, `else` y `else if`

### **Sintaxis básica:**
```php
if ($edad >= 18) {
    echo "Eres mayor de edad";
} else if ($edad >= 13) {
    echo "Eres adolescente";
} else {
    echo "Eres niño";
}
```

## 3. Operador Ternario

El operador ternario permite simplificar `if` y `else` en una sola línea.

Ejemplo:
```php
$mensaje = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
echo $mensaje;
```

## 4. Uso de `switch` y `match`

### **Estructura `switch`**
Se usa cuando hay múltiples condiciones posibles para una variable.

```php
$dia = "lunes";
switch ($dia) {
    case "lunes":
        echo "Inicio de semana";
        break;
    case "viernes":
        echo "Fin de semana próximo";
        break;
    default:
        echo "Día normal";
}
```

### **Uso de `match` (PHP 8)**
`match` es más eficiente y devuelve un valor.

```php
$estado = "ok";
$mensaje = match ($estado) {
    "ok" => "Todo está bien",
    "error" => "Algo salió mal",
    default => "Estado desconocido",
};
echo $mensaje;
```

## 5. Bucles (`for`, `foreach`, `while`, `do while`)

### **Bucle `for`**
Se usa cuando conocemos el número de iteraciones.

```php
for ($i = 1; $i <= 5; $i++) {
    echo "$i ";
}
```

### **Bucle `foreach`**
Se usa para recorrer arrays.

```php
$colores = ["rojo", "azul", "verde"];
foreach ($colores as $color) {
    echo "$color ";
}
```

### **Bucle `while`**
Se ejecuta mientras una condición sea verdadera.

```php
$contador = 1;
while ($contador <= 5) {
    echo "$contador ";
    $contador++;
}
```

### **Bucle `do while`**
Se ejecuta al menos una vez antes de evaluar la condición.

```php
$contador = 1;
do {
    echo "$contador ";
    $contador++;
} while ($contador <= 5);
```

---

Con estos operadores y estructuras de control, ya puedes manejar la lógica de tus programas en PHP 8. 🚀

