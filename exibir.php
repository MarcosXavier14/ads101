<html>

<head>
    <title> .: Página com a criação da tabela :. </title>
    <meta charset='utf-8'>
</head>
<table border='1'>
    <tr>
        <td>Tabela criada pelo FOR</td>
    </tr>
    <?php
    $quantidade = $_POST['quantidade'];
    #echo $quantidade;
    for ($i = 1; $i <= $quantidade; $i++) {
        echo "<tr><td>linha $i</td></tr>";
    }
    ?>
</table>

</html>