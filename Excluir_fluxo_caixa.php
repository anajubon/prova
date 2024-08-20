<?php
     include('includes/Conexao.php');
     $id = $_GET['id'];
     $sql = "select * from fluxo_caixa where id=$id";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result);
     $codigo = $row['id'];


    echo "<h1>Excluir</h1>";
    echo "<p>Código: $codigo</p>";
    $sql = "delete from fluxo_caixa where id = $id";


    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados excluidos com sucesso!<br>";
    else
        echo "Erro ao excluir dados: ".$mysqli_error($con)."!";
?>
<button><a href="index.php">Tela Inicial</a></button>
<button><a href="Listar_fluxo_caixa.php">Voltar</a></button>
