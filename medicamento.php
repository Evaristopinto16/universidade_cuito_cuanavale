<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./public/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pambalaRija</title>
<style>
    section{
        background-color: rgba(0, 0, 255, 0.733);
        height: 650px;
        color: white;
    }
    .corpo{
        display: flex;
        
    }
    .lista{
        list-style: none;
    }
    .lista a{
        color: white;
        font-style: none;
    }
 </style>
 </head>
 <body>
 <div class="corpo">
    <section>
        <br>
        <br>
    <ul class="lista">
        <li><a href="/farmacia">Dashboard</a></li>
        <li class="nav-item"><a href="cadastros.php" class="nav-link">Cadastrar</a></li>
              <li class="nav-item"><a href="medicamento.php" class="nav-link">Medicamentos</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Stock</a></li>
          <li><a href="#">Saidas</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Vendas</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Facturas</a></li>
          
    </ul>
 </section>
 <div>
    <div class="container">
           <h3 style="padding-left: 400px;">Medicamentos</h3>
<?php
 echo "<div class='row justify-content-sm-center'>";
 $conexaoBD = mysqli_connect('localhost', 'root', 'root', 'farmacia') or  die("Não foi possivel conectar ao Mysql");
 
 $sql = "SELECT * FROM Produto";
 $resultado =  mysqli_query($conexaoBD, $sql) or die("erro ao tentar cadastrar registro");
 //{{#each medicamento}}
 while($registro = mysqli_fetch_array($resultado)){
    $nome = $registro['nome'];
    $preco = $registro['preco'];
    $AnoFornecimento = $registro['AnoFornecimento'];
    $origem = $registro['origem'];
    $venda =  $preco+($preco*0.14);
    
     echo "<div class='col-sm-6 col-md-4'>";
        echo " <div class='card mb-5'>";
              echo "<div class='card-body'>";
                echo "<h4 class='card-title'>$nome</h4>";
            
            echo " <ul class='list-group list-group-flush'>";
             echo "<li class='list-group-item'>Preço $venda,00 Kz</li>";
           echo " <li class='list-group-item'>Sem Desconto</li>
           </ul>";
            
             echo "<div class='card-body'>";
             if ($origem == "eua") {
                # code...
                echo "localização:<a href='#' class='card-link'> Estante A5...</a>";
             }
             if($origem == "russia"){
                echo "localização:<a href='#' class='card-link'> Estante A4...</a>";
             }
             if($origem == "portugal"){
                echo "localização:<a href='#' class='card-link'> Estante A1...</a>";
             }
             if($origem == "india"){
                echo "localização:<a href='#' class='card-link'> Estante A2...</a>";
             } if($origem == "china"){
                # code...
                echo "localização:<a href='#' class='card-link'> Estante A3...</a>";
             } 
            
            echo "</div>";
            
             if($AnoFornecimento < 2020){
                echo "<div class='card-footer text-muted'> Produto: <small class='btn btn-danger'>Não Ativo</small> </div>";
             }else{
                echo "<div class='card-footer text-muted'> Produto: <small class='btn btn-success'>Ativo</small> </div>";
             }
            
        echo" </div>";
    echo " </div>" ; 
   echo " </div>";
}

 
?>
        
        
    </div>
 </div>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="./public/js/bootstrap.js"></script>
</body>
</html>