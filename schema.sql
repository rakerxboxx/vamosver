-- Criação do banco de dados O Democrata
-- Execute este script para criar todas as tabelas necessárias

-- Tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    cpf VARCHAR(14) UNIQUE,
    data_nascimento DATE,
    endereco TEXT,
    cidade VARCHAR(100),
    estado VARCHAR(2),
    cep VARCHAR(10),
    tipo_usuario ENUM('cidadao', 'instituicao', 'admin') DEFAULT 'cidadao',
    plano_id INT DEFAULT 1,
    status ENUM('ativo', 'inativo', 'banido') DEFAULT 'ativo',
    email_verificado BOOLEAN DEFAULT FALSE,
    pontos_reputacao INT DEFAULT 0,
    avatar VARCHAR(255),
    bio TEXT,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ultima_atividade TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_tipo_usuario (tipo_usuario),
    INDEX idx_status (status)
);

-- Tabela de planos
CREATE TABLE IF NOT EXISTS planos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) DEFAULT 0.00,
    periodo ENUM('mensal', 'anual', 'gratuito') DEFAULT 'mensal',
    limite_denuncias INT DEFAULT 5,
    limite_propostas INT DEFAULT 2,
    recursos JSON,
    ativo BOOLEAN DEFAULT TRUE,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Inserir planos padrão
INSERT INTO planos (nome, descricao, preco, periodo, limite_denuncias, limite_propostas, recursos) VALUES
('Cidadão Básico', 'Plano gratuito para participação básica', 0.00, 'gratuito', 5, 2, '{"suporte": "email", "analytics": false, "prioridade": false}'),
('Cidadão Pro', 'Plano premium com recursos avançados', 19.90, 'mensal', -1, -1, '{"suporte": "prioritario", "analytics": true, "prioridade": true}'),
('Organização', 'Plano para organizações e empresas', 49.90, 'mensal', -1, -1, '{"suporte": "24x7", "analytics": true, "prioridade": true, "multi_usuarios": true, "api_access": true}');

-- Tabela de categorias
CREATE TABLE IF NOT EXISTS categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    descricao TEXT,
    icone VARCHAR(50),
    cor VARCHAR(7) DEFAULT '#2563eb',
    ativa BOOLEAN DEFAULT TRUE,
    ordem INT DEFAULT 0
);

-- Inserir categorias padrão
INSERT INTO categorias (nome, descricao, icone, cor, ordem) VALUES
('Saúde', 'Questões relacionadas à saúde pública', 'fas fa-heartbeat', '#ef4444', 1),
('Educação', 'Problemas e propostas educacionais', 'fas fa-graduation-cap', '#3b82f6', 2),
('Transporte', 'Transporte público e mobilidade urbana', 'fas fa-bus', '#10b981', 3),
('Segurança', 'Segurança pública e policiamento', 'fas fa-shield-alt', '#f59e0b', 4),
('Infraestrutura', 'Obras, ruas, iluminação e saneamento', 'fas fa-road', '#8b5cf6', 5),
('Meio Ambiente', 'Questões ambientais e sustentabilidade', 'fas fa-leaf', '#059669', 6),
('Administração', 'Serviços administrativos públicos', 'fas fa-building', '#6b7280', 7);

-- Tabela de instituições
CREATE TABLE IF NOT EXISTS instituicoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    nome_oficial VARCHAR(200) NOT NULL,
    tipo ENUM('municipal', 'estadual', 'federal', 'privada') NOT NULL,
    cnpj VARCHAR(18) UNIQUE,
    endereco TEXT,
    telefone VARCHAR(20),
    email_oficial VARCHAR(150),
    site VARCHAR(255),
    responsavel VARCHAR(100),
    cargo_responsavel VARCHAR(100),
    verificada BOOLEAN DEFAULT FALSE,
    avaliacao_media DECIMAL(3,2) DEFAULT 0.00,
    total_avaliacoes INT DEFAULT 0,
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    INDEX idx_tipo (tipo),
    INDEX idx_verificada (verificada)
);

-- Tabela de reclamações/denúncias
CREATE TABLE IF NOT EXISTS reclamacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    categoria_id INT NOT NULL,
    instituicao_id INT,
    titulo VARCHAR(200) NOT NULL,
    descricao TEXT NOT NULL,
    endereco TEXT,
    latitude DECIMAL(10, 8),
    longitude DECIMAL(11, 8),
    cidade VARCHAR(100),
    estado VARCHAR(2),
    prioridade ENUM('baixa', 'media', 'alta', 'urgente') DEFAULT 'media',
    status ENUM('pendente', 'em_analise', 'em_andamento', 'resolvida', 'rejeitada') DEFAULT 'pendente',
    visibilidade ENUM('publica', 'privada') DEFAULT 'publica',
    anonima BOOLEAN DEFAULT FALSE,
    votos_positivos INT DEFAULT 0,
    votos_negativos INT DEFAULT 0,
    visualizacoes INT DEFAULT 0,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    data_resolucao TIMESTAMP NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id),
    FOREIGN KEY (instituicao_id) REFERENCES instituicoes(id) ON DELETE SET NULL,
    INDEX idx_status (status),
    INDEX idx_categoria (categoria_id),
    INDEX idx_data_criacao (data_criacao),
    INDEX idx_localizacao (latitude, longitude)
);

