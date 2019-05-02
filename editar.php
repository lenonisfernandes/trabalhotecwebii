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

$sql="SELECT * FROM usuario WHERE id=$id";
foreach ($dbh->query($sql) as $row){
    echo "<br>
    <form action=update.php>
    <input type=hidden name=id value=".$row['id']."
    <p>Nome:</p>
    <input type=text name=nome value=".$row['nome'].">
    <p>Data de Nascimento</p>
    <input type=date name=DataNasc value=".$row['DataNasc'].">
    <p>Salario</p>
    <input type=int name=salario value=".$row['salario'].">
    <input type=submit name=editar>
    </form>";
}



?>