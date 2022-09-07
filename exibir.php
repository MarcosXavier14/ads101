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
    $quantidadeLinha = $_POST['quantidadeLinha'];
    $quantidadeColuna = $_POST['quantidadeColuna'];
    #echo $quantidade;
    for ($i = 1; $i <= $quantidadeLinha; $i++) 
        {
            echo "<Tr>";
            for($j = 1;$j <= $quantidadeColuna; $j++)
            {
            echo "<td>$j</td>";
            }
            "</tr>";
        }
        
    ?>
</table>

</html>