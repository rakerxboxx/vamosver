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
                        <i class="fas fa-circle" style="color: #2563eb; margin-right: 8px;"></i>
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
    <main class="institution-dashboard">
        <div class="container">
            <!-- Institution Header -->
            <section class="institution-header">
                <div class="institution-info">
                    <div class="institution-avatar">PM</div>
                    <div class="institution-details">
                        <div class="institution-title">
                            <h1><?php echo $instituicao_data['nome']; ?></h1>
                            <?php if($instituicao_data['verificado']): ?>
                                <span class="verified-badge">
                                    <i class="fas fa-check-circle"></i>
                                    Verificado
                                </span>
                            <?php endif; ?>
                        </div>
                        <p class="institution-type"><?php echo $instituicao_data['tipo']; ?></p>
                        <div class="institution-rating">
                            <div class="rating-stars">
                                <span class="rating-value"><?php echo $instituicao_data['avaliacao']; ?></span>
                                <div class="stars">
                                    <?php 
                                    $rating = $instituicao_data['avaliacao'];
                                    for($i = 1; $i <= 5; $i++): 
                                        $class = $i <= floor($rating) ? 'fas' : ($i <= $rating ? 'fas half' : 'far');
                                    ?>
                                        <i class="<?php echo $class; ?> fa-star"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="rating-count">(<?php echo $instituicao_data['total_avaliacoes']; ?> avaliações)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Stats Overview -->
            <section class="stats-overview">
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon blue">
                            <i class="fas fa-inbox"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-value"><?php echo $instituicao_data['reclamacoes_recebidas']; ?></span>
                            <span class="stat-label">Reclamações Recebidas</span>
                            <span class="stat-period">Este mês</span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon green">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-value"><?php echo $instituicao_data['respondidas']; ?></span>
                            <span class="stat-label">Respondidas</span>
                            <span class="stat-period"><?php echo $instituicao_data['taxa_resposta']; ?>% taxa de resposta</span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon orange">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-value"><?php echo $instituicao_data['tempo_medio_resposta']; ?> dias</span>
                            <span class="stat-label">Tempo de Resposta</span>
                            <span class="stat-period">Média geral</span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon yellow">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-value"><?php echo $instituicao_data['avaliacao']; ?></span>
                            <span class="stat-label">Avaliação</span>
                            <span class="stat-period">De 5 estrelas</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <!-- Left Column -->
                <div class="dashboard-left">
                    <!-- Complaint Management -->
                    <section class="complaint-management">
                        <h2><i class="fas fa-tasks"></i> Gestão de Reclamações</h2>
                        
                        <div class="complaint-tabs">
                            <button class="complaint-tab active" data-tab="pendentes">Pendentes</button>
                            <button class="complaint-tab" data-tab="andamento">Em Andamento</button>
                            <button class="complaint-tab" data-tab="resolvidas">Resolvidas</button>
                            <button class="complaint-tab" data-tab="todas">Todas</button>
                        </div>

                        <div class="complaints-list">
                            <div class="complaint-item priority-high">
                                <div class="complaint-header">
                                    <h4>Semáforo quebrado na Av. Principal</h4>
                                    <div class="complaint-badges">
                                        <span class="priority-badge alta">Alta</span>
                                        <span class="status-badge pendente">Pendente</span>
                                    </div>
                                </div>
                                
                                <div class="complaint-meta">
                                    <span class="complaint-author">Por: Maria Silva</span>
                                    <span class="complaint-date">2024-01-15</span>
                                    <span class="complaint-category transito">Trânsito</span>
                                    <span class="complaint-support">23 apoios</span>
                                </div>

                                <div class="complaint-actions">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-reply"></i>
                                        Responder
                                    </button>
                                    <button class="btn btn-outline">
                                        <i class="fas fa-flag"></i>
                                        Marcar em Andamento
                                    </button>
                                    <button class="btn btn-text">
                                        <i class="fas fa-eye"></i>
                                        Ver Detalhes
                                    </button>
                                </div>
                            </div>

                            <div class="complaint-item priority-medium">
                                <div class="complaint-header">
                                    <h4>Buraco na rua causando transtornos</h4>
                                    <div class="complaint-badges">
                                        <span class="priority-badge media">Média</span>
                                        <span class="status-badge andamento">Em Andamento</span>
                                    </div>
                                </div>
                                
                                <div class="complaint-meta">
                                    <span class="complaint-author">Por: João Santos</span>
                                    <span class="complaint-date">2024-01-12</span>
                                    <span class="complaint-category infraestrutura">Infraestrutura</span>
                                    <span class="complaint-support">15 apoios</span>
                                </div>

                                <div class="complaint-actions">
                                    <button class="btn btn-primary">
                                        <i class="fas fa-reply"></i>
                                        Responder
                                    </button>
                                    <button class="btn btn-success">
                                        <i class="fas fa-check"></i>
                                        Marcar Resolvida
                                    </button>
                                    <button class="btn btn-text">
                                        <i class="fas fa-eye"></i>
                                        Ver Detalhes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Right Column -->
                <div class="dashboard-right">
                    <!-- Quick Actions -->
                    <section class="quick-actions">
                        <h3><i class="fas fa-bolt"></i> Ações Rápidas</h3>
                        <div class="action-buttons">
                            <button class="action-btn primary">
                                <i class="fas fa-bullhorn"></i>
                                <span>Criar Comunicado</span>
                            </button>
                            <button class="action-btn outline">
                                <i class="fas fa-chart-bar"></i>
                                <span>Ver Relatórios</span>
                            </button>
                            <button class="action-btn outline">
                                <i class="fas fa-users"></i>
                                <span>Gerenciar Equipe</span>
                            </button>
                            <button class="action-btn outline">
                                <i class="fas fa-cog"></i>
                                <span>Configurações</span>
                            </button>
                        </div>
                    </section>

                    <!-- Category Stats -->
                    <section class="category-stats">
                        <h3><i class="fas fa-chart-pie"></i> Por Categoria</h3>
                        <div class="category-list">
                            <?php foreach($categorias as $categoria): ?>
                                <div class="category-item">
                                    <div class="category-info">
                                        <span class="category-name"><?php echo $categoria['nome']; ?></span>
                                        <span class="category-count" style="background: <?php echo $categoria['cor']; ?>">
                                            <?php echo $categoria['count']; ?>
                                        </span>
                                    </div>
                                    <div class="category-bar">
                                        <div class="category-fill" style="width: <?php echo ($categoria['count'] / 45 * 100); ?>%; background: <?php echo $categoria['cor']; ?>"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </section>

                    <!-- Performance -->
                    <section class="performance-section">
                        <h3><i class="fas fa-chart-line"></i> Performance</h3>
                        <div class="performance-metrics">
                            <div class="performance-item">
                                <div class="performance-label">Taxa de Resposta</div>
                                <div class="performance-bar">
                                    <div class="performance-fill" style="width: <?php echo $instituicao_data['taxa_resposta']; ?>%"></div>
                                </div>
                                <div class="performance-value"><?php echo $instituicao_data['taxa_resposta']; ?>%</div>
                            </div>

                            <div class="performance-item">
                                <div class="performance-label">Taxa de Resolução</div>
                                <div class="performance-bar">
                                    <div class="performance-fill success" style="width: <?php echo $instituicao_data['taxa_resolucao']; ?>%"></div>
                                </div>
                                <div class="performance-value"><?php echo $instituicao_data['taxa_resolucao']; ?>%</div>
                            </div>
                        </div>
                    </section>

                    <!-- Recent Activity -->
                    <section class="recent-activity">
                        <h3><i class="fas fa-history"></i> Atividade Recente</h3>
                        <div class="activity-timeline">
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <p>Respondeu à reclamação sobre iluminação</p>
                                    <span class="timeline-time">2 horas atrás</span>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <p>Marcou reclamação sobre trânsito como resolvida</p>
                                    <span class="timeline-time">5 horas atrás</span>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <p>Criou novo comunicado sobre obras</p>
                                    <span class="timeline-time">1 dia atrás</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <!-- Institution Dashboard CSS -->
    <style>
        .institution-dashboard {
            background: #f8fafc;
            min-height: calc(100vh - 80px);
            padding: 32px 0;
        }

        .institution-header {
            background: white;
            border-radius: 16px;
            padding: 32px;
            margin-bottom: 32px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .institution-info {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .institution-avatar {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: 700;
        }

        .institution-details {
            flex: 1;
        }

        .institution-title {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 8px;
        }

        .institution-title h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #1f2937;
            margin: 0;
        }

        .verified-badge {
            display: flex;
            align-items: center;
            gap: 6px;
            background: #d1fae5;
            color: #065f46;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .institution-type {
            color: #6b7280;
            margin-bottom: 12px;
            font-size: 16px;
        }

        .institution-rating {
            display: flex;
            align-items: center;
        }

        .rating-stars {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .rating-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
        }

        .stars {
            display: flex;
            gap: 2px;
        }

        .stars i {
            color: #fbbf24;
            font-size: 16px;
        }

        .rating-count {
            color: #6b7280;
            font-size: 14px;
        }

        .stats-overview {
            margin-bottom: 32px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
        }

        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .stat-icon.blue {
            background: #dbeafe;
            color: #1e40af;
        }

        .stat-icon.green {
            background: #d1fae5;
            color: #065f46;
        }

        .stat-icon.orange {
            background: #fef3c7;
            color: #92400e;
        }

        .stat-icon.yellow {
            background: #fef9c3;
            color: #a16207;
        }

        .stat-content {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: #1f2937;
        }

        .stat-label {
            font-size: 14px;
            color: #1f2937;
            font-weight: 500;
        }

        .stat-period {
            font-size: 12px;
            color: #6b7280;
        }

        .dashboard-content {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 32px;
        }

        .complaint-management,
        .quick-actions,
        .category-stats,
        .performance-section,
        .recent-activity {
            background: white;
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .complaint-management h2,
        .quick-actions h3,
        .category-stats h3,
        .performance-section h3,
        .recent-activity h3 {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1f2937;
        }

        .complaint-tabs {
            display: flex;
            gap: 8px;
            margin-bottom: 20px;
            border-bottom: 1px solid #e5e7eb;
        }

        .complaint-tab {
            background: none;
            border: none;
            padding: 12px 16px;
            color: #6b7280;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all 0.2s ease;
            font-weight: 500;
        }

        .complaint-tab.active {
            color: #2563eb;
            border-bottom-color: #2563eb;
        }

        .complaints-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .complaint-item {
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
            transition: all 0.2s ease;
        }

        .complaint-item:hover {
            border-color: #2563eb;
            box-shadow: 0 2px 8px rgba(37, 99, 235, 0.1);
        }

        .complaint-item.priority-high {
            border-left: 4px solid #dc2626;
        }

        .complaint-item.priority-medium {
            border-left: 4px solid #f59e0b;
        }

        .complaint-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 12px;
        }

        .complaint-header h4 {
            font-size: 16px;
            font-weight: 600;
            color: #1f2937;
            margin: 0;
            flex: 1;
        }

        .complaint-badges {
            display: flex;
            gap: 8px;
        }

        .priority-badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .priority-badge.alta {
            background: #fef2f2;
            color: #dc2626;
        }

        .priority-badge.media {
            background: #fef3c7;
            color: #d97706;
        }

        .status-badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-badge.pendente {
            background: #fef2f2;
            color: #dc2626;
        }

        .status-badge.andamento {
            background: #fef3c7;
            color: #d97706;
        }

        .complaint-meta {
            display: flex;
            gap: 16px;
            margin-bottom: 16px;
            flex-wrap: wrap;
        }

        .complaint-meta span {
            font-size: 12px;
            color: #6b7280;
        }

        .complaint-category {
            padding: 2px 8px;
            border-radius: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .complaint-category.transito {
            background: #d1fae5;
            color: #065f46;
        }

        .complaint-category.infraestrutura {
            background: #fef3c7;
            color: #92400e;
        }

        .complaint-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            border: 1px solid transparent;
            text-decoration: none;
        }

        .btn.btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn.btn-primary:hover {
            background: #1d4ed8;
        }

        .btn.btn-outline {
            background: transparent;
            color: #2563eb;
            border-color: #2563eb;
        }

        .btn.btn-outline:hover {
            background: #2563eb;
            color: white;
        }

        .btn.btn-success {
            background: #059669;
            color: white;
        }

        .btn.btn-success:hover {
            background: #047857;
        }

        .btn.btn-text {
            background: transparent;
            color: #6b7280;
            border: none;
        }

        .btn.btn-text:hover {
            color: #2563eb;
        }

        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .action-btn {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 12px;
            padding: 12px 16px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            border: 1px solid transparent;
            cursor: pointer;
            background: none;
            width: 100%;
        }

        .action-btn.primary {
            background: #2563eb;
            color: white;
        }

        .action-btn.primary:hover {
            background: #1d4ed8;
        }

        .action-btn.outline {
            color: #2563eb;
            border-color: #e5e7eb;
        }

        .action-btn.outline:hover {
            border-color: #2563eb;
            background: #f8fafc;
        }

        .category-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .category-item {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .category-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .category-name {
            font-size: 14px;
            color: #1f2937;
            font-weight: 500;
        }

        .category-count {
            color: white;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .category-bar {
            width: 100%;
            height: 6px;
            background: #e5e7eb;
            border-radius: 3px;
            overflow: hidden;
        }

        .category-fill {
            height: 100%;
            border-radius: 3px;
            transition: width 0.3s ease;
        }

        .performance-metrics {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .performance-item {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .performance-label {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #1f2937;
        }

        .performance-bar {
            width: 100%;
            height: 8px;
            background: #e5e7eb;
            border-radius: 4px;
            overflow: hidden;
        }

        .performance-fill {
            height: 100%;
            background: #2563eb;
            border-radius: 4px;
            transition: width 0.3s ease;
        }

        .performance-fill.success {
            background: #059669;
        }

        .performance-value {
            font-size: 14px;
            font-weight: 600;
            color: #1f2937;
            text-align: right;
        }

        .activity-timeline {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .timeline-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .timeline-dot {
            width: 8px;
            height: 8px;
            background: #2563eb;
            border-radius: 50%;
            margin-top: 6px;
            flex-shrink: 0;
        }

        .timeline-content p {
            font-size: 14px;
            color: #1f2937;
            margin-bottom: 4px;
        }

        .timeline-time {
            font-size: 12px;
            color: #6b7280;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .dashboard-content {
                grid-template-columns: 1fr;
            }

            .institution-info {
                flex-direction: column;
                text-align: center;
                gap: 16px;
            }

            .institution-title {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .complaint-header {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }

            .complaint-meta {
                flex-direction: column;
                gap: 8px;
            }

            .complaint-actions {
                flex-direction: column;
            }

            .btn {
                justify-content: center;
            }
        }
    </style>

    <script>
        // Complaint tabs functionality
        document.querySelectorAll('.complaint-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.complaint-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                // Here you would filter the complaints based on the selected tab
                console.log('Filtering complaints by:', this.dataset.tab);
            });
        });
    </script>

    <script src="js/main.js"></script>
</body>
</html>