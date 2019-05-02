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

$count = $dbh->exec("DELETE FROM usuario WHERE id=$_GET[id]");
echo "<p>$count registro foi excluído</p>";
echo "<a href=index.php>Voltar</a>"


?>