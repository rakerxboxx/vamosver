<?php
session_start();

// Simulação de dados da instituição
$instituicao_data = [
    'nome' => 'Prefeitura Municipal',
    'tipo' => 'Administração Pública Municipal',
    'verificado' => true,
    'avaliacao' => 4.2,
    'total_avaliacoes' => 156,
    'reclamacoes_recebidas' => 127,
    'respondidas' => 89,
    'taxa_resposta' => 70,
    'tempo_medio_resposta' => 2.3,
    'taxa_resolucao' => 55
];

// Dados de categorias
$categorias = [
    ['nome' => 'Infraestrutura', 'count' => 45, 'cor' => '#f59e0b'],
    ['nome' => 'Trânsito', 'count' => 32, 'cor' => '#10b981'],
    ['nome' => 'Atendimento', 'count' => 28, 'cor' => '#3b82f6'],
    ['nome' => 'Limpeza', 'count' => 22, 'cor' => '#8b5cf6']
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $instituicao_data['nome']; ?> - O Democrata</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header Navigation -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-left">
                    <div class="logo">
                        <i class="fas fa-circle" style="color: var(--color-primary); margin-right: var(--space-8);"></i>
                        <span class="logo-text">O Democrata</span>
                    </div>
                    <div class="nav-menu">
                        <a href="index.php" class="nav-link">Início</a>
                        <a href="reclamacoes.php" class="nav-link">Reclamações</a>
                        <a href="propostas.php" class="nav-link">Propostas</a>
                        <a href="instituicoes.php" class="nav-link">Instituições</a>
                    </div>
                </div>
                <div class="nav-right">
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Buscar reclamações...">
                    </div>
                    <i class="fas fa-bell notification-icon"></i>
                    <i class="fas fa-user user-icon"></i>
                    <a href="dashboard.php" class="nav-btn">Dashboard</a>
                    <a href="admin.php" class="nav-btn">Admin</a>
                    <a href="instituicao.php" class="nav-btn active">Instituição</a>
                    <a href="#" class="nav-btn primary">Cadastrar</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Institution Dashboard -->
    <main class="dashboard-main">
        <div class="container">
            <!-- Institution Header -->
            <div class="dashboard-header">
                <div class="dashboard-title-section">
                    <h1>Dashboard da Instituição</h1>
                    <p>Gerencie reclamações e interações com cidadãos</p>
                </div>
                <div class="user-badge">
                    <i class="fas fa-building"></i>
                    <span><?php echo $instituicao_data['nome']; ?></span>
                </div>
            </div>

            <!-- Stats Overview -->
            <section class="dashboard-stats-section">
                <div class="dashboard-stats-grid">
                    <div class="dashboard-stat-card">
                        <div class="stat-icon blue">
                            <i class="fas fa-inbox"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Reclamações Recebidas</span>
                            <span class="stat-value"><?php echo $instituicao_data['reclamacoes_recebidas']; ?></span>
                        </div>
                    </div>

                    <div class="dashboard-stat-card">
                        <div class="stat-icon green">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Respondidas</span>
                            <span class="stat-value"><?php echo $instituicao_data['respondidas']; ?></span>
                        </div>
                    </div>

                    <div class="dashboard-stat-card">
                        <div class="stat-icon orange">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Tempo Médio de Resposta</span>
                            <span class="stat-value"><?php echo $instituicao_data['tempo_medio_resposta']; ?> dias</span>
                        </div>
                    </div>

                    <div class="dashboard-stat-card">
                        <div class="stat-icon purple">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Avaliação</span>
                            <span class="stat-value"><?php echo $instituicao_data['avaliacao']; ?>/5</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Dashboard Tabs -->
            <section class="dashboard-tabs-section">
                <div class="dashboard-tabs">
                    <button class="dashboard-tab active" data-tab="reclamacoes">Reclamações</button>
                    <button class="dashboard-tab" data-tab="estatisticas">Estatísticas</button>
                    <button class="dashboard-tab" data-tab="configuracoes">Configurações</button>
                    <button class="dashboard-tab" data-tab="relatorios">Relatórios</button>
                </div>

                <!-- Reclamações Tab -->
                <div class="tab-content active" id="reclamacoes">
                    <div class="section-header">
                        <h2><i class="fas fa-tasks"></i> Gestão de Reclamações</h2>
                        <p>Gerencie e responda às reclamações recebidas</p>
                    </div>

                    <div class="activities-tabs">
                        <button class="tab-btn active">Pendentes</button>
                        <button class="tab-btn">Em Andamento</button>
                        <button class="tab-btn">Resolvidas</button>
                        <button class="tab-btn">Todas</button>
                    </div>
                    
                    <div class="activities-list">
                        <div class="activity-item priority-high">
                            <div class="activity-header">
                                <h4>Semáforo quebrado na Av. Principal</h4>
                                <span class="activity-status em-analise">Pendente</span>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-category transito">Trânsito</span>
                                <span class="activity-date">2024-01-15</span>
                                <span class="activity-support">23 apoios</span>
                                <span class="activity-comments">8 comentários</span>
                            </div>
                            <div class="activity-actions">
                                <button class="btn btn--primary btn--sm">
                                    <i class="fas fa-reply"></i>
                                    Responder
                                </button>
                                <button class="btn btn--outline btn--sm">
                                    <i class="fas fa-flag"></i>
                                    Em Andamento
                                </button>
                                <button class="btn btn--outline btn--sm">
                                    <i class="fas fa-eye"></i>
                                    Ver Detalhes
                                </button>
                            </div>
                        </div>

                        <div class="activity-item priority-medium">
                            <div class="activity-header">
                                <h4>Buraco na rua causando transtornos</h4>
                                <span class="activity-status respondida">Em Andamento</span>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-category infraestrutura">Infraestrutura</span>
                                <span class="activity-date">2024-01-12</span>
                                <span class="activity-support">15 apoios</span>
                                <span class="activity-comments">5 comentários</span>
                            </div>
                            <div class="activity-actions">
                                <button class="btn btn--primary btn--sm">
                                    <i class="fas fa-reply"></i>
                                    Responder
                                </button>
                                <button class="btn btn--outline btn--sm">
                                    <i class="fas fa-check"></i>
                                    Resolver
                                </button>
                                <button class="btn btn--outline btn--sm">
                                    <i class="fas fa-eye"></i>
                                    Ver Detalhes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Estatísticas Tab -->
                <div class="tab-content" id="estatisticas">
                    <div class="section-header">
                        <h2><i class="fas fa-chart-pie"></i> Estatísticas da Instituição</h2>
                        <p>Analise o desempenho e engajamento da sua instituição</p>
                    </div>

                    <div class="progress-stats-grid">
                        <div class="progress-stat-card">
                            <h3>Taxa de Resposta</h3>
                            <div class="progress-stat-value">
                                <span class="current"><?php echo $instituicao_data['taxa_resposta']; ?></span>
                                <span class="percent">%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: <?php echo $instituicao_data['taxa_resposta']; ?>%"></div>
                            </div>
                            <span class="progress-label">Taxa de resposta às reclamações</span>
                        </div>

                        <div class="progress-stat-card">
                            <h3>Taxa de Resolução</h3>
                            <div class="progress-stat-value">
                                <span class="current"><?php echo $instituicao_data['taxa_resolucao']; ?></span>
                                <span class="percent">%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill success" style="width: <?php echo $instituicao_data['taxa_resolucao']; ?>%"></div>
                            </div>
                            <span class="progress-label">Taxa de resolução de casos</span>
                        </div>

                        <div class="progress-stat-card">
                            <h3>Tempo Médio de Resposta</h3>
                            <div class="progress-stat-value">
                                <span class="current"><?php echo $instituicao_data['tempo_medio_resposta']; ?></span>
                                <span class="percent">dias</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill warning" style="width: 60%"></div>
                            </div>
                            <span class="progress-label">Tempo médio para resposta</span>
                        </div>

                        <div class="progress-stat-card">
                            <h3>Avaliação Geral</h3>
                            <div class="progress-stat-value">
                                <span class="current"><?php echo $instituicao_data['avaliacao']; ?></span>
                                <span class="divider">/</span>
                                <span class="total">5</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: <?php echo ($instituicao_data['avaliacao'] / 5 * 100); ?>%"></div>
                            </div>
                            <span class="progress-label">Baseado em <?php echo $instituicao_data['total_avaliacoes']; ?> avaliações</span>
                        </div>
                    </div>

                    <div class="category-stats-section">
                        <h3><i class="fas fa-chart-bar"></i> Reclamações por Categoria</h3>
                        <div class="category-list">
                            <?php foreach($categorias as $categoria): ?>
                                <div class="category-item">
                                    <div class="category-info">
                                        <span class="category-name"><?php echo $categoria['nome']; ?></span>
                                        <span class="category-count"><?php echo $categoria['count']; ?></span>
                                    </div>
                                    <div class="category-bar">
                                        <div class="category-fill" style="width: <?php echo ($categoria['count'] / 45 * 100); ?>%; background: <?php echo $categoria['cor']; ?>"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Configurações Tab -->
                <div class="tab-content" id="configuracoes">
                    <div class="section-header">
                        <h2><i class="fas fa-cog"></i> Configurações da Instituição</h2>
                        <p>Gerencie as configurações e preferências da sua instituição</p>
                    </div>

                    <div class="config-sections">
                        <div class="config-section">
                            <h3>Informações da Instituição</h3>
                            <div class="config-form">
                                <div class="form-group">
                                    <label>Nome da Instituição</label>
                                    <input type="text" class="form-control" value="<?php echo $instituicao_data['nome']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <input type="text" class="form-control" value="<?php echo $instituicao_data['tipo']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" rows="4">Órgão público responsável pela administração municipal</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="config-section">
                            <h3>Preferências de Notificação</h3>
                            <div class="config-form">
                                <div class="form-group">
                                    <label>Email para notificações</label>
                                    <input type="email" class="form-control" value="contato@prefeitura.gov.br">
                                </div>
                                <div class="form-group">
                                    <label>Frequência de relatórios</label>
                                    <select class="form-control">
                                        <option>Diário</option>
                                        <option selected>Semanal</option>
                                        <option>Mensal</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="config-actions">
                            <button class="btn btn--primary">
                                <i class="fas fa-save"></i>
                                Salvar Configurações
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Relatórios Tab -->
                <div class="tab-content" id="relatorios">
                    <div class="section-header">
                        <h2><i class="fas fa-file-alt"></i> Relatórios</h2>
                        <p>Gere e visualize relatórios de desempenho</p>
                    </div>

                    <div class="reports-grid">
                        <div class="report-card">
                            <div class="report-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Relatório Mensal</h3>
                            <p>Desempenho geral do mês atual</p>
                            <button class="btn btn--outline">
                                <i class="fas fa-download"></i>
                                Baixar
                            </button>
                        </div>

                        <div class="report-card">
                            <div class="report-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>Relatório de Engajamento</h3>
                            <p>Interações e satisfação dos cidadãos</p>
                            <button class="btn btn--outline">
                                <i class="fas fa-download"></i>
                                Baixar
                            </button>
                        </div>

                        <div class="report-card">
                            <div class="report-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3>Relatório de Tempos</h3>
                            <p>Tempos médios de resposta e resolução</p>
                            <button class="btn btn--outline">
                                <i class="fas fa-download"></i>
                                Baixar
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <i class="fas fa-circle" style="color: var(--color-primary); margin-right: var(--space-8);"></i>
                        <span>O Democrata</span>
                    </div>
                    <p class="footer-description">
                        Plataforma de participação democrática e transparência cidadã.
                    </p>
                </div>
                
                <div class="footer-section">
                    <h4>Categorias</h4>
                    <ul>
                        <li><a href="#">Saúde Pública</a></li>
                        <li><a href="#">Educação</a></li>
                        <li><a href="#">Transporte</a></li>
                        <li><a href="#">Infraestrutura</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Sobre</h4>
                    <ul>
                        <li><a href="#">Como funciona</a></li>
                        <li><a href="#">Termos de uso</a></li>
                        <li><a href="#">Privacidade</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4>Transparência</h4>
                    <ul>
                        <li><a href="#">Relatórios mensais</a></li>
                        <li><a href="#">Instituições parceiras</a></li>
                        <li><a href="#">Estatísticas</a></li>
                        <li><a href="#">API pública</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2024 O Democrata. Todos os direitos reservados. Construindo democracia digital.</p>
            </div>
        </div>
    </footer>

    <!-- Institution Dashboard CSS -->
    <style>
        .priority-high {
            border-left: 4px solid var(--color-error);
        }

        .priority-medium {
            border-left: 4px solid var(--color-warning);
        }

        .category-stats-section {
            background: var(--color-surface);
            border-radius: var(--radius-lg);
            padding: var(--space-24);
            margin-top: var(--space-32);
            border: 1px solid var(--color-border);
        }

        .category-stats-section h3 {
            font-size: var(--font-size-xl);
            font-weight: var(--font-weight-semibold);
            margin-bottom: var(--space-20);
            color: var(--color-text);
            display: flex;
            align-items: center;
            gap: var(--space-12);
        }

        .category-list {
            display: flex;
            flex-direction: column;
            gap: var(--space-16);
        }

        .category-item {
            display: flex;
            flex-direction: column;
            gap: var(--space-8);
        }

        .category-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .category-name {
            font-size: var(--font-size-sm);
            color: var(--color-text);
            font-weight: var(--font-weight-medium);
        }

        .category-count {
            font-size: var(--font-size-sm);
            color: var(--color-text-secondary);
            font-weight: var(--font-weight-semibold);
        }

        .category-bar {
            width: 100%;
            height: 6px;
            background: var(--color-border);
            border-radius: 3px;
            overflow: hidden;
        }

        .category-fill {
            height: 100%;
            border-radius: 3px;
            transition: width var(--duration-normal) var(--ease-standard);
        }

        .reports-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: var(--space-24);
        }

        .report-card {
            background: var(--color-surface);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            padding: var(--space-24);
            text-align: center;
            transition: all var(--duration-normal) var(--ease-standard);
        }

        .report-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .report-icon {
            width: 60px;
            height: 60px;
            background: var(--color-primary);
            color: var(--color-btn-primary-text);
            border-radius: var(--radius-base);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: var(--font-size-2xl);
            margin: 0 auto var(--space-16);
        }

        .report-card h3 {
            font-size: var(--font-size-lg);
            font-weight: var(--font-weight-semibold);
            margin-bottom: var(--space-8);
            color: var(--color-text);
        }

        .report-card p {
            font-size: var(--font-size-sm);
            color: var(--color-text-secondary);
            margin-bottom: var(--space-20);
        }

        .config-sections {
            display: flex;
            flex-direction: column;
            gap: var(--space-32);
        }

        .config-section {
            border: 1px solid var(--color-border);
            border-radius: var(--radius-base);
            padding: var(--space-24);
        }

        .config-section h3 {
            font-size: var(--font-size-lg);
            font-weight: var(--font-weight-semibold);
            margin-bottom: var(--space-20);
            color: var(--color-text);
        }

        .config-form {
            display: flex;
            flex-direction: column;
            gap: var(--space-16);
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: var(--space-8);
        }

        .form-group label {
            font-size: var(--font-size-sm);
            font-weight: var(--font-weight-medium);
            color: var(--color-text);
        }

        .form-control {
            padding: var(--space-12) var(--space-16);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-base);
            font-size: var(--font-size-sm);
            transition: border-color var(--duration-normal) var(--ease-standard);
            background: var(--color-surface);
            color: var(--color-text);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--color-primary);
            box-shadow: 0 0 0 3px rgba(var(--color-primary-rgb), 0.1);
        }

        .config-actions {
            display: flex;
            justify-content: flex-end;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .reports-grid {
                grid-template-columns: 1fr;
            }

            .config-section {
                padding: var(--space-16);
            }
        }
    </style>

    <script>
        // Dashboard tabs functionality
        document.querySelectorAll('.dashboard-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active from all tabs and content
                document.querySelectorAll('.dashboard-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                // Add active to clicked tab and corresponding content
                this.classList.add('active');
                document.getElementById(this.dataset.tab).classList.add('active');
            });
        });

        // Activities tabs functionality
        document.querySelectorAll('.activities-tabs .tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active from all buttons
                document.querySelectorAll('.activities-tabs .tab-btn').forEach(b => b.classList.remove('active'));
                
                // Add active to clicked button
                this.classList.add('active');
                
                // Here you would typically filter the activities list
                console.log('Filtering complaints by:', this.textContent);
            });
        });
    </script>

    <script src="js/main.js"></script>
</body>
</html>