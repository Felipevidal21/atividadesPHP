<html>
<head>
<title>php</title>
<style type="text/css">

#imagem {
width: 500px;
height: 400px;
margin-left: 400px;
}

#texto {
position: absolute;
margin-top: -350px;
margin-left: 480px;
font-size:20;
}

   </style>

     </head>
<body>

<img id="imagem" src="ponte.jpg"/>
    
    <div id="texto">
       <?php 
         $nome = $_POST['nome'];
         $sob = $_POST['sob'];
         $email = $_POST['email'];

         echo "<div class='texto'>";
         echo "  Nome  : "    .$nome
          ."<br> Sobrenome : ".$sob
          ."<br> Email  : "   .$email;
         echo "</div>";
    
    ?>

      </div>
  <br>

<a href="formulario.php">voltar</a>

</body>
</html>