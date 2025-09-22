<?php
session_start();

// Dados simulados do fórum
$forum_topics = [
    [
        'id' => 1,
        'title' => 'Como melhorar o sistema de saúde pública?',
        'description' => 'Discussão sobre propostas para otimizar o atendimento nos postos de saúde da cidade.',
        'author' => 'Dr. Carlos Silva',
        'author_avatar' => 'C',
        'category' => 'Saúde',
        'tags' => ['saúde', 'propostas', 'atendimento'],
        'replies' => 23,
        'views' => 1450,
        'votes' => 87,
        'created_at' => '2024-01-15',
        'last_activity' => '2 horas atrás',
        'is_pinned' => true,
        'is_verified' => true,
        'status' => 'active'
    ],
    [
        'id' => 2,
        'title' => 'Proposta de ciclovias no centro da cidade',
        'description' => 'Debate sobre a implementação de ciclovias conectando o centro aos bairros periféricos.',
        'author' => 'Maria Oliveira',
        'author_avatar' => 'M',
        'category' => 'Transporte',
        'tags' => ['ciclovias', 'transporte', 'sustentabilidade'],
        'replies' => 45,
        'views' => 2180,
        'votes' => 134,
        'created_at' => '2024-01-12',
        'last_activity' => '5 horas atrás',
        'is_pinned' => false,
        'is_verified' => true,
        'status' => 'trending'
    ],
    [
        'id' => 3,
        'title' => 'Segurança nas escolas: compartilhando experiências',
        'description' => 'Espaço para pais e educadores discutirem medidas de segurança nas instituições de ensino.',
        'author' => 'Ana Costa',
        'author_avatar' => 'A',
        'category' => 'Educação',
        'tags' => ['segurança', 'escolas', 'educação'],
        'replies' => 67,
        'views' => 3240,
        'votes' => 156,
        'created_at' => '2024-01-10',
        'last_activity' => '1 dia atrás',
        'is_pinned' => false,
        'is_verified' => false,
        'status' => 'hot'
    ]
];

