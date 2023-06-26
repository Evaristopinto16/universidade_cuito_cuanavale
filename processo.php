<?php 
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$AnoFornecimento = $_POST['fornecimento'];
$origem = $_POST['origem'];
 
$conexaoBD = mysqli_connect('localhost', 'root', 'root', 'farmacia') or  die("Não foi possivel conectar ao Mysql");
 
$sql = "INSERT INTO Produto VALUE";
$sql .= "('$nome', '$preco' , '$AnoFornecimento', '$origem')";
mysqli_query($conexaoBD, $sql) or die("Erro ao tentar cadastrar");
mysqli_close($conexaoBD);
echo 'conexao realizada com exito <br><br>';
echo  "<a href='./index.php'>ver produto</a>";
echo "<br>";
echo  "<a href='./index.php'>Voltar</a>";
?>