-- Tabela de propostas
CREATE TABLE IF NOT EXISTS propostas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    categoria_id INT NOT NULL,
    titulo VARCHAR(200) NOT NULL,
    descricao TEXT NOT NULL,
    justificativa TEXT,
    impacto_esperado TEXT,
    custo_estimado DECIMAL(15,2),
    prazo_implementacao INT, -- em dias
    status ENUM('rascunho', 'em_votacao', 'aprovada', 'rejeitada', 'implementada') DEFAULT 'rascunho',
    votos_favor INT DEFAULT 0,
    votos_contra INT DEFAULT 0,
    apoios INT DEFAULT 0,
    visualizacoes INT DEFAULT 0,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_votacao_inicio TIMESTAMP NULL,
    data_votacao_fim TIMESTAMP NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id),
    INDEX idx_status (status),
    INDEX idx_categoria (categoria_id),
    INDEX idx_data_criacao (data_criacao)
);

-- Tabela de comentários
CREATE TABLE IF NOT EXISTS comentarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    tipo_conteudo ENUM('reclamacao', 'proposta') NOT NULL,
    conteudo_id INT NOT NULL,
    comentario_pai_id INT NULL,
    conteudo TEXT NOT NULL,
    votos_positivos INT DEFAULT 0,
    votos_negativos INT DEFAULT 0,
    status ENUM('ativo', 'moderado', 'removido') DEFAULT 'ativo',
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (comentario_pai_id) REFERENCES comentarios(id) ON DELETE CASCADE,
    INDEX idx_conteudo (tipo_conteudo, conteudo_id),
    INDEX idx_data_criacao (data_criacao)
);

-- Tabela de votos
CREATE TABLE IF NOT EXISTS votos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    tipo_conteudo ENUM('reclamacao', 'proposta', 'comentario') NOT NULL,
    conteudo_id INT NOT NULL,
    tipo_voto ENUM('positivo', 'negativo') NOT NULL,
    data_voto TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    UNIQUE KEY unique_voto (usuario_id, tipo_conteudo, conteudo_id),
    INDEX idx_conteudo (tipo_conteudo, conteudo_id)
);

-- Tabela de anexos/arquivos
CREATE TABLE IF NOT EXISTS anexos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    tipo_conteudo ENUM('reclamacao', 'proposta', 'comentario') NOT NULL,
    conteudo_id INT NOT NULL,
    nome_original VARCHAR(255) NOT NULL,
    nome_arquivo VARCHAR(255) NOT NULL,
    tipo_arquivo VARCHAR(100),
    tamanho INT,
    caminho VARCHAR(500),
    data_upload TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    INDEX idx_conteudo (tipo_conteudo, conteudo_id)
);

-- Tabela de notificações
CREATE TABLE IF NOT EXISTS notificacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    titulo VARCHAR(200) NOT NULL,
    mensagem TEXT NOT NULL,
    link VARCHAR(500),
    lida BOOLEAN DEFAULT FALSE,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    INDEX idx_usuario_lida (usuario_id, lida),
    INDEX idx_data_criacao (data_criacao)
);

-- Tabela de respostas das instituições
CREATE TABLE IF NOT EXISTS respostas_instituicoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    reclamacao_id INT NOT NULL,
    instituicao_id INT NOT NULL,
    usuario_responsavel_id INT NOT NULL,
    resposta TEXT NOT NULL,
    status_resposta ENUM('informativa', 'em_andamento', 'resolvida', 'nao_procede') NOT NULL,
    data_resposta TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (reclamacao_id) REFERENCES reclamacoes(id) ON DELETE CASCADE,
    FOREIGN KEY (instituicao_id) REFERENCES instituicoes(id) ON DELETE CASCADE,
    FOREIGN KEY (usuario_responsavel_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    INDEX idx_reclamacao (reclamacao_id),
    INDEX idx_instituicao (instituicao_id)
);

-- Tabela de avaliações das instituições
CREATE TABLE IF NOT EXISTS avaliacoes_instituicoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    instituicao_id INT NOT NULL,
    reclamacao_id INT,
    avaliacao INT NOT NULL CHECK (avaliacao >= 1 AND avaliacao <= 5),
    comentario TEXT,
    data_avaliacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (instituicao_id) REFERENCES instituicoes(id) ON DELETE CASCADE,
    FOREIGN KEY (reclamacao_id) REFERENCES reclamacoes(id) ON DELETE SET NULL,
    UNIQUE KEY unique_avaliacao (usuario_id, instituicao_id, reclamacao_id),
    INDEX idx_instituicao (instituicao_id)
);

-- Tabela de badges/conquistas
CREATE TABLE IF NOT EXISTS badges (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    icone VARCHAR(50),
    cor VARCHAR(7) DEFAULT '#2563eb',
    criterio JSON,
    ativa BOOLEAN DEFAULT TRUE
);

