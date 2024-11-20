USE `chamarsenha`;

CREATE TABLE horario_coord (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    segunda_inicio TIME,
    segunda_fim TIME,
    terca_inicio TIME,
    terca_fim TIME,
    quarta_inicio TIME,
    quarta_fim TIME,
    quinta_inicio TIME,
    quinta_fim TIME,
    sexta_inicio TIME,
    sexta_fim TIME
);

INSERT INTO horario_coord (username, segunda_inicio, segunda_fim, terca_inicio, terca_fim, quarta_inicio, quarta_fim, quinta_inicio, quinta_fim, sexta_inicio, sexta_fim)
VALUES 
('jose', '19:00', '21:30', '16:00', '20:30', '18:00', '21:30', '23:58', '23:59', '23:58', '23:59'),
('thamyris', '19:00', '20:30', '18:00', '20:30', '18:00', '20:30', '08:00', '11:00', '23:58', '23:59'),
('bruno', '19:00', '21:00', '15:00', '18:00', '19:00', '21:00', '18:00', '22:00', '11:00', '21:00'),
('victor', '08:00', '21:00', '18:00', '21:00', '09:00', '21:00', '08:00', '21:00', '09:00', '12:00'),
('osmundo', '18:00', '20:00', '19:00', '20:00', '23:58', '23:59', '18:00', '20:00', '23:58', '23:59'),
('jack', '19:00', '21:00', '19:00', '21:00', '19:00', '21:00', '23:58', '23:59', '23:58', '23:59'),
('lucas', '23:58', '23:59', '23:58', '23:59', '18:30', '21:50', '23:58', '23:59', '23:58', '23:59');
