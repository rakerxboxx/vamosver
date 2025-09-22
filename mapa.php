<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa Dinâmico de Reclamações - O Democrata</title>
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
                    <a href="login.php" class="nav-btn">Login</a>
                    <a href="cadastro.php" class="nav-btn primary">Cadastrar</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Mapa Dinâmico de Reclamações</h1>
        <p class="page-description">Explore os dados de reclamações por região. Navegue do Brasil para estados e cidades para ver detalhes específicos.</p>
    </div>
</section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <!-- Filters Sidebar -->
            <div class="map-layout">
                <aside class="map-filters">
                    <div class="filter-section">
                        <h3>Brasil</h3>
                        <button class="filter-toggle">
                            <i class="fas fa-filter"></i>
                            <span>Filtros</span>
                        </button>
                    </div>
                    
                    <div class="filter-group">
                        <label>Categoria</label>
                        <select class="filter-select">
                            <option value="">Todas</option>
                            <option value="saude">Saúde</option>
                            <option value="educacao">Educação</option>
                            <option value="transporte">Transporte</option>
                            <option value="infraestrutura">Infraestrutura</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <label>Período</label>
                        <select class="filter-select">
                            <option value="">Todos</option>
                            <option value="semana">Última semana</option>
                            <option value="mes">Último mês</option>
                            <option value="ano">Último ano</option>
                        </select>
                    </div>
                    
                    <div class="filter-actions">
                        <button class="btn btn-sm btn-outline">
                            <i class="fas fa-chart-bar"></i>
                            Gráficos
                        </button>
                        <button class="btn btn-sm btn-outline">
                            <i class="fas fa-download"></i>
                            Export
                        </button>
                    </div>
                </aside>
                
                <!-- Map Content -->
                <main class="map-content">
                    <div class="map-header">
                        <div class="breadcrumb">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="breadcrumb-text">Brasil</span>
                        </div>
                        <h2 class="map-title">Brasil - Visão Nacional</h2>
                        <p class="map-subtitle">Clique em um estado para ver os detalhes</p>
                    </div>
                    
                    <!-- Brazil Map Visualization -->
                    <div class="brazil-map">
                        <div class="map-container">
                            <svg viewBox="0 0 800 600" class="brazil-svg">
                                <!-- Simplified Brazil Map -->
                                
                                <!-- São Paulo -->
                                <g class="state-group" data-state="sp">
                                    <rect x="280" y="380" width="80" height="60" rx="5" fill="#ef4444" opacity="0.7"/>
                                    <text x="320" y="400" text-anchor="middle" class="state-label">SP</text>
                                    <text x="320" y="415" text-anchor="middle" class="state-count">128</text>
                                    <text x="320" y="430" text-anchor="middle" class="state-percentage">27%</text>
                                </g>
                                
                                <!-- Rio de Janeiro -->
                                <g class="state-group" data-state="rj">
                                    <rect x="380" y="390" width="70" height="50" rx="5" fill="#ef4444" opacity="0.6"/>
                                    <text x="415" y="410" text-anchor="middle" class="state-label">RJ</text>
                                    <text x="415" y="425" text-anchor="middle" class="state-count">202</text>
                                    <text x="415" y="440" text-anchor="middle" class="state-percentage">34%</text>
                                </g>
                                
                                <!-- Minas Gerais -->
                                <g class="state-group" data-state="mg">
                                    <rect x="320" y="320" width="90" height="70" rx="5" fill="#f59e0b" opacity="0.7"/>
                                    <text x="365" y="345" text-anchor="middle" class="state-label">MG</text>
                                    <text x="365" y="360" text-anchor="middle" class="state-count">105</text>
                                    <text x="365" y="375" text-anchor="middle" class="state-percentage">29%</text>
                                </g>
                                
                                <!-- Rio Grande do Sul -->
                                <g class="state-group" data-state="rs">
                                    <rect x="250" y="480" width="75" height="80" rx="5" fill="#ef4444" opacity="0.6"/>
                                    <text x="287" y="510" text-anchor="middle" class="state-label">RS</text>
                                    <text x="287" y="525" text-anchor="middle" class="state-count">180</text>
                                    <text x="287" y="540" text-anchor="middle" class="state-percentage">32%</text>
                                </g>
                                
                                <!-- Paraná -->
                                <g class="state-group" data-state="pr">
                                    <rect x="260" y="420" width="70" height="60" rx="5" fill="#ef4444" opacity="0.6"/>
                                    <text x="295" y="445" text-anchor="middle" class="state-label">PR</text>
                                    <text x="295" y="460" text-anchor="middle" class="state-count">158</text>
                                    <text x="295" y="475" text-anchor="middle" class="state-percentage">32%</text>
                                </g>
                                
                                <!-- Santa Catarina -->
                                <g class="state-group" data-state="sc">
                                    <rect x="280" y="450" width="65" height="50" rx="5" fill="#f59e0b" opacity="0.6"/>
                                    <text x="312" y="470" text-anchor="middle" class="state-label">SC</text>
                                    <text x="312" y="485" text-anchor="middle" class="state-count">121</text>
                                    <text x="312" y="500" text-anchor="middle" class="state-percentage">31%</text>
                                </g>
                                
                                <!-- Bahia -->
                                <g class="state-group" data-state="ba">
                                    <rect x="420" y="280" width="85" height="90" rx="5" fill="#ef4444" opacity="0.65"/>
                                    <text x="462" y="315" text-anchor="middle" class="state-label">BA</text>
                                    <text x="462" y="330" text-anchor="middle" class="state-count">206</text>
                                    <text x="462" y="345" text-anchor="middle" class="state-percentage">37%</text>
                                </g>
                                
                                <!-- Goiás -->
                                <g class="state-group" data-state="go">
                                    <rect x="350" y="280" width="75" height="70" rx="5" fill="#10b981" opacity="0.7"/>
                                    <text x="387" y="310" text-anchor="middle" class="state-label">GO</text>
                                    <text x="387" y="325" text-anchor="middle" class="state-count">142</text>
                                    <text x="387" y="340" text-anchor="middle" class="state-percentage">32%</text>
                                </g>
                                
                                <!-- More states would be added here -->
                                
                            </svg>
                        </div>
                        
                        <!-- Map Legend -->
                        <div class="map-legend">
                            <div class="legend-item">
                                <div class="legend-color" style="background: #ef4444;"></div>
                                <span>Alta concentração (>150)</span>
                            </div>
                            <div class="legend-item">
                                <div class="legend-color" style="background: #f59e0b;"></div>
                                <span>Média concentração (50-150)</span>
                            </div>
                            <div class="legend-item">
                                <div class="legend-color" style="background: #10b981;"></div>
                                <span>Baixa concentração (<50)</span>
                            </div>
                        </div>
                    </div>
                </main>
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

    <!-- CSS específico para página de mapa -->
    <style>
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            padding: 40px 0;
            text-align: center;
        }

        .page-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 12px;
            color: #1f2937;
        }

        .page-description {
            font-size: 16px;
            color: #6b7280;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Map Section */
        .map-section {
            padding: 40px 0;
            background: #f9fafb;
            min-height: calc(100vh - 200px);
        }

        .map-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 24px;
            align-items: start;
        }

        /* Filters Sidebar */
        .map-filters {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
            position: sticky;
            top: 100px;
        }

        .filter-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid #e5e7eb;
        }

        .filter-section h3 {
            font-size: 18px;
            font-weight: 600;
            color: #1f2937;
        }

        .filter-toggle {
            background: transparent;
            border: none;
            color: #6b7280;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 4px 8px;
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .filter-toggle:hover {
            background: #f3f4f6;
            color: #2563eb;
        }

        .filter-group {
            margin-bottom: 20px;
        }

        .filter-group label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #374151;
            margin-bottom: 6px;
        }

        .filter-select {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 14px;
            background: white;
        }

        .filter-select:focus {
            outline: none;
            border-color: #2563eb;
        }

        .filter-actions {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .btn-sm {
            padding: 8px 16px;
            font-size: 13px;
        }

        /* Map Content */
        .map-content {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
        }

        .map-header {
            margin-bottom: 24px;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .map-title {
            font-size: 24px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 4px;
        }

        .map-subtitle {
            color: #6b7280;
            font-size: 14px;
        }

        /* Brazil Map */
        .brazil-map {
            position: relative;
        }

        .map-container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
        }

        .brazil-svg {
            width: 100%;
            height: auto;
            cursor: pointer;
        }

        .state-group {
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .state-group:hover {
            transform: scale(1.05);
        }

        .state-group:hover rect {
            stroke: #2563eb;
            stroke-width: 2;
        }

        .state-label {
            font-size: 14px;
            font-weight: 600;
            fill: white;
        }

        .state-count {
            font-size: 12px;
            font-weight: 500;
            fill: white;
        }

        .state-percentage {
            font-size: 10px;
            fill: white;
        }

        /* Map Legend */
        .map-legend {
            display: flex;
            justify-content: center;
            gap: 24px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #6b7280;
        }

        .legend-color {
            width: 16px;
            height: 16px;
            border-radius: 3px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .map-layout {
                grid-template-columns: 1fr;
            }

            .map-filters {
                position: static;
            }
        }

        @media (max-width: 768px) {
            .map-section {
                padding: 20px 0;
            }

            .map-content {
                padding: 16px;
            }

            .map-legend {
                flex-direction: column;
                align-items: center;
                gap: 12px;
            }
        }
    </style>

    <script src="js/main.js"></script>
    <script>
        // Simple interaction for map states
        document.querySelectorAll('.state-group').forEach(state => {
            state.addEventListener('click', function() {
                const stateName = this.dataset.state;
                console.log('Clicked on state:', stateName);
                // Here you would navigate to state detail view
                // window.location.href = `mapa-estado.php?estado=${stateName}`;
            });
        });
    </script>
</body>
</html>