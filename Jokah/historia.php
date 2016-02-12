<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Navega&ccedil;&atilde;o Responsiva 4</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    </head>
    
    <body>
        <?php include("seguranca.php"); // Inclui o arquivo com o sistema de seguranзa 
    		protegePagina(); // Chama a funзгo que protege a pбgina 
    	?>
 
    <nav class="nav nav-aberta">
        <div class="wrap">
            <ul class="listaNav">
            	<li><a href="home.php"><img src="img/logo_menu.png" height="45px" /></a><hr/></li>
            	<li><a href="historia.php">HIST&Oacute;RIA AFRO-BRASILEIRA</a><hr/></li>
                <li><a href="heranca.php">CULINARIA AFRO</a><hr/></li>
                <li><a href="musica.php">INFLU&Ecirc;NCIAS MUSICAIS</a><hr/></li>
                <li><a href="religiao.php">RELIGI&Otilde;ES</a><hr/></li>
                </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                <li><hr/><a class="inner-link" href="logout.php">SAIR</a><hr/></li>
             </ul>
         </div>
    </nav>
    
	
     
    <div id="camada1">Hist&oacute;ria </div>
    
        <div class="camada">
      

        <h1>Seja Bem vindo <?php echo $_SESSION['usuarioNome'];?></h1>
 
    	<?php
      		include 'config.php';
      		include 'mysqlexecuta.php';
      		$con=conectar();
      		include 'banco.php';
      		$sql="select * from tbl_aula where cod_materia=2";
      		$res = mysqlexecuta($con,$sql);
    	?>
    	
        <div class="post">              
    	<?php
       		 while ($row=mysql_fetch_array($res)) {
    	?>
    
        <h1><?php echo $row['nome_aula'];?></br></h1>

        <center><iframe class="video" src="https://www.youtube.com/embed/<?php echo $row['url_videoaula'];?>" frameborder="0" allowfullscreen></iframe> </span><br></center>
        
        <div class="botao"><a href="<?php echo $row['url_docaula'];?>" download="<?php echo $row['url_docaula'];?>">    <img src="imagens/btn_docaula.png" width="100%" />   </a></div>
        
        <div class="botao"><a href="<?php echo $row['url_pptaula'];?>" download="<?php echo $row['url_pptaula'];?>">    <img src="imagens/btn_pptaula.png" width="100%" />    </a></div>
        
        <div class="botao"><a href="#" download="">  <img src="imagens/btn_exercicio.png" width="100%" />  </a></div>
        </br></br></br></br>
      
         
          <?php

        }

       ?>
      </div>
        
        
       
      </div>
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
	
    </body>
</html>