<?php
   $link = mysql_connect('localhost', 'root');
 	
   if (!$link) {
      die('Não foi possível conectar: ' . mysql_error());
   }

   $sql = 'DROP DATABASE beta';
   
   if (mysql_query($sql, $link)) {
      echo "O banco de dados beta foi removido\n";
   } 
   else {
      echo 'Erro removendo o banco de dados: beta' . mysql_error() . "\n";
   }
	
   mysql_close ();
   
?>

<?php
   $link = mysql_connect('localhost', 'root');
 	
   if (!$link) {
      die('Não foi possível conectar: ' . mysql_error());
   }

   $sql = 'CREATE DATABASE beta';
   
   if (mysql_query($sql, $link)) {
      echo "O banco de dados beta foi criado\n";
   } 
   else {
      echo 'Erro criando o banco de dados: beta' . mysql_error() . "\n";
   }
	
   mysql_close ();
   
?>



<?php
   $link = mysql_connect('localhost', 'root');
 	
   if (!$link) {
      die('Não foi possível conectar com: beta' . mysql_error());
   }
   
   mysql_select_db("beta") or die(mysql_error());	
	
   mysql_query("CREATE TABLE Usuario (
    idUsuario INT (3) AUTO_INCREMENT not null,
	nome VARCHAR (100) not null,
	sexo VARCHAR (10) not null,
	dataNasc date not null,
	curso VARCHAR (50) not null,
	semestre VARCHAR (15) not null,
	periodo VARCHAR (15) not null,
	email VARCHAR (100)not null,
	senha VARCHAR (30) not null,
	imagem VARCHAR (10000),
		
	constraint pk_Usuario PRIMARY KEY(idUsuario)
   )") 
   Or die(mysql_error());
	
   mysql_close ();
   
?>

