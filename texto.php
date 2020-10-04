<?php
       
        echo "<b><a href='index.php'><h2>Voltar para a Home</h2></a>";
        $login_cookie = $_COOKIE['usuario'];
        if(isset($login_cookie)){
            echo"<font color='green'>Seja bem-vindo(a),  "; 
            echo"<font color='red' size=4px> $login_cookie";
            echo"</br>";
            }else{
                echo"<br>";
            }



    echo "<font color='green'>";
    echo "<h1>Dados fictício da indústria de impressão e composição </h1>";
    
    echo " <p>Lorem Ipsum é simplesmente um texto fictício da indústria de impressão e composição.<br>
           Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500,<br> quando 
           um impressor desconhecido pegou uma galé do tipo e embaralhou para fazer um livro de 
           amostra de tipos. <br>Ele sobreviveu não apenas cinco séculos, mas também ao salto para a 
           composição eletrônica, permanecendo essencialmente inalterado.<br>
           Ele foi popularizado na década de 1960 com o lançamento de folhas de Letraset contendo 
           passagens de Lorem Ipsum e, mais <br> recentemente, com software de editoração eletrônica 
           como Aldus PageMaker incluindo versões de Lorem Ipsum.</p>";

?>