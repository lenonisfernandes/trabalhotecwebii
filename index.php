<html>
<head>
 <!-- chamar css -->
<link rel="stylesheet" type="text/css" href=https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css>
<!--chamar javascript -->
<script src=https://code.jquery.com/jquery-3.3.1.js></script>
<script src=https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</head>

<body>

<a href=formulario.php>Add</a>

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

$sql = 'SELECT * FROM usuario';

echo " <table id='example' class='display' style='width:100%'>
<thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Salario</th>
        <th>Excluir</th>
        <th>Editar</th>
        
    </tr>
</thead>
<tbody>
";

foreach ($dbh->query($sql) as $row) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nome']."</td>";
    echo "<td>".$row['DataNasc']."</td>";
    echo "<td>".$row['salario']."</td>";
    echo "<td><a href=excluir.php?id=".$row['id'].">Excluir</a></td>";
    echo "<td><a href=editar.php?id=".$row['id'].">Editar</a></td>";
    echo "</tr>";
}

echo "        </tbody>
</table>";
?>

</body>

</html>