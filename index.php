<?php

/* Asignar los valores de un array a variables
 *
 * $data =[
    'name' =>'italo',
    'lastname' => 'Moralos.f',
    'email' => 'i@rimorsoft.com'
];

['name' => $name, 'lastname' => $lastname] = $data;

echo "$name $lastname";
*/

/*
['HTTP_HOST' => $host, 'SERVER_PORT' => $port] = $_SERVER;

var_dump($host, $port);
*/

/* Cuando una función recibe como argumentos una variable con ... antes quiere decir que puede recibir una
cantidad de parametros indefinido y cuando se envían como parametros es porque está eniando los datos del array

$data = [1, 2, 3];

function x(int ... $variable){
}

x( ...$data);

*/

/*De esta manera se puede recorrer los datos de un array cuando los datos de este son un array

$users = [
    ['name' => 'Abel'],
    ['name' => 'Italo'],
    ['name' => 'Lynda']
];

foreach($users as ['name' => $name]){
    echo "$name <br>";
}

o

$users = ['Abel', 'Italo', 'Lynda'];

foreach($users as $key => $value){
    echo "$value <br>";
}
*/

/* con el match se puede simular un switch de una manera menos complicada y más rápida
$login = 'twitter';

$client = match ($login){
    'github', 'twitter' => 'Cliente GitHub o Twitter',
    'facebook' => 'Cliente Facebook',
    'whatsapp' => 'Cliente whatsapp'
};

echo $client;
*/

/*
 *
 * El operador ?-> se encarga de pregunatr antes de ejecutar el
 * siguiente metodo, ahorrando así errores o validaciones null
class Tag{
    public function list(){
        return [
            'php',
            'laravel'
        ];
    }
}

class Post{
    public  function  tags(){
        return new Tag();
    }
}

$post = new Post();
var_dump($post->tags()?->list());

*/

/* Con el operador | se le puede decir a una función que puede recibri un tipo de dato u otro
public function greet(string|array $mensaje): string|array{
    var_dump($mensaje);
    return $mensaje;
}
*/

/*Con el operador ?? podemos trabajar valores nulos sin esfuerzo

$subscription = $user->ssubscription ?? "14/08/2023";

De esta manera si la subscripción es nula asigan un valor definido
si se usa ??= se le asigna el valor por defecto a la varibale evaluada y la asignada
*/

/*Para hacer más ordenado el envío de parametros a un método o función, estos pueden llevar nombre

function variables($titulo, $contenido){
    var_dump($titulo, $contenido);
}

variables(
    titulo: 'mi titulo',
    contenido: 'mi contenido'
);

*/

/*
 * nuevas funciones de string con PHP
 * $code = 'code 20253080';
$result = str_starts_with($code, 'code');
$result = str_contains($code, 'code');
$result = str_ends_with($code, 'code');

var_dump($result);
*/

/*
 * Acceder a la clase como una cadena mediante el objeto

class Github{}
class Facebook{}
class X{}

$login = new Facebook();

$client = match ($login::class){
    'Github' => 'Github cliente',
    'Facebook' => 'Facebook cliente',
    'X' => 'X cliente',
};

echo $client;
**/


?>
