<?php
 include("cabecalho.php");
 include("conecta.php");
 include("banco-produto.php");


    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];
    if(array_key_exists('usado', $_POST)) {
        $usado = "true";
    }else {
        $usado = "false";
    }
    
    if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) {
        echo "<h2 class='text-success'>Produto $nome $preco R$ adicionado com sucesso! </h2>";
    } else{
        $erro = mysqli_error($conexao);
        echo "<h2 class='text-danger'>Produto nao foi adicionado </h2></br>$erro";
    }
?>
  
<?php include("rodape.php")?>