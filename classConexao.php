<?php
require_once 'pdoconfig.php';
 
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Conectado a $dbname em $host com sucesso.";
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados $dbname :" . $pe->getMessage());
}


$usuario = $_POST['data'];

$dados = json_decode($usuario, true);
var_dump($dados);



$my_Insert_Statement = $coon->prepare("INSERT INTO `nome`(`id`, `nome`, `sobrenome`, `email`, `sexo`, `profissao`) VALUES ($dados))";
 ?>