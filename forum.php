<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum de Discussões - O Democrata</title>
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
                    <a href="instituicao.php" class="nav-btn">Instituição</a>
                    <a href="#" class="nav-btn primary">Cadastrar</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-icon">
                <i class="fas fa-comments"></i>
            </div>
<h1 class="page-title">Fórum de Discussões</h1>
<p class="page-description">Participe das discussões e construa soluções coletivas para os problemas da sua cidade</p>
        </div>
    </section>

    <!-- Forum Topics -->
    <section class="forum-section">
        <div class="container">
            <div class="forum-grid">
                
                <!-- Discussão 1 - Saúde -->
                <article class="forum-topic">
                    <div class="topic-header">
                        <div class="topic-category">
                            <i class="fas fa-heartbeat"></i>
                            <span>Saúde</span>
                            <span class="topic-status verified">Verificado</span>
                        </div>
                    </div>
                    
                    <h3 class="topic-title">Como melhorar o atendimento na saúde pública?</h3>
                    
                    <div class="topic-author">Por Dr. Silva Santos</div>
                    
                    <div class="topic-stats">
                        <div class="stat-group">
                            <div class="stat-item">
                                <i class="fas fa-comment"></i>
                                <span>127 respostas</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-users"></i>
                                <span>45 participantes</span>
                            </div>
                        </div>
                        <div class="topic-time">
                            <i class="fas fa-clock"></i>
                            <span>2 horas atrás</span>
                        </div>
                    </div>
                </article>

                <!-- Discussão 2 - Transporte -->
                <article class="forum-topic">
                    <div class="topic-header">
                        <div class="topic-category transport">
                            <i class="fas fa-bus"></i>
                            <span>Transporte</span>
                        </div>
                    </div>
                    
                    <h3 class="topic-title">Discussão: Nova linha de ônibus para a Zona Norte</h3>
                    
                    <div class="topic-author">Por Ana Costa</div>
                    
                    <div class="topic-stats">
                        <div class="stat-group">
                            <div class="stat-item">
                                <i class="fas fa-comment"></i>
                                <span>89 respostas</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-users"></i>
                                <span>32 participantes</span>
                            </div>
                        </div>
                        <div class="topic-time">
                            <i class="fas fa-clock"></i>
                            <span>4 horas atrás</span>
                        </div>
                    </div>
                </article>

                <!-- Discussão 3 - Educação -->
                <article class="forum-topic">
                    <div class="topic-header">
                        <div class="topic-category education">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Educação</span>
                            <span class="topic-status verified">Verificado</span>
                        </div>
                    </div>
                    
                    <h3 class="topic-title">Segurança nas escolas: propostas e soluções</h3>
                    
                    <div class="topic-author">Por Prof. João Lima</div>
                    
                    <div class="topic-stats">
                        <div class="stat-group">
                            <div class="stat-item">
                                <i class="fas fa-comment"></i>
                                <span>156 respostas</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-users"></i>
                                <span>67 participantes</span>
                            </div>
                        </div>
                        <div class="topic-time">
                            <i class="fas fa-clock"></i>
                            <span>6 horas atrás</span>
                        </div>
                    </div>
                </article>

                <!-- Discussão 4 - Meio Ambiente -->
                <article class="forum-topic">
                    <div class="topic-header">
                        <div class="topic-category environment">
                            <i class="fas fa-leaf"></i>
                            <span>Meio Ambiente</span>
                        </div>
                    </div>
                    
                    <h3 class="topic-title">Coleta seletiva: como expandir para todos os bairros?</h3>
                    
                    <div class="topic-author">Por Maria Oliveira</div>
                    
                    <div class="topic-stats">
                        <div class="stat-group">
                            <div class="stat-item">
                                <i class="fas fa-comment"></i>
                                <span>73 respostas</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-users"></i>
                                <span>28 participantes</span>
                            </div>
                        </div>
                        <div class="topic-time">
                            <i class="fas fa-clock"></i>
                            <span>1 dia atrás</span>
                        </div>
                    </div>
                </article>
            </div>
            
            <!-- Action Buttons -->
            <div class="forum-actions">
                <a href="nova-discussao.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Criar Nova Discussão
                </a>
                <a href="todos-topicos.php" class="btn btn-outline">Ver Todos os Tópicos</a>
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

    <!-- CSS específico para página de fórum -->
    <style>
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            padding: 60px 0;
            text-align: center;
        }

        .page-header-icon {
            font-size: 48px;
            color: #0ea5e9;
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

        /* Forum Section */
        .forum-section {
            padding: 60px 0;
            background: #f9fafb;
        }

        .forum-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-bottom: 48px;
        }

        .forum-topic {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .forum-topic:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-color: #2563eb;
            transform: translateY(-1px);
        }

        .topic-header {
            margin-bottom: 16px;
        }

        .topic-category {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 8px;
        }

        .topic-category i {
            color: #2563eb;
        }

        .topic-category span:first-of-type {
            font-weight: 600;
            color: #1f2937;
        }

        .topic-category.transport i {
            color: #059669;
        }

        .topic-category.education i {
            color: #7c3aed;
        }

        .topic-category.environment i {
            color: #16a34a;
        }

        .topic-status {
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
            margin-left: auto;
        }

        .topic-status.verified {
            background: #d1fae5;
            color: #059669;
        }

        .topic-title {
            font-size: 20px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .topic-author {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 16px;
        }

        .topic-stats {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stat-group {
            display: flex;
            gap: 20px;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 4px;
            color: #6b7280;
            font-size: 14px;
        }

        .stat-item i {
            font-size: 14px;
        }

        .topic-time {
            display: flex;
            align-items: center;
            gap: 4px;
            color: #6b7280;
            font-size: 14px;
        }

        /* Forum Actions */
        .forum-actions {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .topic-stats {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }

            .forum-actions {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>

    <script src="js/main.js"></script>
</body>
</html>