<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituições - O Democrata</title>
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
                        <a href="instituicoes.php" class="nav-link active">Instituições</a>
                    </div>
                </div>
                <div class="nav-right">
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Buscar reclamações...">
                    </div>
                    <i class="fas fa-bell notification-icon"></i>
                    <i class="fas fa-user user-icon"></i>
                    <a href="login.php" class="nav-btn">Login</a>
                    <a href="cadastro.php" class="nav-btn primary">Cadastrar</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-icon">
                <i class="fas fa-building"></i>
            </div>
            <h1 class="page-title">Instituições</h1>
            <p class="page-description">Acompanhe a transparência e responsividade dos órgãos públicos</p>
        </div>
    </section>

    <!-- Institutions Grid -->
    <section class="institutions-section">
        <div class="container">
            <div class="institutions-grid">
                
                <!-- Prefeitura Municipal -->
                <article class="institution-card">
                    <div class="institution-header">
                        <div class="institution-avatar">PM</div>
                        <div class="institution-info">
                            <h3 class="institution-name">
                                Prefeitura Municipal
                                <i class="fas fa-check-circle verified-badge"></i>
                            </h3>
                            <p class="institution-description">Administração municipal e serviços básicos</p>
                        </div>
                    </div>
                    
                    <div class="institution-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <span class="rating-number">3.2</span>
                        </div>
                        <span class="rating-count">(1247 avaliações)</span>
                    </div>
                    
                    <div class="institution-metrics">
                        <div class="metric">
                            <i class="fas fa-chart-line metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Taxa de resolução</span>
                                <span class="metric-value success">78%</span>
                            </div>
                        </div>
                        <div class="metric">
                            <i class="fas fa-clock metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Tempo médio</span>
                                <span class="metric-value">11 dias</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="institution-stats">
                        <span class="stat-text">973 de 1247 reclamações resolvidas</span>
                    </div>
                </article>

                <!-- Secretaria de Saúde -->
                <article class="institution-card">
                    <div class="institution-header">
                        <div class="institution-avatar red">Sd</div>
                        <div class="institution-info">
                            <h3 class="institution-name">
                                Secretaria de Saúde
                                <i class="fas fa-check-circle verified-badge"></i>
                            </h3>
                            <p class="institution-description">Hospitais, postos e atendimento médico</p>
                        </div>
                    </div>
                    
                    <div class="institution-rating">
                        <div class="rating-stars red">
                            <i class="fas fa-star"></i>
                            <span class="rating-number">2.8</span>
                        </div>
                        <span class="rating-count">(856 avaliações)</span>
                    </div>
                    
                    <div class="institution-metrics">
                        <div class="metric">
                            <i class="fas fa-chart-line metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Taxa de resolução</span>
                                <span class="metric-value warning">45%</span>
                            </div>
                        </div>
                        <div class="metric">
                            <i class="fas fa-clock metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Tempo médio</span>
                                <span class="metric-value">9 dias</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="institution-stats">
                        <span class="stat-text">385 de 856 reclamações resolvidas</span>
                    </div>
                </article>

                <!-- Secretaria de Educação -->
                <article class="institution-card">
                    <div class="institution-header">
                        <div class="institution-avatar">Sd</div>
                        <div class="institution-info">
                            <h3 class="institution-name">
                                Secretaria de Educação
                                <i class="fas fa-check-circle verified-badge"></i>
                            </h3>
                            <p class="institution-description">Escolas públicas e ensino municipal</p>
                        </div>
                    </div>
                    
                    <div class="institution-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <span class="rating-number">3.7</span>
                        </div>
                        <span class="rating-count">(634 avaliações)</span>
                    </div>
                    
                    <div class="institution-metrics">
                        <div class="metric">
                            <i class="fas fa-chart-line metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Taxa de resolução</span>
                                <span class="metric-value success">82%</span>
                            </div>
                        </div>
                        <div class="metric">
                            <i class="fas fa-clock metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Tempo médio</span>
                                <span class="metric-value">7 dias</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="institution-stats">
                        <span class="stat-text">520 de 634 reclamações resolvidas</span>
                    </div>
                </article>

                <!-- Departamento de Trânsito -->
                <article class="institution-card">
                    <div class="institution-header">
                        <div class="institution-avatar orange">Dd</div>
                        <div class="institution-info">
                            <h3 class="institution-name">
                                Departamento de Trânsito
                                <i class="fas fa-check-circle verified-badge"></i>
                            </h3>
                            <p class="institution-description">Sinalização, semáforos e fiscalização</p>
                        </div>
                    </div>
                    
                    <div class="institution-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <span class="rating-number">3.1</span>
                        </div>
                        <span class="rating-count">(489 avaliações)</span>
                    </div>
                    
                    <div class="institution-metrics">
                        <div class="metric">
                            <i class="fas fa-chart-line metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Taxa de resolução</span>
                                <span class="metric-value warning">67%</span>
                            </div>
                        </div>
                        <div class="metric">
                            <i class="fas fa-clock metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Tempo médio</span>
                                <span class="metric-value">9 dias</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="institution-stats">
                        <span class="stat-text">328 de 489 reclamações resolvidas</span>
                    </div>
                </article>

                <!-- Companhia de Água e Esgoto -->
                <article class="institution-card">
                    <div class="institution-header">
                        <div class="institution-avatar teal">Cd</div>
                        <div class="institution-info">
                            <h3 class="institution-name">
                                Companhia de Água e Esgoto
                                <i class="fas fa-check-circle verified-badge"></i>
                            </h3>
                            <p class="institution-description">Abastecimento e saneamento básico</p>
                        </div>
                    </div>
                    
                    <div class="institution-rating">
                        <div class="rating-stars red">
                            <i class="fas fa-star"></i>
                            <span class="rating-number">2.9</span>
                        </div>
                        <span class="rating-count">(423 avaliações)</span>
                    </div>
                    
                    <div class="institution-metrics">
                        <div class="metric">
                            <i class="fas fa-chart-line metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Taxa de resolução</span>
                                <span class="metric-value warning">52%</span>
                            </div>
                        </div>
                        <div class="metric">
                            <i class="fas fa-clock metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Tempo médio</span>
                                <span class="metric-value">11 dias</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="institution-stats">
                        <span class="stat-text">220 de 423 reclamações resolvidas</span>
                    </div>
                </article>

                <!-- Polícia Militar -->
                <article class="institution-card">
                    <div class="institution-header">
                        <div class="institution-avatar" style="background: var(--color-primary);">PM</div>
                        <div class="institution-info">
                            <h3 class="institution-name">
                                Polícia Militar
                                <i class="fas fa-check-circle verified-badge"></i>
                            </h3>
                            <p class="institution-description">Segurança pública e policiamento</p>
                        </div>
                    </div>
                    
                    <div class="institution-rating">
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <span class="rating-number">3.4</span>
                        </div>
                        <span class="rating-count">(345 avaliações)</span>
                    </div>
                    
                    <div class="institution-metrics">
                        <div class="metric">
                            <i class="fas fa-chart-line metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Taxa de resolução</span>
                                <span class="metric-value success">73%</span>
                            </div>
                        </div>
                        <div class="metric">
                            <i class="fas fa-clock metric-icon"></i>
                            <div class="metric-content">
                                <span class="metric-label">Tempo médio</span>
                                <span class="metric-value">12 dias</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="institution-stats">
                        <span class="stat-text">252 de 345 reclamações resolvidas</span>
                    </div>
                </article>
            </div>
            
            <!-- View All Button -->
            <div class="view-all-section">
                <a href="todas-instituicoes.php" class="btn btn-outline">Ver Todas as Instituições</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <i class="fas fa-circle" style="color: #2563eb; margin-right: 8px;"></i>
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

    <!-- CSS específico para página de instituições -->
    <style>
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #fef7ff 0%, #f3e8ff 100%);
            padding: 60px 0;
            text-align: center;
        }

        .page-header-icon {
            font-size: 48px;
            color: #8b5cf6;
            margin-bottom: 16px;
        }

        .page-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 16px;
            color: #1f2937;
        }

        .page-description {
            font-size: 18px;
            color: #6b7280;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Institutions Section */
        .institutions-section {
            padding: 60px 0;
            background: #f9fafb;
        }

        .institutions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 24px;
            margin-bottom: 48px;
        }

        .institution-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .institution-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-color: #2563eb;
            transform: translateY(-2px);
        }

        .institution-header {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 20px;
        }

        .institution-avatar {
            width: 48px;
            height: 48px;
            background: #2563eb;
            color: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 14px;
            flex-shrink: 0;
        }

        .institution-avatar.red {
            background: #dc2626;
        }

        .institution-avatar.orange {
            background: #ea580c;
        }

        .institution-avatar.teal {
            background: #0d9488;
        }

        .institution-avatar.green {
            background: #059669;
        }

        .institution-info {
            flex: 1;
            min-width: 0;
        }

        .institution-name {
            font-size: 18px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 4px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .verified-badge {
            color: #2563eb;
            font-size: 16px;
        }

        .institution-description {
            color: #6b7280;
            font-size: 14px;
            margin: 0;
        }

        .institution-rating {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }

        .rating-stars {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .rating-stars i {
            color: #fbbf24;
        }

        .rating-stars.red i {
            color: #dc2626;
        }

        .rating-number {
            font-weight: 600;
            color: #1f2937;
        }

        .rating-count {
            color: #6b7280;
            font-size: 14px;
        }

        .institution-metrics {
            display: flex;
            justify-content: space-between;
            margin-bottom: 16px;
        }

        .metric {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .metric-icon {
            color: #6b7280;
            font-size: 16px;
        }

        .metric-content {
            display: flex;
            flex-direction: column;
        }

        .metric-label {
            font-size: 12px;
            color: #6b7280;
            margin-bottom: 2px;
        }

        .metric-value {
            font-weight: 600;
            color: #1f2937;
        }

        .metric-value.success {
            color: #059669;
        }

        .metric-value.warning {
            color: #d97706;
        }

        .metric-value.danger {
            color: #dc2626;
        }

        .institution-stats {
            color: #2563eb;
            font-size: 14px;
            font-weight: 500;
        }

        .view-all-section {
            text-align: center;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .institutions-grid {
                grid-template-columns: 1fr;
            }

            .institution-metrics {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }

            .metric {
                width: 100%;
                justify-content: space-between;
            }
        }
    </style>

    <script src="js/main.js"></script>
</body>
</html>