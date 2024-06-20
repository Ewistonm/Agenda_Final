CREATE DATABASE IF NOT EXISTS agenda_contatos;
USE agenda_contatos;

CREATE TABLE IF NOT EXISTS contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(100),
);

-- Exemplos de dados iniciais (opcional)
INSERT INTO contatos (nome, telefone, email) VALUES
('Ewiston N Mattos', '(18) 9876-5432', 'ewiston@example.com'),
('Bertoldo Brecha', '(18) 3256-5432', 'bertoldo@example.com'),
('Rolando Lero', '(18) 7412-5432', 'lero_rolando@example.com'),
('Dona Catifunda', '(18) 9632-5432', 'Cati_Smoke@example.com'),;