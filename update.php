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

$id=$_GET['id'];
$nome=$_GET['nome'];
$DataNasc=$_GET['DataNasc'];
$salario=$_GET['salario'];

$count = $dbh->exec("UPDATE usuario SET nome='$nome', DataNasc='$DataNasc', salario='$salario' WHERE id=$id");
echo "<p>$count registro foi editado</p>";
echo "<a href=index.php>Voltar</a>";
