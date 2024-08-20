<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Fluxo Caixa</title>
</head>

<body>
   
    <section>
            <?php
            include('includes/Conexao.php');
            $sql = "SELECT * FROM fluxo_caixa";
            // Executa a consulta
            $result = mysqli_query($con, $sql);
            ?>
            <h1>Consulta de fluxo de caixa</h1>
                <table align="center" border="1" width="800"> 
                    <tr>
                        <th>Código</th>
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Valor</th>
                        <th>Histórico</th>
                        <th>Cheque</th>
                        <th>Alterar</th>
                        <th>Deletar</th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['data'] . "</td>";
                        echo "<td>" . $row['tipo'] . "</td>";
                        echo "<td>" . $row['valor'] . "</td>";
                        echo "<td>" . $row['historico'] . "</td>";
                        echo "<td>" . $row['cheque'] . "</td>";
                        echo "<td><a href='Altera_fluxo_caixa.php?id=" . $row['id'] . "'>Alterar</a></td>";
                        echo "<td><a href='Excluir_fluxo_caixa.php?id=" . $row['id'] . "'>Deletar</a></td>";
                        echo "</tr>";
                    }
                    ?>   
                    <button><a href="Index.php">Voltar</a></button>  
            </table>
    </section>
</body>

</html>