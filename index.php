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
        .card1{
            margin-left: 300px;
            width: 690px;
             
           display: flex;
        }
        #porcento{

            font-size: 98px;
            height: 260px;
            width: 300px;
            border-radius: 160px;
            

        }
        .deshboard{
            width: 100%;
            background-color: rgba(102, 95, 109, 0.808);
        }
        .flex{
            display: flex;
        }
        .counter{
            color: white;
         size: 50px;
          border: 2px solid red;
         padding-bottom: 130px;
        }
        .counter1{
            padding-bottom: 40px;
        }
     </style> 
</head>
<body>
     
    <div class="corpo">
        <section>
            <br><br>
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
     <div class="deshboard">
        <br>
            <br>
             
        <div class="card1">

            <div class="flex">

                <?php
                
                $conexaoBD = mysqli_connect('localhost', 'root', 'root', 'farmacia') or die("erro ao se conectar ao banco de dados");
                $buscaSql = 'SELECT * FROM Produto';
                $resultadoBusca = mysqli_query($conexaoBD, $buscaSql);
                $counter = 0;
                $counter1 = 0;
                while($registro = mysqli_fetch_array($resultadoBusca)){
                    $nome = $registro['nome']; 
                    $preco = $registro['preco'];
                    $AnoFornecimento = $registro['AnoFornecimento'];
                    $origem = $registro['origem'];
                    
                    if($AnoFornecimento < 2020){
                        $counter ++;
                       
                     }else{
                        $counter1 ++;
                        
                     }
                     $total=$counter+$counter1;
                    
                };
                echo "<br>";
                echo "<div id='porcento' class='btn alert-danger'><p class='mt-5'>$counter </p>   </div>";
                 
                echo "<br>"; 
                echo "<div id='porcento' class='btn alert-success'> <p class='mt-5'> $counter1  </p> </div>";
          echo "</div> ";
        echo" <br> <h1 align='center'>Total: $total</h1>";
         ?>
         
    
     </div>
     </div>
    
     </div>
     

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="./public/js/bootstrap.js"></script>
</body>
</html>
 
 
 
 