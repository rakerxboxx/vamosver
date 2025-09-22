<?php
session_start();

// Dados simulados para analytics
$analytics_data = [
    'users_growth' => [
        'jan' => 1200, 'feb' => 1450, 'mar' => 1680, 'apr' => 1920, 
        'may' => 2180, 'jun' => 2450, 'jul' => 2680, 'aug' => 2920,
        'sep' => 3150, 'oct' => 3380, 'nov' => 3620, 'dec' => 3850
    ],
    'complaints_by_category' => [
        'Saúde' => 156,
        'Transporte' => 89,
        'Educação' => 134,
        'Segurança' => 67,
        'Infraestrutura' => 92,
        'Meio Ambiente' => 78
    ],
    'resolution_rate' => [
        'Q1' => 68, 'Q2' => 72, 'Q3' => 75, 'Q4' => 78
    ],
    'monthly_revenue' => [
        'jan' => 12580, 'feb' => 13420, 'mar' => 14680, 'apr' => 15920,
        'may' => 17180, 'jun' => 18450, 'jul' => 19680, 'aug' => 20920
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics - O Democrata</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <a href="analytics.php" class="nav-link active">Analytics</a>
                    </div>
                </div>
                <div class="nav-right">
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Buscar dados...">
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

    <!-- Analytics Dashboard -->
    <main class="analytics-dashboard">
        <div class="container">
            <!-- Analytics Header -->
            <div class="analytics-header">
                <div class="header-content">
                    <h1><i class="fas fa-chart-line"></i> Analytics & Insights</h1>
                    <p>Dados em tempo real da plataforma O Democrata</p>
                </div>
                <div class="header-controls">
                    <select class="time-filter">
                        <option>Últimos 30 dias</option>
                        <option>Últimos 90 dias</option>
                        <option>Último ano</option>
                    </select>
                    <button class="export-btn">
                        <i class="fas fa-download"></i>
                        Exportar
                    </button>
                </div>
            </div>

            <!-- Key Metrics -->
            <div class="metrics-overview">
                <div class="metric-card primary">
                    <div class="metric-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="metric-content">
                        <div class="metric-value">3.85k</div>
                        <div class="metric-label">Usuários Ativos</div>
                        <div class="metric-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+12.5%</span>
                        </div>
                    </div>
                </div>

                <div class="metric-card success">
                    <div class="metric-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="metric-content">
                        <div class="metric-value">1.24k</div>
                        <div class="metric-label">Reclamações</div>
                        <div class="metric-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+8.2%</span>
                        </div>
                    </div>
                </div>

                <div class="metric-card warning">
                    <div class="metric-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="metric-content">
                        <div class="metric-value">78%</div>
                        <div class="metric-label">Taxa Resolução</div>
                        <div class="metric-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+3.1%</span>
                        </div>
                    </div>
                </div>

                <div class="metric-card info">
                    <div class="metric-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="metric-content">
                        <div class="metric-value">R$ 20.9k</div>
                        <div class="metric-label">Receita Mensal</div>
                        <div class="metric-change positive">
                            <i class="fas fa-arrow-up"></i>
                            <span>+15.3%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Grid -->
            <div class="charts-grid">
                <!-- Users Growth Chart -->
                <div class="chart-container large">
                    <div class="chart-header">
                        <h3><i class="fas fa-chart-area"></i> Crescimento de Usuários</h3>
                        <div class="chart-controls">
                            <button class="chart-btn active">Mês</button>
                            <button class="chart-btn">Ano</button>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="usersChart"></canvas>
                    </div>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <div class="legend-dot" style="background: #2563eb;"></div>
                            <span>Usuários Ativos</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-dot" style="background: #10b981;"></div>
                            <span>Novos Cadastros</span>
                        </div>
                    </div>
                </div>

                <!-- Complaints by Category -->
                <div class="chart-container medium">
                    <div class="chart-header">
                        <h3><i class="fas fa-chart-pie"></i> Reclamações por Categoria</h3>
                        <button class="chart-options">
                            <i class="fas fa-ellipsis-v"></i>
                        </button>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="categoryChart"></canvas>
                    </div>
                    <div class="category-list">
                        <div class="category-item">
                            <div class="category-color saude"></div>
                            <span class="category-name">Saúde</span>
                            <span class="category-value">156</span>
                            <span class="category-percent">25.1%</span>
                        </div>
                        <div class="category-item">
                            <div class="category-color educacao"></div>
                            <span class="category-name">Educação</span>
                            <span class="category-value">134</span>
                            <span class="category-percent">21.6%</span>
                        </div>
                        <div class="category-item">
                            <div class="category-color infraestrutura"></div>
                            <span class="category-name">Infraestrutura</span>
                            <span class="category-value">92</span>
                            <span class="category-percent">14.8%</span>
                        </div>
                        <div class="category-item">
                            <div class="category-color transporte"></div>
                            <span class="category-name">Transporte</span>
                            <span class="category-value">89</span>
                            <span class="category-percent">14.3%</span>
                        </div>
                        <div class="category-item">
                            <div class="category-color meio-ambiente"></div>
                            <span class="category-name">Meio Ambiente</span>
                            <span class="category-value">78</span>
                            <span class="category-percent">12.6%</span>
                        </div>
                        <div class="category-item">
                            <div class="category-color seguranca"></div>
                            <span class="category-name">Segurança</span>
                            <span class="category-value">67</span>
                            <span class="category-percent">10.8%</span>
                        </div>
                    </div>
                </div>

                <!-- Resolution Rate Trend -->
                <div class="chart-container medium">
                    <div class="chart-header">
                        <h3><i class="fas fa-chart-line"></i> Taxa de Resolução</h3>
                        <div class="current-rate">
                            <span class="rate-value">78%</span>
                            <span class="rate-trend positive">+3.1%</span>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="resolutionChart"></canvas>
                    </div>
                    <div class="resolution-insights">
                        <div class="insight-item">
                            <i class="fas fa-trend-up text-success"></i>
                            <span>Melhoria consistente nos últimos 6 meses</span>
                        </div>
                        <div class="insight-item">
                            <i class="fas fa-clock text-warning"></i>
                            <span>Tempo médio: 2.3 dias</span>
                        </div>
                    </div>
                </div>

                <!-- Revenue Chart -->
                <div class="chart-container large">
                    <div class="chart-header">
                        <h3><i class="fas fa-chart-bar"></i> Receita Mensal</h3>
                        <div class="revenue-summary">
                            <div class="summary-item">
                                <span class="summary-label">Este mês</span>
                                <span class="summary-value">R$ 20.920</span>
                            </div>
                            <div class="summary-item">
                                <span class="summary-label">Meta</span>
                                <span class="summary-value">R$ 25.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="revenueChart"></canvas>
                    </div>
                    <div class="revenue-breakdown">
                        <div class="breakdown-item">
                            <div class="breakdown-color" style="background: #2563eb;"></div>
                            <span>Plano Premium</span>
                            <span class="breakdown-value">R$ 12.5k</span>
                        </div>
                        <div class="breakdown-item">
                            <div class="breakdown-color" style="background: #059669;"></div>
                            <span>Plano Pro</span>
                            <span class="breakdown-value">R$ 8.4k</span>
                        </div>
                    </div>
                </div>

                <!-- Performance Metrics -->
                <div class="chart-container medium">
                    <div class="chart-header">
                        <h3><i class="fas fa-tachometer-alt"></i> Performance</h3>
                    </div>
                    <div class="performance-metrics">
                        <div class="performance-item">
                            <div class="performance-label">Tempo de Resposta</div>
                            <div class="performance-value">1.2s</div>
                            <div class="performance-bar">
                                <div class="performance-fill success" style="width: 85%;"></div>
                            </div>
                        </div>
                        
                        <div class="performance-item">
                            <div class="performance-label">Uptime</div>
                            <div class="performance-value">99.9%</div>
                            <div class="performance-bar">
                                <div class="performance-fill success" style="width: 99%;"></div>
                            </div>
                        </div>
                        
                        <div class="performance-item">
                            <div class="performance-label">Satisfação</div>
                            <div class="performance-value">4.2/5</div>
                            <div class="performance-bar">
                                <div class="performance-fill warning" style="width: 84%;"></div>
                            </div>
                        </div>
                        
                        <div class="performance-item">
                            <div class="performance-label">Conversão</div>
                            <div class="performance-value">12.5%</div>
                            <div class="performance-bar">
                                <div class="performance-fill primary" style="width: 62%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Top Content -->
                <div class="chart-container medium">
                    <div class="chart-header">
                        <h3><i class="fas fa-fire"></i> Conteúdo em Destaque</h3>
                    </div>
                    <div class="content-list">
                        <div class="content-item">
                            <div class="content-rank">1</div>
                            <div class="content-info">
                                <h4>Buraco na Rua das Flores</h4>
                                <span class="content-meta">Infraestrutura • São Paulo</span>
                            </div>
                            <div class="content-stats">
                                <div class="stat">
                                    <i class="fas fa-eye"></i>
                                    <span>2.3k</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-thumbs-up"></i>
                                    <span>156</span>
                                </div>
                            </div>
                        </div>

                        <div class="content-item">
                            <div class="content-rank">2</div>
                            <div class="content-info">
                                <h4>Falta de médicos no Hospital Municipal</h4>
                                <span class="content-meta">Saúde • Rio de Janeiro</span>
                            </div>
                            <div class="content-stats">
                                <div class="stat">
                                    <i class="fas fa-eye"></i>
                                    <span>1.8k</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-thumbs-up"></i>
                                    <span>134</span>
                                </div>
                            </div>
                        </div>

                        <div class="content-item">
                            <div class="content-rank">3</div>
                            <div class="content-info">
                                <h4>Proposta de ciclovias no centro</h4>
                                <span class="content-meta">Transporte • Belo Horizonte</span>
                            </div>
                            <div class="content-stats">
                                <div class="stat">
                                    <i class="fas fa-eye"></i>
                                    <span>1.5k</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-thumbs-up"></i>
                                    <span>98</span>
                                </div>
                            </div>
                        </div>

                        <div class="content-item">
                            <div class="content-rank">4</div>
                            <div class="content-info">
                                <h4>Limpeza urbana irregular</h4>
                                <span class="content-meta">Meio Ambiente • Salvador</span>
                            </div>
                            <div class="content-stats">
                                <div class="stat">
                                    <i class="fas fa-eye"></i>
                                    <span>1.2k</span>
                                </div>
                                <div class="stat">
                                    <i class="fas fa-thumbs-up"></i>
                                    <span>87</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Analytics CSS -->
    <style>
        .analytics-dashboard {
            background: #f8fafc;
            min-height: calc(100vh - 80px);
            padding: 32px 0;
        }

        .analytics-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 32px;
        }

        .header-content h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-content p {
            color: #6b7280;
            margin: 0;
        }

        .header-controls {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .time-filter,
        .export-btn {
            padding: 10px 16px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
        }

        .time-filter {
            background: white;
            color: #374151;
        }

        .export-btn {
            background: #2563eb;
            color: white;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .export-btn:hover {
            background: #1d4ed8;
        }

        /* Metrics Overview */
        .metrics-overview {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
            margin-bottom: 32px;
        }

        .metric-card {
            background: white;
            border-radius: 16px;
            padding: 24px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }

        .metric-card:hover {
            transform: translateY(-2px);
        }

        .metric-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .metric-card.primary .metric-icon {
            background: #dbeafe;
            color: #1e40af;
        }

        .metric-card.success .metric-icon {
            background: #d1fae5;
            color: #065f46;
        }

        .metric-card.warning .metric-icon {
            background: #fef3c7;
            color: #92400e;
        }

        .metric-card.info .metric-icon {
            background: #e0f2fe;
            color: #0369a1;
        }

        .metric-value {
            font-size: 2rem;
            font-weight: 700;
            color: #1f2937;
            line-height: 1;
        }

        .metric-label {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 4px;
        }

        .metric-change {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 12px;
            font-weight: 600;
        }

        .metric-change.positive {
            color: #059669;
        }

        .metric-change.negative {
            color: #dc2626;
        }

        /* Charts Grid */
        .charts-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }

        .chart-container {
            background: white;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .chart-container.large {
            grid-column: span 8;
        }

        .chart-container.medium {
            grid-column: span 4;
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .chart-header h3 {
            font-size: 1.125rem;
            font-weight: 600;
            color: #1f2937;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .chart-controls {
            display: flex;
            gap: 8px;
        }

        .chart-btn {
            padding: 6px 12px;
            border: 1px solid #e5e7eb;
            background: white;
            border-radius: 6px;
            font-size: 12px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .chart-btn.active {
            background: #2563eb;
            color: white;
            border-color: #2563eb;
        }

        .chart-wrapper {
            height: 300px;
            margin-bottom: 16px;
        }

        .chart-legend {
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #6b7280;
        }

        .legend-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        /* Category List */
        .category-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .category-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 0;
        }

        .category-color {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .category-color.saude { background: #3b82f6; }
        .category-color.educacao { background: #8b5cf6; }
        .category-color.infraestrutura { background: #f59e0b; }
        .category-color.transporte { background: #10b981; }
        .category-color.meio-ambiente { background: #06b6d4; }
        .category-color.seguranca { background: #ef4444; }

        .category-name {
            flex: 1;
            font-size: 14px;
            color: #374151;
        }

        .category-value {
            font-weight: 600;
            color: #1f2937;
            min-width: 40px;
        }

        .category-percent {
            font-size: 12px;
            color: #6b7280;
            min-width: 50px;
        }

        /* Performance Metrics */
        .performance-metrics {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .performance-item {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .performance-label {
            font-size: 14px;
            color: #6b7280;
        }

        .performance-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
        }

        .performance-bar {
            height: 6px;
            background: #e5e7eb;
            border-radius: 3px;
            overflow: hidden;
        }

        .performance-fill {
            height: 100%;
            border-radius: 3px;
            transition: width 0.3s ease;
        }

        .performance-fill.success { background: #10b981; }
        .performance-fill.warning { background: #f59e0b; }
        .performance-fill.primary { background: #2563eb; }

        /* Content List */
        .content-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .content-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 12px;
            border-radius: 8px;
            transition: background 0.2s ease;
        }

        .content-item:hover {
            background: #f8fafc;
        }

        .content-rank {
            width: 28px;
            height: 28px;
            background: #2563eb;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 12px;
        }

        .content-info {
            flex: 1;
        }

        .content-info h4 {
            font-size: 14px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 4px;
        }

        .content-meta {
            font-size: 12px;
            color: #6b7280;
        }

        .content-stats {
            display: flex;
            gap: 12px;
        }

        .stat {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 12px;
            color: #6b7280;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .chart-container.large,
            .chart-container.medium {
                grid-column: span 12;
            }
        }

        @media (max-width: 768px) {
            .analytics-header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }

            .metrics-overview {
                grid-template-columns: 1fr;
            }

            .charts-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- Charts JavaScript -->
    <script>
        // Users Growth Chart
        const usersCtx = document.getElementById('usersChart').getContext('2d');
        new Chart(usersCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Usuários Ativos',
                    data: [1200, 1450, 1680, 1920, 2180, 2450, 2680, 2920, 3150, 3380, 3620, 3850],
                    borderColor: '#2563eb',
                    backgroundColor: 'rgba(37, 99, 235, 0.1)',
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Novos Cadastros',
                    data: [180, 220, 250, 280, 320, 380, 420, 460, 490, 520, 560, 580],
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f3f4f6'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Category Pie Chart
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        new Chart(categoryCtx, {
            type: 'doughnut',
            data: {
                labels: ['Saúde', 'Educação', 'Infraestrutura', 'Transporte', 'Meio Ambiente', 'Segurança'],
                datasets: [{
                    data: [156, 134, 92, 89, 78, 67],
                    backgroundColor: ['#3b82f6', '#8b5cf6', '#f59e0b', '#10b981', '#06b6d4', '#ef4444'],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Resolution Rate Chart
        const resolutionCtx = document.getElementById('resolutionChart').getContext('2d');
        new Chart(resolutionCtx, {
            type: 'line',
            data: {
                labels: ['Q1', 'Q2', 'Q3', 'Q4'],
                datasets: [{
                    label: 'Taxa de Resolução',
                    data: [68, 72, 75, 78],
                    borderColor: '#059669',
                    backgroundColor: 'rgba(5, 150, 105, 0.1)',
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#059669',
                    pointRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 60,
                        max: 85,
                        grid: {
                            color: '#f3f4f6'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Revenue Chart
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
                datasets: [{
                    label: 'Receita',
                    data: [12580, 13420, 14680, 15920, 17180, 18450, 19680, 20920],
                    backgroundColor: '#2563eb',
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#f3f4f6'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    </script>

    <script src="js/main.js"></script>
</body>
</html>