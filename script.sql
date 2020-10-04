-- Banco de dados acesso para exemplo de conexão por login em PHP
-- Criado em 01/10/2020, author GILBERTO JUAREZ FARIAS ÁVILA
-- Será usado a Função MD5 () para geração de senha criptografada
-- MySQL MD5() Calcula um checksum MD5 de 128 bits para uma string. 
-- O valor é retornado como uma string binária de 32 dígitos hexadecimais ou NULL 
-- se o argumento for NULL. O valor de retorno pode, por exemplo, ser usado como uma chave hash.
-- Algumas metodologias de Funções de criptografia
SELECT MD5('123');  
SELECT OLD_PASSWORD('123');
SELECT SHA1('123');

-- Criar tabela --
Create table usuarios (
		ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
        nome Varchar(70),
        email Varchar(100),
		usuario Varchar(30),
		senha Varchar(40),
        data_geracao DATETIME Default NOW(),
		Primary Key (ID)) ENGINE = MyISAM;
        
-- Seleciona e exibe dados da tabela 
select * from usuarios;  

-- Inserção de Dados na tabela --
INSERT INTO usuarios 
			(nome, email, usuario, senha, data_geracao) 
	 values 
			('Cirlania da Silva Souza'     , 'lindinha@gmail.com'                , 'lane'           , md5('123'), now()),
            ('GILBERTO JUAREZ FARIAS ÁVILA', 'gibadasilvasauro@gmail.com', 'Gilberto_Avila	', md5('123'), now());


-- Exclusão da tabela
drop table usuarios;
        
        

        
