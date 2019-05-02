<?php
//conectar bd
$dsn='mysql:dbname=test;host=127.0.0.1';
$user='root';
$password='';

try {
    $dbh=new PDO($dsn,$user,$password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$nome=$_GET['nome'];
$DataNasc=$_GET['DataNasc'];
$salario=$_GET['salario'];

$count = $dbh->exec("INSERT into usuario(nome,DataNasc,salario) values('$nome',$DataNasc,$salario) ");
echo "<p>$count registro adicionado</p>";
echo "<a href=index.php>Voltar</a>";

?>

