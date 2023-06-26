<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./public/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pambalaRija</title>
 <style>
    #section{
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
    <section id="section">
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
 <section><br>
    <h2 style="padding-left: 400px;">Cadastrar Produtos</h2>
    <div>
        <div class="container" id="container">
            <form action="processo.php" method="post">
            <label for="nome">Nome do medicamento</label>
            <input type="text" class="form-control" name="nome">
            <label for="preco">Preço unitário</label>
             <input type="number" class="form-control" name="preco">
            <label for="nome">Ano de fornecimento</label>
            <input type="number" class="form-control" name="fornecimento" placeholder="ex.2020">
            <label for="nome">Origem</label>
            <select name="origem" id="origem" class="form-control">
                <option value="portugal">Portugal</option>
                <option value="india">India</option>
                <option value="china">China</option>
                <option value="russia">Russia</option>
                <option value="eua">Eua</option>
                
            </select>
            <button  type="submit" name="adicionar" class="btn btn-success mt-3" >Adicionar</button> <a href="/" class="btn btn-danger mt-3">Voltar</a>
        </form>
        </div>
    </div>
 </section>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="./public/js/bootstrap.js"></script>
</body>
</html>
 