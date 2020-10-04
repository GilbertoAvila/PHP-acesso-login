<?php
  // será responsável por tratar as informações inseridas na página de login e verificar ,
  //se o usuário inseriu as informações corretas, e logo em seguida redirecioná-lo.

  $user     = "root";
  $password = "";
  $database = "acesso";
  $hostname = "localhost";


  $login  = $_POST['usuario'];
  $nome   = $_POST['nome'];
  $senha  = md5($_POST['senha']);
  $entrar = $_POST['entrar'];

  //$connect = mysqli_connect('localhost','root','');

  $link = mysqli_connect($hostname, $user, $password, $database) or die( '  Erro na conexão ' );
  //$db = mysqli_select_db('acesso');
    if (isset($entrar)) {

      $verifica = mysqli_query($link, "SELECT * FROM usuarios WHERE usuario = '$login' AND senha = '$senha' ") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'> alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("usuario",$login);
          header("Location:texto.php");
        }
    }
?>