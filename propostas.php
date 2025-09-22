<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propostas Populares - O Democrata</title>
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
                        <a href="propostas.php" class="nav-link active">Propostas</a>
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
            <i class="fas fa-lightbulb"></i>
        </div>
        <h1 class="page-title">Propostas Populares</h1>
        <p class="page-description">Sugira melhorias para sua cidade e vote nas propostas que considera mais importantes</p>
    </div>
</section>

    <!-- Proposals Section -->
    <section class="proposals-section">
        <div class="container">
            <div class="proposals-list">
                
                <!-- Proposta 1 - Saúde Pública -->
                <article class="proposal-card">
                    <div class="proposal-header">
                        <div class="proposal-categories">
                            <span class="category-badge saude">Saúde Pública</span>
                            <span class="status-badge verificado">Verificado</span>
                            <span class="status-badge votacao">Em votação</span>
                        </div>
                        <div class="support-percentage">
                            <div class="percentage-circle">
                                <div class="percentage-text">87%</div>
                                <div class="percentage-label">Apoio</div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="proposal-title">Implementar horário de funcionamento 24h em postos de saúde</h3>
                    
                    <p class="proposal-description">
                        Proposta para que pelo menos um posto de saúde em cada região funcione 24 horas para atendimento de emergência.
                    </p>
                    
                    <div class="proposal-author">
                        <span>Por Dr. Marina Silva</span>
                    </div>
                    
                    <div class="proposal-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 87%"></div>
                        </div>
                        <div class="progress-stats">
                            <div class="votes-info">
                                <span class="votes-count">1456 votos favoráveis</span>
                                <span class="votes-against">89 contrários</span>
                            </div>
                            <div class="time-info">
                                <i class="fas fa-clock"></i>
                                <span>12 dias</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="proposal-actions">
                        <button class="action-btn support">
                            <i class="fas fa-thumbs-up"></i>
                            <span>Apoiar</span>
                        </button>
                        <button class="action-btn oppose">
                            <i class="fas fa-thumbs-down"></i>
                            <span>Contra</span>
                        </button>
                        <button class="action-btn comment">
                            <i class="fas fa-comment"></i>
                            <span>234</span>
                        </button>
                    </div>
                </article>

                <!-- Proposta 2 - Transporte -->
                <article class="proposal-card">
                    <div class="proposal-header">
                        <div class="proposal-categories">
                            <span class="category-badge transporte">Transporte</span>
                            <span class="status-badge votacao">Em votação</span>
                        </div>
                        <div class="support-percentage">
                            <div class="percentage-circle orange">
                                <div class="percentage-text">71%</div>
                                <div class="percentage-label">Apoio</div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="proposal-title">Criação de ciclofaixas conectando centro aos bairros</h3>
                    
                    <p class="proposal-description">
                        Rede integrada de ciclofaixas para incentivar o transporte sustentável e reduzir trânsito.
                    </p>
                    
                    <div class="proposal-author">
                        <span>Por Carlos Bike</span>
                    </div>
                    
                    <div class="proposal-progress">
                        <div class="progress-bar">
                            <div class="progress-fill orange" style="width: 71%"></div>
                        </div>
                        <div class="progress-stats">
                            <div class="votes-info">
                                <span class="votes-count">923 votos favoráveis</span>
                                <span class="votes-against">156 contrários</span>
                            </div>
                            <div class="time-info">
                                <i class="fas fa-clock"></i>
                                <span>8 dias</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="proposal-actions">
                        <button class="action-btn support">
                            <i class="fas fa-thumbs-up"></i>
                            <span>Apoiar</span>
                        </button>
                        <button class="action-btn oppose">
                            <i class="fas fa-thumbs-down"></i>
                            <span>Contra</span>
                        </button>
                        <button class="action-btn comment">
                            <i class="fas fa-comment"></i>
                            <span>178</span>
                        </button>
                    </div>
                </article>

                <!-- Proposta 3 - Meio Ambiente -->
                <article class="proposal-card">
                    <div class="proposal-header">
                        <div class="proposal-categories">
                            <span class="category-badge meio-ambiente">Meio Ambiente</span>
                            <span class="status-badge enviada">Enviada</span>
                        </div>
                        <div class="support-percentage">
                            <div class="percentage-circle">
                                <div class="percentage-text">82%</div>
                                <div class="percentage-label">Apoio</div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="proposal-title">Programa de reaproveitamento de água da chuva</h3>
                    
                    <p class="proposal-description">
                        Incentivos fiscais para instalação de sistemas de captação de água pluvial em residências e empresas.
                    </p>
                    
                    <div class="proposal-author">
                        <span>Por Ana Verde</span>
                    </div>
                    
                    <div class="proposal-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 82%"></div>
                        </div>
                        <div class="progress-stats">
                            <div class="votes-info">
                                <span class="votes-count">756 votos favoráveis</span>
                                <span class="votes-against">67 contrários</span>
                            </div>
                            <div class="time-info">
                                <i class="fas fa-paper-plane"></i>
                                <span>Enviada à Câmara</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="proposal-actions">
                        <button class="action-btn support">
                            <i class="fas fa-thumbs-up"></i>
                            <span>Apoiar</span>
                        </button>
                        <button class="action-btn oppose">
                            <i class="fas fa-thumbs-down"></i>
                            <span>Contra</span>
                        </button>
                        <button class="action-btn comment">
                            <i class="fas fa-comment"></i>
                            <span>89</span>
                        </button>
                    </div>
                </article>

                <!-- Proposta 4 - Tecnologia (Aprovada) -->
                <article class="proposal-card approved">
                    <div class="proposal-header">
                        <div class="proposal-categories">
                            <span class="category-badge tecnologia">Tecnologia</span>
                            <span class="status-badge verificado">Verificado</span>
                            <span class="status-badge aprovada">Aprovada</span>
                        </div>
                        <div class="support-percentage">
                            <div class="percentage-circle success">
                                <div class="percentage-text">91%</div>
                                <div class="percentage-label">Apoio</div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="proposal-title">WiFi gratuito em todas as praças públicas</h3>
                    
                    <p class="proposal-description">
                        Democratização do acesso à internet através de pontos WiFi gratuitos em espaços públicos.
                    </p>
                    
                    <div class="proposal-author">
                        <span>Por Tech4All</span>
                    </div>
                    
                    <div class="approval-notice">
                        <div class="approval-content">
                            <i class="fas fa-check-circle"></i>
                            <div class="approval-text">
                                <h4>Proposta Aprovada!</h4>
                                <p>Projeto foi sancionado e será implementado nos próximos 6 meses em 15 praças da cidade.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="proposal-progress">
                        <div class="progress-bar">
                            <div class="progress-fill success" style="width: 91%"></div>
                        </div>
                        <div class="progress-stats">
                            <div class="votes-info">
                                <span class="votes-count">2134 votos favoráveis</span>
                                <span class="votes-against">234 contrários</span>
                            </div>
                            <div class="time-info">
                                <i class="fas fa-check-circle"></i>
                                <span>Aprovada!</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="proposal-actions">
                        <button class="action-btn support disabled">
                            <i class="fas fa-thumbs-up"></i>
                            <span>Apoiar</span>
                        </button>
                        <button class="action-btn oppose disabled">
                            <i class="fas fa-thumbs-down"></i>
                            <span>Contra</span>
                        </button>
                        <button class="action-btn comment">
                            <i class="fas fa-comment"></i>
                            <span>456</span>
                        </button>
                    </div>
                </article>

                <!-- Proposta 5 - Educação -->
                <article class="proposal-card">
                    <div class="proposal-header">
                        <div class="proposal-categories">
                            <span class="category-badge educacao">Educação</span>
                            <span class="status-badge votacao">Em votação</span>
                        </div>
                        <div class="support-percentage">
                            <div class="percentage-circle orange">
                                <div class="percentage-text">68%</div>
                                <div class="percentage-label">Apoio</div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="proposal-title">Programa de reforço escolar gratuito nos fins de semana</h3>
                    
                    <p class="proposal-description">
                        Aulas de reforço em matemática e português para estudantes com dificuldades de aprendizado.
                    </p>
                    
                    <div class="proposal-author">
                        <span>Por Prof. João Lima</span>
                    </div>
                    
                    <div class="proposal-progress">
                        <div class="progress-bar">
                            <div class="progress-fill orange" style="width: 68%"></div>
                        </div>
                        <div class="progress-stats">
                            <div class="votes-info">
                                <span class="votes-count">487 votos favoráveis</span>
                                <span class="votes-against">229 contrários</span>
                            </div>
                            <div class="time-info">
                                <i class="fas fa-clock"></i>
                                <span>15 dias</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="proposal-actions">
                        <button class="action-btn support">
                            <i class="fas fa-thumbs-up"></i>
                            <span>Apoiar</span>
                        </button>
                        <button class="action-btn oppose">
                            <i class="fas fa-thumbs-down"></i>
                            <span>Contra</span>
                        </button>
                        <button class="action-btn comment">
                            <i class="fas fa-comment"></i>
                            <span>142</span>
                        </button>
                    </div>
                </article>
            </div>
            
            <!-- Action Buttons -->
            <div class="proposals-actions">
              <a href="nova-proposta.php" class="btn btn-primary">
              <i class="fas fa-plus"></i>
        Criar Nova Proposta
             </a>
             <a href="todas-propostas.php" class="btn btn-outline">Ver Todas as Propostas</a>
