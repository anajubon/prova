<?php
include('includes/Conexao.php');
$id = $_POST['id'];


$data = $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];

echo "<h1>Alteração de dados</h1>";
echo "<p>Código: $id</p>";
$sql = "update fluxo_caixa set 
    data = '$data',
    tipo = '$tipo',
    valor = '$valor',
    historico = '$historico',
    cheque = '$cheque'
    where id = $id";

$result = mysqli_query($con, $sql);
if ($result)
    echo "Dados editados com sucesso!<br>";
else
    echo "Erro ao editar dados: " . $mysqli_error($con) . "!";
?>

<button><a href="Index.php">Tela inicial</a></button>
<button><a href="Altera_fluxo_caixa.php">Voltar</a></button>
