<?php
session_start();

// Simulação de dados do usuário
$user_data = [
    'name' => 'Rafael',
    'status' => 'Cidadão Ativo',
    'denuncias_abertas' => 3,
    'propostas_criadas' => 2,
    'comentarios_recebidos' => 15,
    'apoios_recebidos' => 47,
    'pontos_reputacao' => 1250,
    'badges' => ['🏆 Denunciante Ativo', '💬 Participativo']
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - O Democrata</title>
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
                    <a href="dashboard.php" class="nav-btn active">Dashboard</a>
                    <a href="admin.php" class="nav-btn">Admin</a>
                    <a href="instituicao.php" class="nav-btn">Instituição</a>
                    <a href="#" class="nav-btn primary">Cadastrar</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Dashboard Main -->
    <main class="dashboard-main">
        <div class="container">
            <!-- Dashboard Header -->
            <div class="dashboard-header">
                <div class="dashboard-title-section">
                    <h1>Dashboard do Cidadão</h1>
                    <p>Acompanhe seu impacto na democracia</p>
                </div>
                <div class="user-badge">
                    <i class="fas fa-user-check"></i>
                    <span><?php echo $user_data['status']; ?></span>
                </div>
            </div>

            <!-- Stats Overview -->
            <section class="dashboard-stats-section">
                <div class="dashboard-stats-grid">
                    <div class="dashboard-stat-card">
                        <div class="stat-icon blue">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Denúncias Abertas</span>
                            <span class="stat-value"><?php echo $user_data['denuncias_abertas']; ?></span>
                        </div>
                    </div>

                    <div class="dashboard-stat-card">
                        <div class="stat-icon green">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Propostas Criadas</span>
                            <span class="stat-value"><?php echo $user_data['propostas_criadas']; ?></span>
                        </div>
                    </div>

                    <div class="dashboard-stat-card">
                        <div class="stat-icon orange">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Comentários Recebidos</span>
                            <span class="stat-value"><?php echo $user_data['comentarios_recebidos']; ?></span>
                        </div>
                    </div>

                    <div class="dashboard-stat-card">
                        <div class="stat-icon purple">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Apoios Recebidos</span>
                            <span class="stat-value"><?php echo $user_data['apoios_recebidos']; ?></span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Dashboard Tabs -->
            <section class="dashboard-tabs-section">
                <div class="dashboard-tabs">
                    <button class="dashboard-tab active" data-tab="atividades">Minhas Atividades</button>
                    <button class="dashboard-tab" data-tab="reputacao">Reputação</button>
                    <button class="dashboard-tab" data-tab="notificacoes">Notificações</button>
                    <button class="dashboard-tab" data-tab="progresso">Progresso</button>
                </div>

                <!-- Atividades Tab -->
                <div class="tab-content active" id="atividades">
                    <div class="section-header">
                        <h2><i class="fas fa-chart-line"></i> Minhas Atividades</h2>
                        <p>Acompanhe suas contribuições para a democracia</p>
                        <div class="quick-actions">
                            <a href="nova-denuncia.php" class="btn btn--primary">
                                <i class="fas fa-plus"></i>
                                Nova Denúncia
                            </a>
                            <a href="nova-proposta.php" class="btn btn--outline">
                                <i class="fas fa-plus"></i>
                                Nova Proposta
                            </a>
                        </div>
                    </div>

                    <div class="activities-tabs">
                        <button class="tab-btn active">Denúncias</button>
                        <button class="tab-btn">Propostas</button>
                        <button class="tab-btn">Planos</button>
                        <button class="tab-btn">Interações</button>
                    </div>
                    
                    <div class="activities-list">
                        <div class="activity-item">
                            <div class="activity-header">
                                <h4>Buraco na Rua das Flores causa acidentes</h4>
                                <span class="activity-status em-analise">Em análise</span>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-category infraestrutura">Infraestrutura</span>
                                <span class="activity-date">2024-01-15</span>
                                <span class="activity-support">23 apoios</span>
                                <span class="activity-comments">8 comentários</span>
                            </div>
                            <div class="activity-actions">
                                <button class="btn btn--outline btn--sm">
                                    <i class="fas fa-eye"></i>
                                    Ver
                                </button>
                                <button class="btn btn--outline btn--sm">
                                    <i class="fas fa-edit"></i>
                                    Editar
                                </button>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-header">
                                <h4>Falta de médicos no Posto de Saúde Central</h4>
                                <span class="activity-status respondida">Respondida</span>
                            </div>
                            <div class="activity-meta">
                                <span class="activity-category saude">Saúde</span>
                                <span class="activity-date">2024-01-10</span>
                                <span class="activity-support">45 apoios</span>
                                <span class="activity-comments">12 comentários</span>
                            </div>
                            <div class="activity-actions">
                                <button class="btn btn--outline btn--sm">
                                    <i class="fas fa-eye"></i>
                                    Ver
                                </button>
                                <button class="btn btn--outline btn--sm">
                                    <i class="fas fa-edit"></i>
                                    Editar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reputação Tab -->
                <div class="tab-content" id="reputacao">
                    <div class="section-header">
                        <h2><i class="fas fa-trophy"></i> Reputação</h2>
                        <p>Seu status e conquistas na plataforma</p>
                    </div>

                    <div class="reputation-content">
                        <div class="reputation-score-card">
                            <div class="score-display">
                                <span class="score-number"><?php echo number_format($user_data['pontos_reputacao']); ?></span>
                                <span class="score-label">pontos de reputação</span>
                            </div>
                            <div class="score-progress">
                                <div class="progress-header">
                                    <span>Próximo nível</span>
                                    <span class="progress-value">250/2000</span>
                                </div>
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 12.5%"></div>
                                </div>
                            </div>
                        </div>

                        <div class="badges-section">
                            <h3>Conquistas</h3>
                            <div class="badges-grid">
                                <?php foreach($user_data['badges'] as $badge): ?>
                                    <div class="badge-item">
                                        <div class="badge-icon">🏆</div>
                                        <span class="badge-name"><?php echo $badge; ?></span>
                                    </div>
                                <?php endforeach; ?>
                                <div class="badge-item locked">
                                    <div class="badge-icon">🔒</div>
                                    <span class="badge-name">Líder Comunitário</span>
                                </div>
                                <div class="badge-item locked">
                                    <div class="badge-icon">🔒</div>
                                    <span class="badge-name">Influenciador</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notificações Tab -->
                <div class="tab-content" id="notificacoes">
                    <div class="section-header">
                        <h2><i class="fas fa-bell"></i> Notificações</h2>
                        <p>Suas atualizações e interações recentes</p>
                    </div>

                    <div class="notifications-container">
                        <div class="notification-item unread">
                            <div class="notification-icon">
                                <i class="fas fa-comment-dots"></i>
                            </div>
                            <div class="notification-content">
                                <h4>Prefeitura respondeu sua denúncia</h4>
                                <p>Sua denúncia sobre transporte público recebeu uma resposta oficial da prefeitura municipal.</p>
                                <span class="notification-time">2 horas atrás</span>
                            </div>
                            <div class="notification-actions">
                                <button class="btn-icon"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                        
                        <div class="notification-item">
                            <div class="notification-icon">
                                <i class="fas fa-thumbs-up"></i>
                            </div>
                            <div class="notification-content">
                                <h4>Novos apoios na sua proposta</h4>
                                <p>Sua proposta de ciclofaixas recebeu 10 novos apoios da comunidade.</p>
                                <span class="notification-time">1 dia atrás</span>
                            </div>
                            <div class="notification-actions">
                                <button class="btn-icon"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>

                        <div class="notification-item">
                            <div class="notification-icon">
                                <i class="fas fa-comment"></i>
                            </div>
                            <div class="notification-content">
                                <h4>Novo comentário na sua denúncia</h4>
                                <p>Ana Costa comentou na sua denúncia sobre a falta de médicos no posto de saúde.</p>
                                <span class="notification-time">3 dias atrás</span>
                            </div>
                            <div class="notification-actions">
                                <button class="btn-icon"><i class="fas fa-eye"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="view-all-container">
                        <a href="#" class="btn btn--outline">Ver todas as notificações</a>
                    </div>
                </div>

                <!-- Progresso Tab -->
                <div class="tab-content" id="progresso">
                    <div class="section-header">
                        <h2><i class="fas fa-chart-pie"></i> Meu Progresso</h2>
                        <p>Seu desempenho e engajamento este mês</p>
                    </div>

                    <div class="progress-stats-grid">
                        <div class="progress-stat-card">
                            <h3>Denúncias Ativas</h3>
                            <div class="progress-stat-value">
                                <span class="current">3</span>
                                <span class="divider">/</span>
                                <span class="total">5</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 60%"></div>
                            </div>
                            <span class="progress-label">60% do limite mensal</span>
                        </div>

                        <div class="progress-stat-card">
                            <h3>Propostas Criadas</h3>
                            <div class="progress-stat-value">
                                <span class="current">2</span>
                                <span class="divider">/</span>
                                <span class="total">3</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 67%"></div>
                            </div>
                            <span class="progress-label">67% do limite mensal</span>
                        </div>

                        <div class="progress-stat-card">
                            <h3>Taxa de Engajamento</h3>
                            <div class="progress-stat-value">
                                <span class="current">85</span>
                                <span class="percent">%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill success" style="width: 85%"></div>
                            </div>
                            <span class="progress-label">Excelente engajamento</span>
                        </div>

                        <div class="progress-stat-card">
                            <h3>Resolução de Casos</h3>
                            <div class="progress-stat-value">
                                <span class="current">40</span>
                                <span class="percent">%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill warning" style="width: 40%"></div>
                            </div>
                            <span class="progress-label">Média de resolução</span>
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

    <!-- Dashboard Specific CSS -->
    <style>
        .dashboard-main {
            background: var(--color-background);
            min-height: calc(100vh - 80px);
            padding: var(--space-32) 0;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: var(--space-32);
        }

        .dashboard-title-section h1 {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            margin-bottom: var(--space-8);
            color: var(--color-text);
        }

        .dashboard-title-section p {
            color: var(--color-text-secondary);
            margin: 0;
        }

        .user-badge {
            display: flex;
            align-items: center;
            gap: var(--space-8);
            background: rgba(var(--color-success-rgb), 0.1);
            color: var(--color-success);
            padding: var(--space-8) var(--space-16);
            border-radius: var(--radius-full);
            font-weight: var(--font-weight-semibold);
            font-size: var(--font-size-sm);
        }

        .dashboard-stats-section {
            margin-bottom: var(--space-32);
        }

        .dashboard-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: var(--space-24);
        }

        .dashboard-stat-card {
            background: var(--color-surface);
            border-radius: var(--radius-lg);
            padding: var(--space-24);
            display: flex;
            align-items: center;
            gap: var(--space-20);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--color-border);
            transition: all var(--duration-normal) var(--ease-standard);
        }

        .dashboard-stat-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .dashboard-tabs-section {
            background: var(--color-surface);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--color-border);
        }

        .dashboard-tabs {
            display: flex;
            border-bottom: 1px solid var(--color-border);
            overflow-x: auto;
        }

        .dashboard-tab {
            background: none;
            border: none;
            padding: var(--space-16) var(--space-24);
            color: var(--color-text-secondary);
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: all var(--duration-normal) var(--ease-standard);
            font-weight: var(--font-weight-medium);
            white-space: nowrap;
        }

        .dashboard-tab.active {
            color: var(--color-primary);
            border-bottom-color: var(--color-primary);
            background: var(--color-background);
        }

        .tab-content {
            display: none;
            padding: var(--space-32);
        }

        .tab-content.active {
            display: block;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: var(--space-32);
            flex-wrap: wrap;
            gap: var(--space-16);
        }

        .section-header h2 {
            font-size: var(--font-size-2xl);
            font-weight: var(--font-weight-semibold);
            color: var(--color-text);
            margin-bottom: var(--space-8);
            display: flex;
            align-items: center;
            gap: var(--space-12);
        }

        .section-header p {
            color: var(--color-text-secondary);
            margin: 0;
            width: 100%;
        }

        .quick-actions {
            display: flex;
            gap: var(--space-12);
        }

        .activities-tabs {
            display: flex;
            gap: var(--space-8);
            margin-bottom: var(--space-24);
            border-bottom: 1px solid var(--color-border);
            overflow-x: auto;
        }

        .tab-btn {
            background: none;
            border: none;
            padding: var(--space-12) var(--space-16);
            color: var(--color-text-secondary);
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all var(--duration-normal) var(--ease-standard);
            white-space: nowrap;
        }

        .tab-btn.active {
            color: var(--color-primary);
            border-bottom-color: var(--color-primary);
        }

        .activities-list {
            display: flex;
            flex-direction: column;
            gap: var(--space-16);
        }

        .activity-item {
            border: 1px solid var(--color-border);
            border-radius: var(--radius-base);
            padding: var(--space-20);
            transition: all var(--duration-normal) var(--ease-standard);
        }

        .activity-item:hover {
            border-color: var(--color-primary);
            box-shadow: var(--shadow-sm);
        }

        .activity-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: var(--space-12);
            gap: var(--space-12);
        }

        .activity-header h4 {
            font-size: var(--font-size-lg);
            font-weight: var(--font-weight-semibold);
            color: var(--color-text);
            margin: 0;
            flex: 1;
        }

        .activity-status {
            padding: var(--space-4) var(--space-8);
            border-radius: var(--radius-full);
            font-size: var(--font-size-xs);
            font-weight: var(--font-weight-semibold);
            text-transform: uppercase;
            white-space: nowrap;
        }

        .activity-status.em-analise {
            background: rgba(var(--color-warning-rgb), 0.1);
            color: var(--color-warning);
        }

        .activity-status.respondida {
            background: rgba(var(--color-success-rgb), 0.1);
            color: var(--color-success);
        }

        .activity-meta {
            display: flex;
            gap: var(--space-12);
            margin-bottom: var(--space-16);
            flex-wrap: wrap;
        }

        .activity-category {
            padding: var(--space-2) var(--space-8);
            border-radius: var(--radius-full);
            font-size: var(--font-size-xs);
            font-weight: var(--font-weight-semibold);
            text-transform: uppercase;
        }

        .activity-category.infraestrutura {
            background: var(--color-bg-2);
            color: var(--color-warning);
        }

        .activity-category.saude {
            background: var(--color-bg-1);
            color: var(--color-primary);
        }

        .activity-date,
        .activity-support,
        .activity-comments {
            font-size: var(--font-size-sm);
            color: var(--color-text-secondary);
            display: flex;
            align-items: center;
            gap: var(--space-4);
        }

        .activity-actions {
            display: flex;
            gap: var(--space-8);
        }

        .reputation-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: var(--space-32);
        }

        .reputation-score-card {
            background: var(--color-surface);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            padding: var(--space-24);
            text-align: center;
        }

        .score-display {
            margin-bottom: var(--space-24);
        }

        .score-number {
            display: block;
            font-size: var(--font-size-4xl);
            font-weight: var(--font-weight-bold);
            color: var(--color-text);
            line-height: 1;
            margin-bottom: var(--space-4);
        }

        .score-label {
            font-size: var(--font-size-sm);
            color: var(--color-text-secondary);
            text-transform: uppercase;
            font-weight: var(--font-weight-semibold);
        }

        .score-progress {
            text-align: left;
        }

        .progress-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: var(--space-8);
        }

        .progress-header span {
            font-size: var(--font-size-sm);
            color: var(--color-text);
        }

        .progress-value {
            font-weight: var(--font-weight-semibold);
            color: var(--color-primary);
        }

        .progress-bar {
            width: 100%;
            height: var(--space-8);
            background: var(--color-border);
            border-radius: var(--radius-full);
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--color-primary);
            border-radius: var(--radius-full);
            transition: width var(--duration-normal) var(--ease-standard);
        }

        .badges-section {
            background: var(--color-surface);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            padding: var(--space-24);
        }

        .badges-section h3 {
            font-size: var(--font-size-xl);
            font-weight: var(--font-weight-semibold);
            margin-bottom: var(--space-20);
            color: var(--color-text);
        }

        .badges-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: var(--space-16);
        }

        .badge-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: var(--space-8);
            padding: var(--space-16);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-base);
            text-align: center;
            transition: all var(--duration-normal) var(--ease-standard);
        }

        .badge-item:hover {
            border-color: var(--color-primary);
            box-shadow: var(--shadow-sm);
        }

        .badge-item.locked {
            opacity: 0.6;
        }

        .badge-icon {
            font-size: var(--font-size-3xl);
            margin-bottom: var(--space-8);
        }

        .badge-name {
            font-size: var(--font-size-sm);
            font-weight: var(--font-weight-medium);
            color: var(--color-text);
        }

        .notifications-container {
            margin-bottom: var(--space-24);
        }

        .notification-item {
            display: flex;
            gap: var(--space-16);
            padding: var(--space-16);
            border-bottom: 1px solid var(--color-border);
            transition: all var(--duration-normal) var(--ease-standard);
        }

        .notification-item:last-child {
            border-bottom: none;
        }

        .notification-item.unread {
            background: rgba(var(--color-primary-rgb), 0.05);
            border-radius: var(--radius-base);
        }

        .notification-icon {
            width: 40px;
            height: 40px;
            background: var(--color-background);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-primary);
            font-size: var(--font-size-lg);
            flex-shrink: 0;
        }

        .notification-content {
            flex: 1;
        }

        .notification-content h4 {
            font-size: var(--font-size-base);
            font-weight: var(--font-weight-semibold);
            color: var(--color-text);
            margin-bottom: var(--space-4);
        }

        .notification-content p {
            font-size: var(--font-size-sm);
            color: var(--color-text-secondary);
            margin-bottom: var(--space-4);
        }

        .notification-time {
            font-size: var(--font-size-xs);
            color: var(--color-text-secondary);
        }

        .notification-actions {
            display: flex;
            align-items: flex-start;
        }

        .btn-icon {
            background: transparent;
            border: 1px solid var(--color-border);
            width: 32px;
            height: 32px;
            border-radius: var(--radius-sm);
            color: var(--color-text-secondary);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--duration-normal) var(--ease-standard);
        }

        .btn-icon:hover {
            border-color: var(--color-primary);
            color: var(--color-primary);
        }

        .view-all-container {
            text-align: center;
        }

        .progress-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: var(--space-24);
        }

        .progress-stat-card {
            background: var(--color-surface);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-lg);
            padding: var(--space-24);
            text-align: center;
        }

        .progress-stat-card h3 {
            font-size: var(--font-size-lg);
            font-weight: var(--font-weight-semibold);
            margin-bottom: var(--space-16);
            color: var(--color-text);
        }

        .progress-stat-value {
            display: flex;
            justify-content: center;
            align-items: baseline;
            gap: var(--space-4);
            margin-bottom: var(--space-16);
        }

        .progress-stat-value .current {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--color-text);
        }

        .progress-stat-value .divider {
            font-size: var(--font-size-xl);
            color: var(--color-text-secondary);
        }

        .progress-stat-value .total {
            font-size: var(--font-size-xl);
            color: var(--color-text-secondary);
        }

        .progress-stat-value .percent {
            font-size: var(--font-size-xl);
            color: var(--color-text);
            font-weight: var(--font-weight-semibold);
        }

        .progress-label {
            display: block;
            font-size: var(--font-size-sm);
            color: var(--color-text-secondary);
            margin-top: var(--space-8);
        }

        .progress-fill.success {
            background: var(--color-success);
        }

        .progress-fill.warning {
            background: var(--color-warning);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .reputation-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .dashboard-header {
                flex-direction: column;
                gap: var(--space-16);
                align-items: flex-start;
            }

            .dashboard-stats-grid {
                grid-template-columns: 1fr;
            }

            .dashboard-tabs {
                flex-wrap: wrap;
            }

            .dashboard-tab {
                flex: 1;
                min-width: 120px;
                text-align: center;
            }

            .section-header {
                flex-direction: column;
                gap: var(--space-16);
                align-items: flex-start;
            }

            .quick-actions {
                width: 100%;
                justify-content: center;
            }

            .activities-tabs {
                flex-wrap: wrap;
            }

            .tab-btn {
                flex: 1;
                min-width: 100px;
                text-align: center;
            }

            .activity-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .activity-meta {
                flex-direction: column;
                gap: var(--space-8);
            }

            .activity-actions {
                width: 100%;
                justify-content: center;
            }

            .badges-grid {
                grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
            }

            .progress-stats-grid {
                grid-template-columns: 1fr;
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
                // For now, we'll just show a message
                console.log('Filtering activities by:', this.textContent);
            });
        });
    </script>

    <script src="js/main.js"></script>
</body>
</html>