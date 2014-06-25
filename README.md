helper-codeigniter-fecha-espanol
================================

Helper codeigniter Fecha en español

TABLA DE FORMATOS Y RESULTADOS.
```
FORMATOS  |   RESULTADOS
-------------------------------------
d/m/a 	  |   25/06/2014
d-m-a 	  |   25-06-2014
d.m.a 	  |   25.06.2014
d M a 	  |   25 Jun 2014
d F a 	  |   25 Junio 2014
D d M a	  |   Mar 25 Jun 2014
L d F a	  |   Martes 25 Junio 2014
```

FORMA DE USO:
=============

1.- Instanciar el helper fechaes_helper en su proyecto ya sea en el constructor de su controlador, en cada metodo o en el autoload de codeigniter.

2.- Llamar a la funcion fecha_es(FECHA_MYSQL, FORMATO, HORA opcional) donde:
FECHA_MYSQL es una fecha de formato MySQL date("Y-m-d") o date("Y-m-d H:i:s")
FORMATO es la una de las filas de la tabla de foarmatos y resultados arriba.
HORA opcional puede ser TRUE que muestra la hora, FALSE no muestra la hora.

Ejemplo:
```
$fecha = date("Y-m-d");
echo fecha_es($fecha, "d M a"); //Resultado: 25 Jun 2014

$fecha = date("Y-m-d H:i:s");
echo fecha_es($fecha, "d M a", TRUE); //Resultado: 25 Jun 2014 13:30:40
```

www.webapu.com

