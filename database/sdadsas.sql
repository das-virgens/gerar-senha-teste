CREATE DATABASE gerarSenha;

USE gerarSenha;

CREATE TABLE tabela_disponibilidade (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  coordenador VARCHAR(255) NOT NULL,
  disponibilidade VARCHAR(50)
);

CREATE TABLE coordenadores (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(255) NOT NULL,
  especialidades VARCHAR(255) NOT NULL
);

CREATE TABLE disponibilidades (
  id INT AUTO_INCREMENT PRIMARY KEY,
  valor TINYINT(1) NOT NULL,
  coordenador VARCHAR(255) NOT NULL,
  FOREIGN KEY (coordenador) REFERENCES coordenadores(nome)
);



CREATE TABLE anhanguera_users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL
);

-- Criação da tabela para armazenar as senhas chamadas
CREATE TABLE IF NOT EXISTS senhas_chamadas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    coordenador VARCHAR(50) NOT NULL,
    senha VARCHAR(10) NOT NULL,
    data_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Altera a estrutura da tabela senhas_chamadas para adicionar a coluna coordenador
ALTER TABLE senhas_chamadas ADD COLUMN coordenador VARCHAR(50) NOT NULL;