<?php
   $link = mysql_connect('localhost', 'root');
 	
   if (!$link) {
      die('Não foi possível conectar com: beta' . mysql_error());
   }
   
   mysql_select_db("beta") or die(mysql_error());	
	
   mysql_query("INSERT INTO Usuario
   				VALUES (1, 'Pedro Miranda', 'Masculino', 19950220, 'Análise e Desenvolvimento de Sistemas', '6º Semestre', 'Noturno', 'pedrorsmiranda@gmail.com', 'Pedro', 'vazio'),
					   (2, 'Silmara Brito', 'Feminino', 19931109, 'Análise e Desenvolvimento de Sistemas', '6º Semestre', 'Noturno', 'silmara.brito@gmail.com', 'Silmara', 'vazio'),
					   (3, 'Neilson Gadote', 'Masculino', 19930911, 'Análise e Desenvolvimento de Sistemas', '6º Semestre', 'Noturno', 'nei_ferreira@gmail.com', 'Neilson', 'vazio'),
					   (4, 'Rosimeire Simoni', 'Feminino', 19630331, 'Análise e Desenvolvimento de Sistemas', '6º Semestre', 'Noturno', 'rosimeire_simoni@gmail.com', 'Rosimeire', 'vazio'),
					   (5, 'Vinícius Delgado', 'Masculino', 19950206, 'Automação Industrial', '3º Semestre', 'Noturno', 'vinicius.delgado@gmail.com', 'Vinícius', 'vazio'),
					   (6, 'Gabriela Leite', 'Feminino', 19951010, 'Matemática', '1º Semestre', 'Matutino', 'gabriela.leite@gmail.com', 'Gabriela', 'vazio'),
					   (7, 'Renan Gallardo', 'Masculino', 19950227, 'Automação Industrial', '4º Semestre', 'Vespertino', 'renan.gallardo@gmail.com', 'Renan', 'vazio'),
					   (8, 'Bruna Cristina', 'Feminino', 19940930, 'Matemática', '5º Semestre', 'Matutino', 'bruna.cristina@gmail.com', 'Bruna', 'vazio'),
					   (9, 'João Magane', 'Masculino', 19950720, 'Análise e Desenvolvimento de Sistemas', 'Formado', 'Noturno', 'joao.magane@gmail.com', 'João', 'vazio'),
       				   (10, 'Rhenan', 'Masculino', 19910216, 'Automação Industrial', 'Formado', 'Noturno', 'rhenan@gmail.com', 'Rhenan', 'vazio') ")
   Or die(mysql_error());
   
   mysql_close ();
   
?>



<?php

	$link = mysql_connect('localhost', 'root');
  
	if(!$link){
		die('Não foi possível establecer conexão com o banco de dados!');
	}
	
	mysql_select_db("beta") or die (mysql_error());
	
	mysql_query("
	
		CREATE TABLE Caderno(
			idCaderno INT (3) AUTO_INCREMENT not null,
			cod_usu INT (3) not null,
			nome VARCHAR (100) not null,
			publico BOOLEAN not null,
			cor VARCHAR (8),
			
			constraint pk_Caderno PRIMARY KEY(idCaderno),
			constraint fk_Caderno_Usuario_id FOREIGN KEY(cod_usu) references Usuario(idUsuario)
		)
	") 
	
   Or die(mysql_error());
	
   mysql_close ();
	
?>

<?php
   $link = mysql_connect('localhost', 'root');
 	
   if (!$link) {
      die('Não foi possível conectar com: beta' . mysql_error());
   }
   
   mysql_select_db("beta") or die(mysql_error());	
	
   mysql_query("INSERT INTO Caderno 
   				VALUES (1, 1, 'Códigos 1º ano', 0, 'c48181'), 
					   (2, 1, 'PHP', 0, 'c48181'),
					   (3, 1, 'Trabalhos Programação', 0, 'c48181'),
					   (4, 4, 'Pesquisa redes', 1, 'c48181'),
					   (5, 2, 'Layouts Downloads', 0, 'c48181'),
					   (6, 3, 'POO - Java Desktop', 0, 'c48181'),
					   (7, 2, 'ABNT - Lídia', 1, 'c48181'),
					   (8, 5, 'corrente alternada - exemplos', 0, 'c48181'),
					   (9, 6, 'Grupos e classes de números', 0, 'c48181'),
					   (10, 7, 'Circuito em Paralelo', 0, 'c48181'),
					   (11, 8, 'Números primos', 0, 'c48181'),
					   (12, 7, 'Arduíno - links p/ pesquisa', 1, 'c48181'),
					   (13, 7, 'Valência', 0, 'c48181'),
					   (14, 9, 'PHP POO', 0, 'c48181'),
					   (15, 8, 'Fórmulas - 2º Semestre', 0, 'c48181'),
					   (16, 10, 'Estágio', 0, 'c48181'),
					   (17, 10, 'Links de referência - 1º Semestre', 0, 'c48181'),
					   (18, 10, 'Provas e Respostas - PDF', 1, 'c48181'),
					   (19, 10, 'Concurso', 0, 'c48181'),
					   (20, 4, 'C/C#', 0, 'c48181') ")
   Or die(mysql_error());
	
   mysql_close ();
   
?>



<?php

	$link = mysql_connect('localhost', 'root');
  
	if(!$link){
		die('Não foi possível establecer conexão com o banco de dados!');
	}
	
	mysql_select_db("beta") or die (mysql_error());
	
	mysql_query("
	
		CREATE TABLE Arquivo(
			idArquivo INT (7) AUTO_INCREMENT not null,
			idCaderno INT (3) not null,
			nome VARCHAR (100) not null,
			descricao VARCHAR(100) not null,
			url VARCHAR(10000) not null,
			extensao VARCHAR(10) not null,
			
			constraint pk_Arquivo PRIMARY KEY(idArquivo),
			constraint fk_Arquivo_Caderno_id FOREIGN KEY(idCaderno) references Caderno(idCaderno)
		)
	") 
	
   Or die(mysql_error());
	
   mysql_close ();
	
?>

<?php
   $link = mysql_connect('localhost', 'root');
 	
   if (!$link) {
      die('Não foi possível conectar com: beta' . mysql_error());
   }
   
   mysql_select_db("beta") or die(mysql_error());	
	
   mysql_query("INSERT INTO Arquivo 
   				VALUES (1, 1, 'teste', 'teste', 'teste', 'teste') ") 
   Or die(mysql_error());
	
   mysql_close ();
   
?>



<?php

	$link = mysql_connect('localhost', 'root');
  
	if(!$link){
		die('Não foi possível establecer conexão com o banco de dados!');
	}
	
	mysql_select_db("beta") or die (mysql_error());
	
	mysql_query("
	
		CREATE TABLE Grupo(
			idGrupo INT (11) AUTO_INCREMENT not null,
			idFundador INT (3) not null,
			nomeGrupo VARCHAR (50) not null,
			
			constraint pk_Grupo  PRIMARY KEY(idGrupo),
			constraint fk_Grupo_Usuario FOREIGN KEY(idFundador) references Usuario(idUsuario)
		)
	") 

   Or die(mysql_error());

   mysql_close ();
	
?>

<?php
   $link = mysql_connect('localhost', 'root');
 	
   if (!$link) {
      die('Não foi possível conectar com: beta' . mysql_error());
   }
   
   mysql_select_db("beta") or die(mysql_error());	
	
   mysql_query("INSERT INTO Grupo 
   				VALUES (1, 1, 'TI'),					   
					   (2, 4, 'IF Valley'),
					   (3, 5, 'Revolução Industrial'),
					   (4, 6, 'Poucos Raros Matemáticos')
				")
   Or die(mysql_error());
	
   mysql_close ();
   
?>



<?php

	$link = mysql_connect('localhost', 'root');
  
	if(!$link){
		die('Não foi possível establecer conexão com o banco de dados!');
	}
	
	mysql_select_db("beta") or die (mysql_error());
	
	mysql_query("
	
		CREATE TABLE ParticipantesGrupo(
			idPG INT (11) AUTO_INCREMENT not null,
			idGrupo INT (11) not null,
			idParticipante INT (3) not null,
			nomeGrupo VARCHAR (50) not null,
			
			constraint pk_ParticipantesGrupo PRIMARY KEY(idPG),
			constraint fk_ParticipantesGrupo_Grupo FOREIGN KEY(idGrupo) references Grupo(idGrupo),
			constraint fk_ParticipantesGrupo_Usuario FOREIGN KEY(idParticipante) references Usuario(idUsuario)
		)
	") 

   Or die(mysql_error());

   mysql_close ();
	
?>

<?php
   $link = mysql_connect('localhost', 'root');
 	
   if (!$link) {
      die('Não foi possível conectar com: beta' . mysql_error());
   }
   
   mysql_select_db("beta") or die(mysql_error());	
	
   mysql_query("INSERT INTO ParticipantesGrupo 
   				VALUES (1, 1, 2, 'TI'),					   
					   (2, 1, 3, 'TI'),
					   (3, 1, 4, 'TI'),
					   (4, 1, 9, 'TI'),
					   (5, 2, 2, 'IF Valley'),
					   (6, 2, 9, 'IF Valley'),
					   (7, 3, 7, 'Revolução Industrial'),
					   (8, 3, 10, 'Revolução Industrial'),
					   (9, 3, 9, 'Revolução Industrial'),
					   (10, 4, 7, 'Poucos Raros Matemáticos'),
					   (11, 4, 10, 'Poucos Raros Matemáticos'),
					   (12, 4, 8, 'Poucos Raros Matemáticos')
				")
   Or die(mysql_error());
	
   mysql_close ();
   
?>



<?php

	$link = mysql_connect('localhost', 'root');
  
	if(!$link){
		die('Não foi possível establecer conexão com o banco de dados!');
	}
	
	mysql_select_db("beta") or die (mysql_error());
	
	mysql_query("
	
		CREATE TABLE Mensagem(
			idMensagem INT (11) AUTO_INCREMENT not null,
			idGrupo INT (11) not null,
			idUsuario INT (3) not null,
			nomeUsuario VARCHAR (100) not null,
			mensagem VARCHAR (500) not null,
			data VARCHAR (12),
			hora VARCHAR (10),
			
			constraint pk_Mensagens PRIMARY KEY(idMensagem),
			constraint fk_Mensagens_Grupo_id FOREIGN KEY(idGrupo) references Grupo(idGrupo),
			constraint fk_Mensagens_Usuario_id FOREIGN KEY(idUsuario) references Usuario(idUsuario)
		)
	") 
	
   Or die(mysql_error());

   mysql_close ();
	
?>

<?php
   $link = mysql_connect('localhost', 'root');
	
   if (!$link) {
      die('Não foi possível conectar com: beta' . mysql_error());
   }
   
   mysql_select_db("beta") or die(mysql_error());	
   
   mysql_query("INSERT INTO Mensagem 
   				VALUES (1, 1, 1, 'Pedro Miranda', 'Aêêêê!!!', '01/02/2016', '11:00:54'),
					   (2, 1, 2, 'Silmara Brito', '\o/', '01/02/2016', '11:12:06'),
					   (3, 1, 1, 'Pedro Miranda', 'Temos prova quando, mesmo?', '01/02/2016', '11:20:00'),
					   (4, 1, 2, 'Silmara Brito', 'Próxima semana. Quinta feira', '11/02/2016', '18:04:12')")
   Or die(mysql_error());
	
   mysql_close ();
   
?>

<?php

	$link = mysql_connect('localhost', 'root');
  
	if(!$link){
		die('Não foi possível establecer conexão com o banco de dados!');
	}
	
	mysql_select_db("beta") or die (mysql_error());
	
	mysql_query("
	
		CREATE TABLE Forum(
			idTopico INT (3) AUTO_INCREMENT not null,
			idNo INT (3) not null,
			idCriador INT (3) not null,
			nomeCriador VARCHAR(100) not null,
			titulo VARCHAR (100) not null,
			respostas INT(4) not null,
			
			constraint pk_Forum PRIMARY KEY(idTopico),
			constraint fk_Forum_Usuario_id FOREIGN KEY(idCriador) references Usuario(idUsuario)
		)
	") 

   Or die(mysql_error());

   mysql_close ();

?>

<?php
   $link = mysql_connect('localhost', 'root');
	
   if (!$link) {
      die('Não foi possível conectar com: beta' . mysql_error());
   }
   
   mysql_select_db("beta") or die(mysql_error());	
	
   mysql_query("INSERT INTO Forum 
   				VALUES (1, 11, 1, 'teste', 'Hibernate Java', 0),
					   (2, 12, 1, 'teste', 'Restful', 0)
					    ")
   Or die(mysql_error());
	
   mysql_close ();
   
?>

<?php

	$link = mysql_connect('localhost', 'root');
  
	if(!$link){
		die('Não foi possível establecer conexão com o banco de dados!');
	}
	
	mysql_select_db("beta") or die (mysql_error());
	
	mysql_query("
	
		CREATE TABLE Comentario(
			idComentario INT (11) AUTO_INCREMENT not null,
			idTopico INT (3) not null,
			idUsuario INT (3) not null,
			nome VARCHAR (100) not null,
			imagem VARCHAR (10000),
			curso VARCHAR (50) not null,
			semestre VARCHAR (15) not null,
			comentario TEXT not null,
			data VARCHAR (12) not null,
			hora VARCHAR (10) not null,
			
			constraint pk_Comentario PRIMARY KEY(idComentario),
			constraint fk_Comentario_Usuario_id FOREIGN KEY (idUsuario) references Usuario (idUsuario)
		)
	") 

   Or die(mysql_error());

   mysql_close ();

?>

<?php
   $link = mysql_connect('localhost', 'root');
	
   if (!$link) {
      die('Não foi possível conectar com: beta' . mysql_error());
   }
   
   mysql_select_db("beta") or die(mysql_error());	

   mysql_query("INSERT INTO Comentario
   				VALUES (1, 1, 1, 'teste', 'vazio', 'teste', 'teste', 'Qual versão está usando? Dependendo da versão o procedimento é outro.', '25/03/2016', '23:22:00'),
					   (2, 2, 2, 'teste2', 'vazio', 'teste2', 'teste2', 'Pesquisa na Wikipedia!', '31/03/2016', '12:15:00')
					    ")
   Or die(mysql_error());
	
   mysql_close ();
   
?>
