<?php
    $utf8 = header("Content-Type: text/html; charset=utf-8");
    echo "<h1> Teste de acesso ao banco de dados </h1>";
    # Substitua abaixo os dados, de acordo com o banco criado
    $user     = "root";
    $password = "";
    $database = "acesso";
    $hostname = "localhost";

    $nome = ['nome'];
    $login = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    # Conecta com o servidor de banco de dados 
    $link = mysqli_connect($hostname, $user, $password) or die( '  Erro na conexão ' );


    echo "<h1 style='background-color:green'>Conectado e atualizado o banco de dados - $database - com sucesso!!!</h1>";

   // $URL_ATUAL= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   //  echo "<h1 style='background-color:red'>Caminho da URL:    $URL_ATUAL</h1>";
    //print '<br />';
    //echo "<h1 style='background-color:red'>.</h1>";
    print '<br />';
    print '<br />';


    //# Seleciona o banco de dados
    mysqli_select_db($link, $database) or die('---> Erro na seleção do banco');

    # Executa a query INSERT
    $query = "INSERT INTO usuarios (usuario, senha) VALUES ('$login', '$senha')";
    $result_query = mysqli_query($link, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error() );

    # Executa a query SELECT
    $query_select= "SELECT usuario, senha FROM usuarios";
    $result_query_select = mysqli_query($link, $query_select) or die(' Erro na query:' . $query_select . ' ' . mysqli_error() );
    echo "<h4>Usuário -- Senha</h4>";

    # Exibe os registros na tela
        while ($row = mysqli_fetch_array($result_query_select))
            {
                print $row["usuario"] . " -- " . $row["senha"];
                print '<br />';
            }
           // setcookie("usuario",$login);
            header("Location:index.php");
?>