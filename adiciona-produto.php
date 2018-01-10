<?php include("cabecalho.php")?>
<?php include("conecta.php")?>
  <?php

    function insere_Banco($conexao, $nome, $preco) {

        $query = "INSERT INTO produtos (nome, preco) VALUES ('{$nome}', {$preco})";
        return mysqli_query($conexao, $query);

    }

    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    
    
    
    
    
     
    if(insere_Banco($conexao, $nome, $preco)) {
        echo "<h2 class='text-success'>Produto $nome $preco R$ adicionado com sucesso! </h2>";
    } else{
        $erro = mysqli_error($conexao);
        echo "<h2 class='text-danger'>Produto nao foi adicionado </h2></br>$erro";
    }
  ?>
  
<?php include("rodape.php")?>