$recent_replies = [
    [
        'topic_title' => 'Como melhorar o sistema de saúde pública?',
        'author' => 'João Santos',
        'author_avatar' => 'J',
        'content' => 'Concordo com a proposta de ampliar horários. Na minha região, o posto fecha muito cedo.',
        'time' => '15 min atrás',
        'votes' => 12
    ],
    [
        'topic_title' => 'Proposta de ciclovias no centro da cidade',
        'author' => 'Pedro Lima',
        'author_avatar' => 'P',
        'content' => 'Excelente ideia! Seria importante incluir sinalização adequada também.',
        'time' => '32 min atrás',
        'votes' => 8
    ],
    [
        'topic_title' => 'Segurança nas escolas: compartilhando experiências',
        'author' => 'Lucia Fernandes',
        'author_avatar' => 'L',
        'content' => 'Na escola do meu filho implementaram câmeras e melhorou muito.',
        'time' => '1 hora atrás',
        'votes' => 15
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum - O Democrata</title>
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
                        <a href="forum.php" class="nav-link active">Fórum</a>
                    </div>
                </div>
                <div class="nav-right">
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Buscar discussões...">
                    </div>
                    <i class="fas fa-bell notification-icon"></i>
                    <i class="fas fa-user user-icon"></i>
                    <a href="dashboard.php" class="nav-btn">Dashboard</a>
                    <a href="admin.php" class="nav-btn">Admin</a>
                    <a href="instituicao.php" class="nav-btn">Instituição</a>
                    <a href="cadastro.php" class="nav-btn primary">Cadastrar</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Forum Page -->
    <main class="forum-page">
        <div class="container">
            <!-- Forum Header -->
            <div class="forum-header">
                <div class="forum-title-section">
                    <h1><i class="fas fa-comments"></i> Fórum de Discussões</h1>
                    <p>Participe das discussões sobre temas importantes para sua cidade</p>
                </div>
                <div class="forum-actions">
                    <button class="btn btn-outline">
                        <i class="fas fa-filter"></i>
                        Filtrar
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        Novo Tópico
                    </button>
                </div>
            </div>

            <!-- Forum Content -->
            <div class="forum-content">
                <!-- Main Forum Area -->
                <div class="forum-main">
                    <!-- Forum Navigation -->
                    <div class="forum-nav">
                        <div class="nav-tabs">
                            <button class="nav-tab active" data-tab="recent">
                                <i class="fas fa-clock"></i>
                                Recentes
                            </button>
                            <button class="nav-tab" data-tab="trending">
                                <i class="fas fa-fire"></i>
                                Em Alta
                            </button>
                            <button class="nav-tab" data-tab="solved">
                                <i class="fas fa-check-circle"></i>
                                Resolvidos
                            </button>
                            <button class="nav-tab" data-tab="unanswered">
                                <i class="fas fa-question-circle"></i>
                                Sem Resposta
                            </button>
                        </div>
                        
                        <div class="sort-options">
                            <select class="sort-select">
                                <option>Mais recente</option>
                                <option>Mais votados</option>
                                <option>Mais visualizados</option>
                                <option>Mais comentados</option>
                            </select>
                        </div>
                    </div>

                    <!-- Topics List -->
                    <div class="topics-list">
                        <?php foreach($forum_topics as $topic): ?>
                        <article class="topic-card <?php echo $topic['is_pinned'] ? 'pinned' : ''; ?> <?php echo $topic['status']; ?>">
                            <div class="topic-main">
                                <div class="topic-status">
                                    <?php if($topic['is_pinned']): ?>
                                        <i class="fas fa-thumbtack pin-icon"></i>
                                    <?php endif; ?>
                                    
                                    <?php if($topic['status'] === 'trending'): ?>
                                        <span class="status-badge trending">
                                            <i class="fas fa-fire"></i>
                                            Trending
                                        </span>
                                    <?php elseif($topic['status'] === 'hot'): ?>
                                        <span class="status-badge hot">
                                            <i class="fas fa-flame"></i>
                                            Hot
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="topic-content">
                                    <div class="topic-header">
                                        <h3 class="topic-title">
                                            <?php echo $topic['title']; ?>
                                            <?php if($topic['is_verified']): ?>
                                                <i class="fas fa-check-circle verified-icon"></i>
                                            <?php endif; ?>
                                        </h3>
                                        <span class="topic-category <?php echo strtolower($topic['category']); ?>">
                                            <?php echo $topic['category']; ?>
                                        </span>
                                    </div>
                                    
                                    <p class="topic-description"><?php echo $topic['description']; ?></p>
                                    
                                    <div class="topic-meta">
                                        <div class="topic-author">
                                            <div class="author-avatar"><?php echo $topic['author_avatar']; ?></div>
                                            <span class="author-name"><?php echo $topic['author']; ?></span>
                                            <span class="topic-date"><?php echo $topic['created_at']; ?></span>
                                        </div>
                                        
                                        <div class="topic-tags">
                                            <?php foreach($topic['tags'] as $tag): ?>
                                                <span class="topic-tag">#<?php echo $tag; ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="topic-stats">
                                    <div class="stat-item votes">
                                        <i class="fas fa-thumbs-up"></i>
                                        <span class="stat-value"><?php echo $topic['votes']; ?></span>
                                        <span class="stat-label">votos</span>
                                    </div>
                                    
                                    <div class="stat-item replies">
                                        <i class="fas fa-reply"></i>
                                        <span class="stat-value"><?php echo $topic['replies']; ?></span>
                                        <span class="stat-label">respostas</span>
                                    </div>
                                    
                                    <div class="stat-item views">
                                        <i class="fas fa-eye"></i>
                                        <span class="stat-value"><?php echo number_format($topic['views'], 0, ',', '.'); ?></span>
                                        <span class="stat-label">views</span>
                                    </div>
                                </div>
                            </div>

                            <div class="topic-footer">
                                <div class="last-activity">
                                    <i class="fas fa-clock"></i>
                                    <span>Última atividade: <?php echo $topic['last_activity']; ?></span>
                                </div>
                                
                                <div class="topic-actions">
                                    <button class="action-btn vote-btn">
                                        <i class="fas fa-thumbs-up"></i>
                                    </button>
                                    <button class="action-btn">
                                        <i class="fas fa-bookmark"></i>
                                    </button>
                                    <button class="action-btn">
                                        <i class="fas fa-share"></i>
                                    </button>
                                </div>
                            </div>
                        </article>
                        <?php endforeach; ?>
                    </div>

                    <!-- Load More -->
                    <div class="load-more-section">
                        <button class="btn btn-outline load-more-btn">
                            <i class="fas fa-chevron-down"></i>
                            Carregar Mais Discussões
                        </button>
                    </div>
                </div>

                <!-- Forum Sidebar -->
                <div class="forum-sidebar">
                    <!-- Quick Stats -->
                    <div class="sidebar-section stats-section">
                        <h3><i class="fas fa-chart-bar"></i> Estatísticas do Fórum</h3>
                        <div class="quick-stats">
                            <div class="quick-stat">
                                <div class="stat-icon">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <div class="stat-content">
                                    <span class="stat-number">1.2k</span>
                                    <span class="stat-label">Tópicos</span>
                                </div>
                            </div>

                            <div class="quick-stat">
                                <div class="stat-icon">
                                    <i class="fas fa-reply"></i>
                                </div>
                                <div class="stat-content">
                                    <span class="stat-number">8.5k</span>
                                    <span class="stat-label">Respostas</span>
                                </div>
                            </div>

                            <div class="quick-stat">
                                <div class="stat-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="stat-content">
                                    <span class="stat-number">3.2k</span>
                                    <span class="stat-label">Participantes</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-section categories-section">
                        <h3><i class="fas fa-th-list"></i> Categorias</h3>
                        <div class="categories-list">
                            <a href="#" class="category-item">
                                <div class="category-icon saude">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <div class="category-info">
                                    <span class="category-name">Saúde</span>
                                    <span class="category-count">156 tópicos</span>
                                </div>
                            </a>

                            <a href="#" class="category-item">
                                <div class="category-icon educacao">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <div class="category-info">
                                    <span class="category-name">Educação</span>
                                    <span class="category-count">134 tópicos</span>
                                </div>
                            </a>

                            <a href="#" class="category-item">
                                <div class="category-icon transporte">
                                    <i class="fas fa-bus"></i>
                                </div>
                                <div class="category-info">
                                    <span class="category-name">Transporte</span>
                                    <span class="category-count">89 tópicos</span>
                                </div>
                            </a>

                            <a href="#" class="category-item">
                                <div class="category-icon seguranca">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <div class="category-info">
                                    <span class="category-name">Segurança</span>
                                    <span class="category-count">67 tópicos</span>
                                </div>
                            </a>

                            <a href="#" class="category-item">
                                <div class="category-icon infraestrutura">
                                    <i class="fas fa-city"></i>
                                </div>
                                <div class="category-info">
                                    <span class="category-name">Infraestrutura</span>
                                    <span class="category-count">92 tópicos</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="sidebar-section activity-section">
                        <h3><i class="fas fa-history"></i> Atividade Recente</h3>
                        <div class="recent-activity">
                            <?php foreach($recent_replies as $reply): ?>
                            <div class="activity-item">
                                <div class="activity-avatar"><?php echo $reply['author_avatar']; ?></div>
                                <div class="activity-content">
                                    <div class="activity-header">
                                        <span class="activity-author"><?php echo $reply['author']; ?></span>
                                        <span class="activity-action">respondeu em</span>
                                    </div>
                                    <div class="activity-topic"><?php echo $reply['topic_title']; ?></div>
                                    <div class="activity-preview"><?php echo $reply['content']; ?></div>
                                    <div class="activity-meta">
                                        <span class="activity-time"><?php echo $reply['time']; ?></span>
                                        <span class="activity-votes">
                                            <i class="fas fa-thumbs-up"></i>
                                            <?php echo $reply['votes']; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Top Contributors -->
                    <div class="sidebar-section contributors-section">
                        <h3><i class="fas fa-trophy"></i> Top Contribuidores</h3>
                        <div class="contributors-list">
                            <div class="contributor-item">
                                <div class="contributor-rank">1</div>
                                <div class="contributor-avatar">D</div>
                                <div class="contributor-info">
                                    <span class="contributor-name">Dr. Carlos Silva</span>
                                    <span class="contributor-points">2.5k pontos</span>
                                </div>
                            </div>

                            <div class="contributor-item">
                                <div class="contributor-rank">2</div>
                                <div class="contributor-avatar">M</div>
                                <div class="contributor-info">
                                    <span class="contributor-name">Maria Oliveira</span>
                                    <span class="contributor-points">1.8k pontos</span>
                                </div>
                            </div>

                            <div class="contributor-item">
                                <div class="contributor-rank">3</div>
                                <div class="contributor-avatar">J</div>
                                <div class="contributor-info">
                                    <span class="contributor-name">João Santos</span>
                                    <span class="contributor-points">1.2k pontos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Forum CSS -->
    <style>
        .forum-page {
            background: #f8fafc;
            min-height: calc(100vh - 80px);
            padding: 32px 0;
        }

        .forum-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 32px;
        }

        .forum-title-section h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .forum-title-section p {
            color: #6b7280;
            margin: 0;
        }

        .forum-actions {
            display: flex;
            gap: 12px;
        }

        .forum-content {
            display: grid;
            grid-template-columns: 1fr 320px;
            gap: 32px;
        }

        /* Forum Navigation */
        .forum-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            border-radius: 12px;
            padding: 16px 24px;
            margin-bottom: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .nav-tabs {
            display: flex;
            gap: 8px;
        }

        .nav-tab {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            background: transparent;
            border: none;
            border-radius: 8px;
            color: #6b7280;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .nav-tab.active {
            background: #2563eb;
            color: white;
        }

        .nav-tab:hover:not(.active) {
            background: #f3f4f6;
            color: #2563eb;
        }

        .sort-select {
            padding: 8px 12px;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            font-size: 14px;
            background: white;
        }

        /* Topics List */
        .topics-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 32px;
        }

        .topic-card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .topic-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .topic-card.pinned {
            border-left: 4px solid #f59e0b;
            background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%);
        }

        .topic-card.trending {
            border-left: 4px solid #ef4444;
        }

        .topic-card.hot {
            border-left: 4px solid #f97316;
        }

        .topic-main {
            display: flex;
            gap: 20px;
            margin-bottom: 16px;
        }

        .topic-status {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            min-width: 60px;
        }

        .pin-icon {
            color: #f59e0b;
            font-size: 16px;
            transform: rotate(45deg);
        }

        .status-badge {
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .status-badge.trending {
            background: #fef2f2;
            color: #dc2626;
        }

        .status-badge.hot {
            background: #fff7ed;
            color: #ea580c;
        }

        .topic-content {
            flex: 1;
        }

        .topic-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 12px;
        }

        .topic-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1f2937;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .verified-icon {
            color: #2563eb;
            font-size: 16px;
        }

        .topic-category {
            padding: 4px 12px;
            border-radius: 16px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .topic-category.saude {
            background: #dbeafe;
            color: #1e40af;
        }

        .topic-category.transporte {
            background: #d1fae5;
            color: #065f46;
        }

        .topic-category.educacao {
            background: #e0e7ff;
            color: #3730a3;
        }

        .topic-description {
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .topic-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topic-author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .author-avatar {
            width: 32px;
            height: 32px;
            background: #2563eb;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
        }

        .author-name {
            font-weight: 500;
            color: #1f2937;
        }

        .topic-date {
            color: #6b7280;
            font-size: 14px;
        }

        .topic-tags {
            display: flex;
            gap: 8px;
        }

        .topic-tag {
            background: #f3f4f6;
            color: #6b7280;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 12px;
        }

        .topic-stats {
            display: flex;
            flex-direction: column;
            gap: 12px;
            align-items: center;
            min-width: 80px;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            text-align: center;
        }

        .stat-item i {
            color: #6b7280;
            font-size: 16px;
        }

        .stat-value {
            font-size: 1.125rem;
            font-weight: 700;
            color: #1f2937;
        }

        .stat-label {
            font-size: 11px;
            color: #6b7280;
            text-transform: uppercase;
            font-weight: 600;
        }

        .stat-item.votes i { color: #059669; }
        .stat-item.replies i { color: #2563eb; }
        .stat-item.views i { color: #f59e0b; }

        .topic-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 16px;
            border-top: 1px solid #f3f4f6;
        }

        .last-activity {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #6b7280;
            font-size: 14px;
        }

        .topic-actions {
            display: flex;
            gap: 8px;
        }

        .action-btn {
            background: transparent;
            border: 1px solid #e5e7eb;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            color: #6b7280;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .action-btn:hover {
            border-color: #2563eb;
            color: #2563eb;
        }

        .action-btn.vote-btn:hover {
            border-color: #059669;
            color: #059669;
        }

        /* Sidebar */
        .sidebar-section {
            background: white;
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .sidebar-section h3 {
            font-size: 1.125rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Quick Stats */
        .quick-stats {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .quick-stat {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .quick-stat .stat-icon {
            width: 40px;
            height: 40px;
            background: #f3f4f6;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
        }

        .quick-stat .stat-number {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1f2937;
        }

        .quick-stat .stat-label {
            font-size: 14px;
            color: #6b7280;
        }

        /* Categories */
        .categories-list {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .category-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .category-item:hover {
            background: #f8fafc;
        }

        .category-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
        }

        .category-icon.saude { background: #3b82f6; }
        .category-icon.educacao { background: #8b5cf6; }
        .category-icon.transporte { background: #10b981; }
        .category-icon.seguranca { background: #ef4444; }
        .category-icon.infraestrutura { background: #f59e0b; }

        .category-name {
            font-weight: 500;
            color: #1f2937;
            display: block;
        }

        .category-count {
            font-size: 12px;
            color: #6b7280;
            display: block;
        }

        /* Recent Activity */
        .recent-activity {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .activity-item {
            display: flex;
            gap: 12px;
        }

        .activity-avatar {
            width: 32px;
            height: 32px;
            background: #2563eb;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 12px;
            flex-shrink: 0;
        }

        .activity-content {
            flex: 1;
        }

        .activity-header {
            margin-bottom: 4px;
        }

        .activity-author {
            font-weight: 500;
            color: #1f2937;
        }

        .activity-action {
            color: #6b7280;
            font-size: 14px;
        }

        .activity-topic {
            font-size: 14px;
            color: #2563eb;
            margin-bottom: 6px;
            line-height: 1.4;
        }

        .activity-preview {
            font-size: 13px;
            color: #6b7280;
            line-height: 1.4;
            margin-bottom: 8px;
        }

        .activity-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .activity-time {
            font-size: 12px;
            color: #6b7280;
        }

        .activity-votes {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 12px;
            color: #059669;
        }

        /* Contributors */
        .contributors-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .contributor-item {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .contributor-rank {
            width: 24px;
            height: 24px;
            background: #f59e0b;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 12px;
        }

        .contributor-avatar {
            width: 32px;
            height: 32px;
            background: #2563eb;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
        }

        .contributor-name {
            font-weight: 500;
            color: #1f2937;
            display: block;
        }

        .contributor-points {
            font-size: 12px;
            color: #6b7280;
            display: block;
        }

        .load-more-section {
            text-align: center;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .forum-content {
                grid-template-columns: 1fr;
            }

            .forum-nav {
                flex-direction: column;
                gap: 16px;
                align-items: stretch;
            }

            .nav-tabs {
                justify-content: center;
                flex-wrap: wrap;
            }
        }

        @media (max-width: 768px) {
            .forum-header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }

            .topic-main {
                flex-direction: column;
                gap: 16px;
            }

            .topic-stats {
                flex-direction: row;
                justify-content: space-around;
            }

            .topic-meta {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }
        }
    </style>

    <!-- Forum JavaScript -->
    <script>
        // Tab navigation
        document.querySelectorAll('.nav-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.nav-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
                
                const tabType = this.dataset.tab;
                console.log('Filtering topics by:', tabType);
                // Here you would implement the filtering logic
            });
        });

        // Vote buttons
        document.querySelectorAll('.vote-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                this.classList.toggle('voted');
                // Here you would send the vote to the server
            });
        });

        // Topic cards click
        document.querySelectorAll('.topic-card').forEach(card => {
            card.addEventListener('click', function() {
                // Navigate to topic details page
                console.log('Opening topic:', this);
            });
        });
    </script>

    <script src="js/main.js"></script>
</body>
</html>