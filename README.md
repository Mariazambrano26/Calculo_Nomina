# Calculadora de Nómina 

Este proyecto es una interfaz web responsive dividida en dos secciones principales para la gestión y visualización de pagos a trabajadores.

## 🚀 Características
* **Diseño en 2 columnas:** Construido con el sistema Grid y componentes `Card` de Bootstrap 5.
* **Formulario de Entrada:** Captura datos del trabajador (Nombre y Cédula) y el desglose de horas laboradas (Diurnas, Vespertinas y Nocturnas).
* **Resumen de Pago:** Vista previa estructurada para mostrar el Salario Bruto, los descuentos ley (Ahorro Habitacional y Seguro Social) y el Sueldo Neto a recibir.


## 🚀 Logica del ejercicio
Enunciado:
Construya una aplicación web en PHP que permita calcular el sueldo quincenal de un trabajador a partir de las horas trabajadas en tres turnos (diurna, vespertina y nocturna) y sus datos personales (nombre, cédula). Las tarifas por hora son: Diurna = 675 Bs., Vespertina = 700 Bs. y Nocturna = 956.23 Bs.
El programa debe sumar el sueldo quincenal bruto sin deducciones y aplicar porcentajes de retención por Ahorro Habitacional y Seguro Social según las siguientes escalas salariales:
Si el sueldo bruto es menor a 85,000 Bs.: Ahorro Habitacional = 0.1%, Seguro Social = 0.15%.
Si el sueldo bruto está entre 85,000 Bs. y 150,000 Bs. (inclusive): Ahorro Habitacional = 0.15%, Seguro Social = 0.2%.
Si el sueldo bruto es mayor a 150,000 Bs.: Ahorro Habitacional = 0.3%, Seguro Social = 0.25%.
Muestre en pantalla los datos personales del empleado, el sueldo bruto, los montos descontados por cada concepto y el sueldo quincenal neto con deducciones.

## 🛠️ Tecnologías utilizadas
* HTML5
* Bootstrap 5.3

## 📂 Archivos del proyecto
* `index.html` - Estructura principal de la interfaz web.
* `README.md` - Descripción general del proyecto.