-- Inserir badges padrão
INSERT INTO badges (nome, descricao, icone, cor, criterio) VALUES
('Primeiro Passo', 'Fez sua primeira denúncia', 'fas fa-baby', '#10b981', '{"tipo": "primeira_denuncia"}'),
('Denunciante Ativo', 'Fez mais de 10 denúncias', 'fas fa-megaphone', '#f59e0b', '{"tipo": "total_denuncias", "valor": 10}'),
('Participativo', 'Comentou em mais de 20 posts', 'fas fa-comments', '#3b82f6', '{"tipo": "total_comentarios", "valor": 20}'),
('Influenciador', 'Recebeu mais de 100 votos positivos', 'fas fa-star', '#8b5cf6', '{"tipo": "votos_recebidos", "valor": 100}'),
('Solucionador', 'Teve 5 denúncias resolvidas', 'fas fa-check-circle', '#059669', '{"tipo": "denuncias_resolvidas", "valor": 5}');

-- Tabela de badges dos usuários
CREATE TABLE IF NOT EXISTS usuario_badges (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    badge_id INT NOT NULL,
    data_conquista TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (badge_id) REFERENCES badges(id) ON DELETE CASCADE,
    UNIQUE KEY unique_user_badge (usuario_id, badge_id)
);

-- Tabela de logs de atividades
CREATE TABLE IF NOT EXISTS logs_atividades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    acao VARCHAR(100) NOT NULL,
    tabela_afetada VARCHAR(50),
    registro_id INT,
    dados_anteriores JSON,
    dados_novos JSON,
    ip_address VARCHAR(45),
    user_agent TEXT,
    data_acao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE SET NULL,
    INDEX idx_usuario (usuario_id),
    INDEX idx_acao (acao),
    INDEX idx_data (data_acao)
);

-- Tabela de configurações do sistema
CREATE TABLE IF NOT EXISTS configuracoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    chave VARCHAR(100) UNIQUE NOT NULL,
    valor TEXT,
    descricao TEXT,
    tipo ENUM('string', 'number', 'boolean', 'json') DEFAULT 'string',
    data_atualizacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserir configurações padrão
INSERT INTO configuracoes (chave, valor, descricao, tipo) VALUES
('site_nome', 'O Democrata', 'Nome do site', 'string'),
('site_descricao', 'Plataforma de participação democrática e cidadã', 'Descrição do site', 'string'),
('limite_upload_mb', '10', 'Limite de upload em MB', 'number'),
('moderacao_automatica', 'true', 'Ativar moderação automática', 'boolean'),
('palavras_banidas', '["spam", "golpe", "fraude"]', 'Lista de palavras banidas', 'json'),
('email_notificacoes', 'true', 'Enviar notificações por email', 'boolean');

-- Criar usuário admin padrão
INSERT INTO usuarios (nome, email, senha, tipo_usuario, plano_id, status, email_verificado, pontos_reputacao) VALUES
('Administrador', 'admin@democrata.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', 3, 'ativo', TRUE, 10000);

-- Criar índices adicionais para performance
CREATE INDEX idx_reclamacoes_usuario_status ON reclamacoes(usuario_id, status);
CREATE INDEX idx_propostas_usuario_status ON propostas(usuario_id, status);
CREATE INDEX idx_comentarios_conteudo_status ON comentarios(tipo_conteudo, conteudo_id, status);
CREATE INDEX idx_notificacoes_usuario_data ON notificacoes(usuario_id, data_criacao DESC);

-- Views úteis para relatórios
CREATE VIEW vw_estatisticas_usuarios AS
SELECT 
    u.id,
    u.nome,
    u.email,
    u.tipo_usuario,
    u.pontos_reputacao,
    COUNT(DISTINCT r.id) as total_reclamacoes,
    COUNT(DISTINCT p.id) as total_propostas,
    COUNT(DISTINCT c.id) as total_comentarios,
    u.data_cadastro
FROM usuarios u
LEFT JOIN reclamacoes r ON u.id = r.usuario_id
LEFT JOIN propostas p ON u.id = p.usuario_id
LEFT JOIN comentarios c ON u.id = c.usuario_id
GROUP BY u.id;

CREATE VIEW vw_estatisticas_instituicoes AS
SELECT 
    i.id,
    i.nome_oficial,
    i.tipo,
    i.verificada,
    i.avaliacao_media,
    i.total_avaliacoes,
    COUNT(DISTINCT r.id) as total_reclamacoes_recebidas,
    COUNT(DISTINCT resp.id) as total_respostas_dadas,
    ROUND(COUNT(DISTINCT resp.id) * 100.0 / NULLIF(COUNT(DISTINCT r.id), 0), 2) as taxa_resposta
FROM instituicoes i
LEFT JOIN reclamacoes r ON i.id = r.instituicao_id
LEFT JOIN respostas_instituicoes resp ON i.id = resp.instituicao_id
GROUP BY i.id;