</div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="impact-section">
        <div class="container">
            <div class="impact-header">
                <i class="fas fa-check-circle"></i>
                <h2>Impacto Real</h2>
            </div>
            <p class="impact-description">
                Veja como a participação popular está transformando nossa cidade
            </p>
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

    <!-- CSS específico para página de propostas -->
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

        /* Proposals Section */
        .proposals-section {
            padding: 60px 0;
            background: #f9fafb;
        }

        .proposals-list {
            display: flex;
            flex-direction: column;
            gap: 32px;
            margin-bottom: 48px;
        }

        .proposal-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 28px;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .proposal-card:hover {
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            border-color: #2563eb;
            transform: translateY(-2px);
        }

        .proposal-card.approved {
            border-left: 4px solid #059669;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        }

        .proposal-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .proposal-categories {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .category-badge {
            padding: 6px 12px;
            border-radius: 16px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .category-badge.saude {
            background: #dbeafe;
            color: #1e40af;
        }

        .category-badge.transporte {
            background: #d1fae5;
            color: #065f46;
        }

        .category-badge.meio-ambiente {
            background: #dcfce7;
            color: #166534;
        }

        .category-badge.tecnologia {
            background: #e0e7ff;
            color: #3730a3;
        }

        .category-badge.educacao {
            background: #fef3c7;
            color: #92400e;
        }

        .status-badge {
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
        }

        .status-badge.verificado {
            background: #d1fae5;
            color: #059669;
        }

        .status-badge.votacao {
            background: #fef3c7;
            color: #d97706;
        }

        .status-badge.enviada {
            background: #e0e7ff;
            color: #3730a3;
        }

        .status-badge.aprovada {
            background: #d1fae5;
            color: #059669;
        }

        .support-percentage {
            display: flex;
            align-items: center;
        }

        .percentage-circle {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            border: 4px solid #2563eb;
            border-radius: 50%;
            background: white;
        }

        .percentage-circle.orange {
            border-color: #f59e0b;
        }

        .percentage-circle.success {
            border-color: #059669;
        }

        .percentage-text {
            font-size: 20px;
            font-weight: 700;
            color: #1f2937;
        }

        .percentage-label {
            font-size: 11px;
            color: #6b7280;
            text-transform: uppercase;
            font-weight: 600;
        }

        .proposal-title {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 12px;
            color: #1f2937;
            line-height: 1.4;
        }

        .proposal-description {
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 12px;
            font-size: 15px;
        }

        .proposal-author {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 20px;
        }

        .approval-notice {
            background: #d1fae5;
            border: 1px solid #a7f3d0;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 20px;
        }

        .approval-content {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .approval-content i {
            color: #059669;
            font-size: 20px;
            margin-top: 2px;
        }

        .approval-text h4 {
            font-size: 14px;
            font-weight: 600;
            color: #065f46;
            margin-bottom: 4px;
        }

        .approval-text p {
            font-size: 13px;
            color: #047857;
            margin: 0;
        }

        .proposal-progress {
            margin-bottom: 20px;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e5e7eb;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 12px;
        }

        .progress-fill {
            height: 100%;
            background: #2563eb;
            border-radius: 4px;
            transition: width 0.3s ease;
        }

        .progress-fill.orange {
            background: #f59e0b;
        }

        .progress-fill.success {
            background: #059669;
        }

        .progress-stats {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .votes-info {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .votes-count {
            font-size: 14px;
            color: #059669;
            font-weight: 600;
        }

        .votes-against {
            font-size: 13px;
            color: #dc2626;
        }

        .time-info {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #6b7280;
            font-size: 14px;
        }

        .proposal-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
        }

        .action-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            background: transparent;
            border: 1px solid #e5e7eb;
            padding: 10px 16px;
            border-radius: 8px;
            color: #6b7280;
            cursor: pointer;
            transition: all 0.2s ease;
            font-size: 14px;
            font-weight: 500;
        }

        .action-btn:hover {
            border-color: #2563eb;
            color: #2563eb;
        }

        .action-btn.support:hover {
            border-color: #059669;
            color: #059669;
            background: #f0fdf4;
        }

        .action-btn.oppose:hover {
            border-color: #dc2626;
            color: #dc2626;
            background: #fef2f2;
        }

        .action-btn.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .action-btn.disabled:hover {
            border-color: #e5e7eb;
            color: #6b7280;
            background: transparent;
        }

        .proposals-actions {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Impact Section */
        .impact-section {
            padding: 60px 0;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            text-align: center;
        }

        .impact-header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .impact-header i {
            font-size: 36px;
            color: #059669;
        }

        .impact-header h2 {
            font-size: 32px;
            font-weight: 700;
            color: #1f2937;
            margin: 0;
        }

        .impact-description {
            font-size: 18px;
            color: #6b7280;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .proposal-header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }

            .support-percentage {
                align-self: flex-end;
            }

            .percentage-circle {
                width: 60px;
                height: 60px;
            }

            .percentage-text {
                font-size: 16px;
            }

            .proposal-actions {
                flex-direction: column;
                gap: 12px;
            }

            .action-btn {
                width: 100%;
                justify-content: center;
            }

            .progress-stats {
                flex-direction: column;
                gap: 8px;
                align-items: flex-start;
            }
        }
    </style>

    <script src="js/main.js"></script>
</body>
</html>