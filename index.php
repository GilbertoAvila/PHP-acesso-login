<?php
  //$login_cookie = $_COOKIE['usuario'];
    if(isset($login_cookie)){
      echo"<font color='green'>Seja bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"<h1>Bem-Vindo, convidado!!!</h1> <br>";
      echo"<h2>Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você</h2>";
      echo"<br><a href='login.html'><h2>Faça Login</a> para ter acesso e ler o conteúdo</h2>";
    }
    
?>
