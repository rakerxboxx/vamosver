<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Democrata - Sua voz na democracia digital</title>
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
                        <a href="index.php" class="nav-link active">Início</a>
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
                    <a href="login.php" class="nav-btn">Login</a>
                    <a href="cadastro.php" class="nav-btn primary">Cadastrar</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" style="background: linear-gradient(135deg, var(--color-background) 0%, var(--color-secondary) 100%);">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-left">
                    <h1 class="hero-title">
                        Sua voz na <span class="text-primary">democracia digital</span>
                    </h1>
                    <p class="hero-description">
                        Reclamações, denúncias e participação popular em uma plataforma 
                        transparente. Una-se a milhares de cidadãos construindo um país melhor.
                    </p>
                    <div class="hero-buttons">
                        <a href="reclamacoes.php" class="btn btn-primary">
                            <i class="fas fa-megaphone"></i>
                            Fazer uma Reclamação
                        </a>
                        <a href="propostas.php" class="btn btn-outline">
                            <i class="fas fa-lightbulb"></i>
                            Explorar Propostas
                        </a>
                    </div>
                </div>
                <div class="hero-right">
                    <div class="hero-illustration">
                        <svg class="hero-svg" viewBox="0 0 400 300" fill="none">
                            <!-- Illustration of people engaging with digital platform -->
                            <defs>
                                <linearGradient id="bgGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#e0f2fe"/>
                                    <stop offset="100%" style="stop-color:#b3e5fc"/>
                                </linearGradient>
                            </defs>
                            <!-- Background -->
                            <rect width="400" height="300" fill="url(#bgGradient)" rx="12"/>
                            <!-- Computer Screen -->
                            <rect x="120" y="80" width="160" height="100" fill="#1f2937" rx="8"/>
                            <rect x="130" y="90" width="140" height="80" fill="#3b82f6" rx="4"/>
                            <!-- People -->
                            <circle cx="80" cy="140" r="20" fill="#f59e0b"/>
                            <circle cx="320" cy="140" r="20" fill="#10b981"/>
                            <circle cx="60" cy="220" r="20" fill="#ef4444"/>
                            <circle cx="340" cy="220" r="20" fill="#8b5cf6"/>
                            <!-- Speech bubbles -->
                            <ellipse cx="45" cy="120" rx="15" ry="8" fill="white" stroke="#e5e7eb"/>
                            <ellipse cx="355" cy="120" rx="15" ry="8" fill="white" stroke="#e5e7eb"/>
                            <!-- Connection lines -->
                            <path d="M100 140 L130 140" stroke="#3b82f6" stroke-width="2"/>
                            <path d="M280 140 L300 140" stroke="#3b82f6" stroke-width="2"/>
                            <path d="M80 220 L130 180" stroke="#3b82f6" stroke-width="2"/>
                            <path d="M320 220 L280 180" stroke="#3b82f6" stroke-width="2"/>
                            <!-- Icons -->
                            <text x="200" y="135" text-anchor="middle" fill="white" font-size="24">💬</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-label">Reclamações</div>
                        <div class="stat-number">12.5k+</div>
                    </div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-label">Cidadãos</div>
                        <div class="stat-number">50k+</div>
                    </div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon success">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-label">Resolvidas</div>
                        <div class="stat-number">8.2k+</div>
                    </div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-label">Instituições</div>
                        <div class="stat-number">200+</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-preview">
        <div class="container">
            <div class="section-header">
                <h2>Mapa Dinâmico de Reclamações</h2>
                <p>Explore os dados de reclamações por região. Navegue do Brasil para estados e cidades para ver detalhes específicos.</p>
            </div>
            
            <div class="map-container-preview">
                <div class="map-sidebar">
                    <h3>Brasil</h3>
                    <button class="filter-btn">
                        <i class="fas fa-filter"></i>
                        Filtros
                    </button>
                </div>
                
                <div class="brazil-map-preview">
                    <div class="map-title">
                        <h3>Brasil - Visão Nacional</h3>
                        <p>Clique em um estado para ver os detalhes</p>
                    </div>
                    
                    <div class="states-grid">
                        <div class="state-card high">
                            <h4>São Paulo</h4>
                            <div class="state-stats">
                                <span class="total">Total: 240</span>
                                <span class="percentage">31%</span>
                            </div>
                        </div>
                        
                        <div class="state-card high">
                            <h4>Rio de Janeiro</h4>
                            <div class="state-stats">
                                <span class="total">Total: 166</span>
                                <span class="percentage">33%</span>
                            </div>
                        </div>
                        
                        <div class="state-card medium">
                            <h4>Minas Gerais</h4>
                            <div class="state-stats">
                                <span class="total">Total: 188</span>
                                <span class="percentage">32%</span>
                            </div>
                        </div>
                        
                        <div class="state-card high">
                            <h4>Rio Grande do Sul</h4>
                            <div class="state-stats">
                                <span class="total">Total: 170</span>
                                <span class="percentage">37%</span>
                            </div>
                        </div>
                        
                        <div class="state-card high">
                            <h4>Paraná</h4>
                            <div class="state-stats">
                                <span class="total">Total: 201</span>
                                <span class="percentage">33%</span>
                            </div>
                        </div>
                        
                        <div class="state-card medium">
                            <h4>Santa Catarina</h4>
                            <div class="state-stats">
                                <span class="total">Total: 177</span>
                                <span class="percentage">31%</span>
                            </div>
                        </div>
                        
                        <div class="state-card high">
                            <h4>Bahia</h4>
                            <div class="state-stats">
                                <span class="total">Total: 199</span>
                                <span class="percentage">34%</span>
                            </div>
                        </div>
                        
                        <div class="state-card high">
                            <h4>Goiás</h4>
                            <div class="state-stats">
                                <span class="total">Total: 239</span>
                                <span class="percentage">36%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="map-legend">
                        <div class="legend-item">
                            <div class="legend-dot high"></div>
                            <span>≥70% Resolvidas</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-dot medium"></div>
                            <span>40-69% Resolvidas</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-dot low"></div>
                            <span><40% Resolvidas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Topics -->
    <section class="featured-topics">
        <div class="container">
            <div class="section-header">
                <i class="fas fa-trending-up"></i>
                <h2>Em Destaque</h2>
                <p>Os temas mais comentados e votados pela comunidade nesta semana</p>
            </div>
            
            <div class="topics-grid">
                <article class="topic-card">
                    <div class="topic-header">
                        <div class="topic-category saude">
                            <span>Saúde Pública</span>
                            <span class="topic-status hot">Em alta</span>
                        </div>
                    </div>
                    <h3 class="topic-title">Falta de médicos no Hospital Municipal - Emergência crítica</h3>
                    <div class="topic-stats">
                        <div class="stat-group">
                            <span class="stat"><i class="fas fa-thumbs-up"></i> 1247</span>
                            <span class="stat"><i class="fas fa-comment"></i> 89</span>
                        </div>
                        <span class="topic-time">3 horas atrás</span>
                    </div>
                </article>

                <article class="topic-card">
                    <div class="topic-header">
                        <div class="topic-category transporte">
                            <span>Transporte</span>
                            <span class="topic-status hot">Em alta</span>
                        </div>
                    </div>
                    <h3 class="topic-title">Proposta: Mais ciclovias no centro da cidade</h3>
                    <div class="topic-stats">
                        <div class="stat-group">
                            <span class="stat"><i class="fas fa-thumbs-up"></i> 856</span>
                            <span class="stat"><i class="fas fa-comment"></i> 156</span>
                        </div>
                        <span class="topic-time">5 horas atrás</span>
                    </div>
                </article>

                <article class="topic-card">
                    <div class="topic-header">
                        <div class="topic-category infraestrutura">
                            <span>Infraestrutura</span>
                        </div>
                    </div>
                    <h3 class="topic-title">Problema de iluminação na Rua das Palmeiras resolvido!</h3>
                    <div class="topic-stats">
                        <div class="stat-group">
                            <span class="stat"><i class="fas fa-thumbs-up"></i> 423</span>
                            <span class="stat"><i class="fas fa-comment"></i> 67</span>
                        </div>
                        <span class="topic-time">1 dia atrás</span>
                    </div>
                </article>
            </div>
            
            <div class="view-all-btn">
                <a href="discussoes.php" class="btn btn-outline">Ver Todas as Discussões</a>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <div class="container">
            <div class="section-header">
                <h2>Categorias Principais</h2>
                <p>Escolha a categoria que melhor representa sua reclamação ou explore os temas mais discutidos</p>
            </div>
            
            <div class="categories-grid">
                <div class="category-card active">
                    <div class="category-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="category-content">
                        <div class="category-badge">Em alta</div>
                        <h3>Saúde Pública</h3>
                        <p>Hospitais, postos de saúde, atendimento médico</p>
                        <span class="category-count">1247 reclamações</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="category-content">
                        <h3>Educação</h3>
                        <p>Escolas, universidades, ensino público</p>
                        <span class="category-count">856 reclamações</span>
                    </div>
                </div>

                <div class="category-card active">
                    <div class="category-icon">
                        <i class="fas fa-bus"></i>
                    </div>
                    <div class="category-content">
                        <div class="category-badge">Em alta</div>
                        <h3>Transporte</h3>
                        <p>Ônibus, trens, rodovias, trânsito</p>
                        <span class="category-count">923 reclamações</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="category-content">
                        <h3>Segurança</h3>
                        <p>Polícia, bombeiros, segurança pública</p>
                        <span class="category-count">567 reclamações</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="category-content">
                        <h3>Meio Ambiente</h3>
                        <p>Limpeza, coleta de lixo, preservação</p>
                        <span class="category-count">432 reclamações</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="category-content">
                        <h3>Infraestrutura</h3>
                        <p>Pavimentação, iluminação, saneamento</p>
                        <span class="category-count">789 reclamações</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="category-content">
                        <h3>Tributos</h3>
                        <p>Impostos, taxas, arrecadação</p>
                        <span class="category-count">234 reclamações</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="category-content">
                        <h3>Serviços Públicos</h3>
                        <p>Cartórios, Receita Federal, INSS</p>
                        <span class="category-count">645 reclamações</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <div class="category-content">
                        <h3>Assistência Social</h3>
                        <p>Programas sociais, benefícios</p>
                        <span class="category-count">378 reclamações</span>
                    </div>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <div class="category-content">
                        <h3>Propostas Legislativas</h3>
                        <p>Projetos de lei, consultas públicas</p>
                        <span class="category-count">156 reclamações</span>
                    </div>
                </div>
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

    <script src="js/main.js"></script>
</body>
</html>