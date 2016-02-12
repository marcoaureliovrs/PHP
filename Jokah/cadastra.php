<?php

if ($_POST["email"] == $_POST["email-confirm"]) {
    
    
    if ($_POST["senha"] == $_POST["senha-confirm"]) {
        
        
        $emailusuario =$_POST["email"];
        include("conecta.php");
		$con = conectar();
		selecionabd();
		$sql="SELECT * FROM tbl_usuario WHERE email_usuario = '$emailusuario' LIMIT 1";  // Revisa Select para colocar campos necessarios
		$query = mysqlexecuta($con, $sql);
		$resultado = mysql_fetch_assoc($query);
        
		
		if ($resultado['email_usuario'] == $emailusuario) {
            
            echo 'Email já existente';
        } else { 
               //Campos importados do formulario de cadastro
               $nomeusuario =$_POST["nome"];
               $emailusuario =$_POST["email"];
               $senhausuario =$_POST["senha"];
			   $permissaousuario= 1;
					
					
				//Conexão com o Banco de Dados

               // Comando de incersao de dados vindos do formulario
               $sqlusuario=" INSERT  INTO  maltlaua.tbl_usuario (
               `cod_usuario` ,
               `nome_usuario` ,
               `email_usuario` ,
			   `cod_nivel_usuario` ,
               `senha_usuario`
                )
               VALUES (
               NULL ,  '$nomeusuario', '$emailusuario',  '$permissaousuario',  '$senhausuario');";


               //Função que executa o comando SQL na conexão com o banco de dados.
               $addnew = mysqlexecuta($con,$sqlusuario); 
                 if ($addnew) {   
                   echo 'Cadastro realizado com sucesso! <a href="http://maltlaua.tecnologia.ws/Jokah/"> Clique Aqui </a> para continuar';
				 } } } else {
					echo 'A Senha digitada nos dois campos divergem';
		    	 } } else {
					echo 'O e-mail digitado nos dois campos divergem';
		    	 }
				 

					
?>