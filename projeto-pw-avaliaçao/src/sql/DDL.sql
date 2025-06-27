CREATE DATABASE todolist;
USE todolist;


CREATE TABLE usuarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR (100) NOT NULL UNIQUE,
    nome VARCHAR  (100) NOT NULL,
    senha VARCHAR (255)

);


CREATE TABLE projetos (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
descricao TEXT
);

CREATE TABLE tarefas (
id INT AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(100) NOT NULL,
descricao TEXT,
projeto_id INT,
usuario_id INT,
FOREIGN KEY (projeto_id) REFERENCES projetos(id),
FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);

INSERT INTO projetos (nome, descricao) VALUES 
('Projeto simples de PW', 'Portifólio para github'), 
('App de Tarefas', 'Aplicativo para controle de tarefas');