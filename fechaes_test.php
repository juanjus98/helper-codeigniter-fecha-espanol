/*
Instanciamos en nuestro controlador de codeigniter el helper fechaes_helper de la siguiente manera.
*/

$this->load->helper('fechaes_helper');

/*
Utilizamos la funcion fecha_es(fecha del formato MySQL con hora, formato que queremos que nos retorne, mostrar hora);
*/
$fecha = fecha_es("2014-06-25 13:30:40", "L d F a", TRUE);
//Resultado Miercoles 25 Junio 2014 13:30:40

/*
Utilizamos la funcion fecha_es(fecha del formato MySQL sin hora, formato que queremos que nos retorne);
*/
$fecha = fecha_es("2014-06-25 13:30:40", "L d F a", TRUE);
//Resultado Miercoles 25 Junio 2014
