<?php 
include("cabecalho.php");

if(isset($_GET['login']) && $_GET['login'] == 1) {
    echo "<p class='alert-success'>Logado com sucesso</p>";
}

if(isset($_GET['login']) && $_GET['login'] == 0) {
    echo "<p class='alert-danger'>Usuario ou senha Invalidos!</p>";
}

?>

    <h1>Bem Vindo a Loja</h1>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <table class="table"> 
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="text" name="email"></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input class="form-control" type="password" name="senha"></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary">Login</button></td>
        </tr>
        
        </table>
    </form> 
 
<?php include("rodape.php") ?>
