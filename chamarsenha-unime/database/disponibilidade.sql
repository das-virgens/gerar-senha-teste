USE chamarsenha;

CREATE TABLE coordenadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    foto VARCHAR(255) NOT NULL,
    coord VARCHAR(50) NOT NULL,
    status VARCHAR(50) NOT NULL,
    name VARCHAR(100) NOT NULL,
    cursos TEXT NOT NULL
);

-- Inserir os dados fornecidos
INSERT INTO coordenadores (foto, coord, status, name, cursos) VALUES
('images/victor.png', 'victor', 'DISPONIVEL', 'Victor', 'EAD - 100% ONLINE, EAD - SEMIPRESENCIAL'),
('images/thamyris.png', 'pyCheck', 'DISPONIVEL', 'Thamyris Py', 'ODONTOLOGIA - PRESENCIAL'),
('images/osmundo.png', 'osmundoCheck', 'DISPONIVEL', 'Osmundo G.', 'ADMINISTRAÇÃO - PRESENCIAL, C COMPUTAÇÃO - PRESENCIAL, DIREITO - PRESENCIAL'),
('images/lucas.png', 'LucasCheck', 'DISPONIVEL', 'Lucas Cruz', 'NUTRIÇÃO - PRESENCIAL'),
('images/jose.png', 'joseCheckCoord', 'DISPONIVEL', 'José Gustavo', 'COORDENADOR ACADEMICO'),
('images/jack.png', 'jackCheck', 'INDISPONIVEL', 'Jackeline P.', 'ENFERMAGEM - PRESENCIAL, FARMÁCIA - PRESENCIAL'),
('images/dani.png', 'joseCheck', 'DISPONIVEL', 'Daniela de Melo', 'EDUCAÇÃO FÍSICA - PRESENCIAL, FISIOTERAPIA - PRESENCIAL, PSICOLOGIA - PRESENCIAL'),
('images/bruno.png', 'brunoCheck', 'DISPONIVEL', 'Bruno S.', 'ARQUITETURA - Presencial, AGRONOMIA - Presencial, ENGENHARIAS - Presencial');
