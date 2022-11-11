<!DOCTYPE html>
<html>
<head>
	<title>catalogo</title>
	<meta charset="utf-8">
</head>
<body>

 <center>
 <h1>Catálogo de produtos</h1>

 <form action="?" method="post">

 <label for="Nome">Nome do produto:</label>

 <select name="catalogo">
 	<option value="Monitor">Monitor</option>
 	<option value="Mouse">Mouse</option>
 	<option value="CPU">CPU</option>
 	<option value="Teclado">Teclado</option>
 	
 </select><br>

 <input type="submit" name="ver" value="ver detalhe" >

</form>

 <?php 
 @$produto = $_POST['catalogo'];
   
  if (!empty($produto)) {
  
   echo "<h1>Detalhes do produto</h1> <br>".
   "detalhes do ".$produto."<br>";
 
            if($produto == "Monitor") {
   	         echo "Marca : ACER"."<br>".
                   "Tamanho da tela : 23"."<br>".
                   "Série : KA242Y"."<br>".
                   "Resolução : 1920 x 1080"."<br>".
                   "Preço : 999,90"."<br>";

            }else if($produto == "Mouse") {
   	         echo "Marca : Logitech"."<br>".
                   "Série: MOUSE M190"."<br>".
                   "Cor : Cinza"."<br>".
                   "Preço : 59,90";
            }else if($produto == "CPU") {
   	        
            echo "Marca do processador  : Intel"."<br>".
                 "Tipo de processador   : Intel Core i5"."<br>".
                 "Velocidade do processador : 2.9 GHz"."<br>".
                 "Tamanho da memória    : 8 GB"."<br>".
                 "Tecnologia da memória : DDR3"."<br>".
                 "Tipo de Memória       :DDR3 SDRAM"."<br>".
                 "Tamanho do HD:1 TB";
            }
            else if($produto == "Teclado") {
   	             echo "Cor : Preto"."<br>".
                       "Descrição do teclado	  : Membrana"."<br>".
                       "Tecnologia de conexão	  : USB"."<br>".
                       "Características especiais : Compatível com Mac"."<br>".
                       "Dispositivos compatíveis  : Windows ou Mac OS"."<br>".
                       "Marca : Multilaser";
            
            }
  }

  ?>
</center>
 
</script>
</body>
</html>