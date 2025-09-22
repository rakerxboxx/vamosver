<?php
session_start();

// Verificação de permissão admin (simulada)
$is_admin = true; // Em produção, verificar sessão e permissões

if (!$is_admin) {
    header('Location: index.php');
    exit;
}

// Dados simulados do dashboard administrativo
$admin_stats = [
    'usuarios_totais' => 15420,
    'usuarios_ativos' => 8940,
    'receita_mensal' => 45680,
    'taxa_conversao' => 12.5,
    'denuncias_totais' => 3240,
    'denuncias_resolvidas' => 2180,
    'denuncias_pendentes' => 1060,
    'uptime' => 99.9,
    'versao_sistema' => '2.1.0'
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrativo - O Democrata</title>
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
                    <a href="admin.php" class="nav-btn active">Admin</a>
                    <a href="instituicao.php" class="nav-btn">Instituição</a>
                    <a href="#" class="nav-btn primary">Cadastrar</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Admin Dashboard -->
    <main class="admin-dashboard">
        <div class="container">
            <!-- Header -->
            <div class="admin-header">
                <div class="admin-title-section">
                    <h1>Dashboard Administrativo</h1>
                    <p>Gerencie toda a plataforma O Democrata</p>
                </div>
                <div class="admin-badge">
                    <i class="fas fa-shield-alt"></i>
                    <span>Admin</span>
                </div>
            </div>

            <!-- Stats Overview -->
            <section class="admin-stats-section">
                <div class="admin-stats-grid">
                    <div class="admin-stat-card">
                        <div class="stat-icon blue">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Usuários Totais</span>
                            <span class="stat-value"><?php echo number_format($admin_stats['usuarios_totais']); ?></span>
                        </div>
                    </div>

                    <div class="admin-stat-card">
                        <div class="stat-icon green">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Usuários Ativos</span>
                            <span class="stat-value"><?php echo number_format($admin_stats['usuarios_ativos']); ?></span>
                        </div>
                    </div>

                    <div class="admin-stat-card">
                        <div class="stat-icon orange">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Receita Mensal</span>
                            <span class="stat-value">R$ <?php echo number_format($admin_stats['receita_mensal'], 0, ',', '.'); ?></span>
                        </div>
                    </div>

                    <div class="admin-stat-card">
                        <div class="stat-icon purple">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Taxa Conversão</span>
                            <span class="stat-value"><?php echo $admin_stats['taxa_conversao']; ?>%</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Admin Tabs -->
            <section class="admin-tabs-section">
                <div class="admin-tabs">
                    <button class="admin-tab active" data-tab="planos">Planos</button>
                    <button class="admin-tab" data-tab="usuarios">Usuários</button>
                    <button class="admin-tab" data-tab="conteudo">Conteúdo</button>
                    <button class="admin-tab" data-tab="config">Config</button>
                </div>

                <!-- Planos Tab -->
                <div class="tab-content active" id="planos">
                    <div class="section-header">
                        <h2><i class="fas fa-layer-group"></i> Gerenciar Planos</h2>
                        <p>Configure os planos de assinatura da plataforma</p>
                        <button class="btn btn--primary">
                            <i class="fas fa-plus"></i>
                            Novo Plano
                        </button>
                    </div>

                    <div class="plans-grid">
                        <!-- Plano Básico -->
                        <div class="plan-card basic">
                            <div class="plan-header">
                                <h3>Cidadão Básico</h3>
                                <div class="plan-price">
                                    <span class="price-value">Grátis</span>
                                </div>
                                <span class="plan-badge current">Atual</span>
                            </div>
                            
                            <div class="plan-features">
                                <ul>
                                    <li><i class="fas fa-check"></i> 5 denúncias por mês</li>
                                    <li><i class="fas fa-check"></i> Visualização pública</li>
                                    <li><i class="fas fa-check"></i> Suporte por email</li>
                                </ul>
                            </div>

                            <div class="plan-stats">
                                <div class="plan-stat">
                                    <span class="stat-label">Denúncias:</span>
                                    <span class="stat-value">5</span>
                                </div>
                                <div class="plan-stat">
                                    <span class="stat-label">Propostas:</span>
                                    <span class="stat-value">2</span>
                                </div>
                            </div>

                            <div class="plan-actions">
                                <button class="btn--outline">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn--outline">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Plano Pro -->
                        <div class="plan-card pro">
                            <div class="plan-header">
                                <h3>Cidadão Pro</h3>
                                <div class="plan-price">
                                    <span class="price-value">R$ 19,9</span>
                                    <span class="price-period">/mensal</span>
                                </div>
                                <span class="plan-badge popular">Mais Popular</span>
                            </div>
                            
                            <div class="plan-features">
                                <ul>
                                    <li><i class="fas fa-check"></i> Denúncias ilimitadas</li>
                                    <li><i class="fas fa-check"></i> Propostas prioritárias</li>
                                    <li><i class="fas fa-check"></i> Suporte prioritário</li>
                                    <li><i class="fas fa-check"></i> Analytics avançado</li>
                                </ul>
                            </div>

                            <div class="plan-stats">
                                <div class="plan-stat">
                                    <span class="stat-label">Denúncias:</span>
                                    <span class="stat-value">Ilimitadas</span>
                                </div>
                                <div class="plan-stat">
                                    <span class="stat-label">Propostas:</span>
                                    <span class="stat-value">Ilimitadas</span>
                                </div>
                            </div>

                            <div class="plan-actions">
                                <button class="btn--outline">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn--outline">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Plano Organização -->
                        <div class="plan-card organization">
                            <div class="plan-header">
                                <h3>Organização</h3>
                                <div class="plan-price">
                                    <span class="price-value">R$ 49,9</span>
                                    <span class="price-period">/mensal</span>
                                </div>
                            </div>
                            
                            <div class="plan-features">
                                <ul>
                                    <li><i class="fas fa-check"></i> Multi-usuários</li>
                                    <li><i class="fas fa-check"></i> Dashboard personalizado</li>
                                    <li><i class="fas fa-check"></i> API access</li>
                                    <li><i class="fas fa-check"></i> Suporte 24/7</li>
                                </ul>
                            </div>

                            <div class="plan-stats">
                                <div class="plan-stat">
                                    <span class="stat-label">Denúncias:</span>
                                    <span class="stat-value">Ilimitadas</span>
                                </div>
                                <div class="plan-stat">
                                    <span class="stat-label">Propostas:</span>
                                    <span class="stat-value">Ilimitadas</span>
                                </div>
                            </div>

                            <div class="plan-actions">
                                <button class="btn--outline">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn--outline">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Usuários Tab -->
                <div class="tab-content" id="usuarios">
                    <div class="section-header">
                        <h2><i class="fas fa-users"></i> Gerenciar Usuários</h2>
                        <p>Visualize e gerencie todos os usuários da plataforma</p>
                    </div>

                    <div class="users-table-container">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Plano</th>
                                    <th>Status</th>
                                    <th>Cadastro</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="user-cell">
                                            <div class="user-avatar-small">J</div>
                                            <span>João Silva</span>
                                        </div>
                                    </td>
                                    <td>joao@email.com</td>
                                    <td><span class="plan-badge-small pro">Cidadão Pro</span></td>
                                    <td><span class="status-badge active">Ativo</span></td>
                                    <td>14/01/2024</td>
                                    <td class="actions-cell">
                                        <button class="btn-icon"><i class="fas fa-edit"></i></button>
                                        <button class="btn-icon"><i class="fas fa-cog"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-cell">
                                            <div class="user-avatar-small">M</div>
                                            <span>Maria Santos</span>
                                        </div>
                                    </td>
                                    <td>maria@email.com</td>
                                    <td><span class="plan-badge-small organization">Organização</span></td>
                                    <td><span class="status-badge active">Ativo</span></td>
                                    <td>19/02/2024</td>
                                    <td class="actions-cell">
                                        <button class="btn-icon"><i class="fas fa-edit"></i></button>
                                        <button class="btn-icon"><i class="fas fa-cog"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Conteúdo Tab -->
                <div class="tab-content" id="conteudo">
                    <div class="section-header">
                        <h2><i class="fas fa-file-alt"></i> Conteúdo dos Usuários</h2>
                    </div>

                    <div class="content-stats">
                        <div class="content-stat-card">
                            <i class="fas fa-exclamation-triangle"></i>
                            <div class="content-stat-info">
                                <h3>Denúncias</h3>
                                <div class="stat-row">
                                    <span>Total de denúncias</span>
                                    <span class="stat-number"><?php echo number_format($admin_stats['denuncias_totais']); ?></span>
                                </div>
                                <div class="stat-row success">
                                    <span>Resolvidas</span>
                                    <span class="stat-number"><?php echo number_format($admin_stats['denuncias_resolvidas']); ?></span>
                                </div>
                                <div class="stat-row warning">
                                    <span>Pendentes</span>
                                    <span class="stat-number"><?php echo number_format($admin_stats['denuncias_pendentes']); ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="content-stat-card">
                            <i class="fas fa-server"></i>
                            <div class="content-stat-info">
                                <h3>Sistema</h3>
                                <div class="stat-row">
                                    <span>Uptime</span>
                                    <span class="stat-number success"><?php echo $admin_stats['uptime']; ?>%</span>
                                </div>
                                <div class="stat-row">
                                    <span>Versão</span>
                                    <span class="stat-number"><?php echo $admin_stats['versao_sistema']; ?></span>
                                </div>
                                <div class="stat-row">
                                    <span>Última atualização</span>
                                    <span class="stat-number">Hoje</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Config Tab -->
                <div class="tab-content" id="config">
                    <div class="section-header">
                        <h2><i class="fas fa-cogs"></i> Configurações da Plataforma</h2>
                    </div>

                    <div class="config-sections">
                        <div class="config-section">
                            <h3>Configurações de Email</h3>
                            <div class="config-form">
                                <div class="form-group">
                                    <label>SMTP Host</label>
                                    <input type="text" class="form-control" placeholder="smtp.exemplo.com">
                                </div>
                                <div class="form-group">
                                    <label>SMTP Port</label>
                                    <input type="text" class="form-control" placeholder="587">
                                </div>
                            </div>
                        </div>

                        <div class="config-section">
                            <h3>Configurações de Moderação</h3>
                            <div class="config-form">
                                <div class="form-group">
                                    <label>Palavras banidas (separadas por vírgula)</label>
                                    <textarea class="form-control" placeholder="palavra1, palavra2, palavra3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Limite de denúncias por dia</label>
                                    <input type="number" class="form-control" value="10">
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
            </section>
        </div>
    </main>

    <!-- Admin Dashboard CSS -->
    <style>
        .admin-dashboard {
            background: var(--color-background);
            min-height: calc(100vh - 80px);
            padding: var(--space-32) 0;
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: var(--space-32);
        }

        .admin-title-section h1 {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            margin-bottom: var(--space-8);
            color: var(--color-text);
        }

        .admin-title-section p {
            color: var(--color-text-secondary);
            margin: 0;
        }

        .admin-badge {
            display: flex;
            align-items: center;
            gap: var(--space-8);
            background: rgba(var(--color-error-rgb), 0.1);
            color: var(--color-error);
            padding: var(--space-8) var(--space-16);
            border-radius: var(--radius-full);
            font-weight: var(--font-weight-semibold);
            font-size: var(--font-size-sm);
        }

        .admin-stats-section {
            margin-bottom: var(--space-32);
        }

        .admin-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: var(--space-24);
        }

        .admin-stat-card {
            background: var(--color-surface);
            border-radius: var(--radius-lg);
            padding: var(--space-24);
            display: flex;
            align-items: center;
            gap: var(--space-20);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--color-border);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: var(--radius-base);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: var(--font-size-2xl);
        }

        .stat-icon.blue {
            background: rgba(var(--color-primary-rgb), 0.1);
            color: var(--color-primary);
        }

        .stat-icon.green {
            background: rgba(var(--color-success-rgb), 0.1);
            color: var(--color-success);
        }

        .stat-icon.orange {
            background: rgba(var(--color-warning-rgb), 0.1);
            color: var(--color-warning);
        }

        .stat-icon.purple {
            background: rgba(128, 90, 213, 0.1);
            color: #805ad5;
        }

        .stat-content {
            display: flex;
            flex-direction: column;
            gap: var(--space-4);
        }

        .stat-label {
            font-size: var(--font-size-sm);
            color: var(--color-text-secondary);
            font-weight: var(--font-weight-medium);
        }

        .stat-value {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--color-text);
        }

        .admin-tabs-section {
            background: var(--color-surface);
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--color-border);
        }

        .admin-tabs {
            display: flex;
            border-bottom: 1px solid var(--color-border);
        }

        .admin-tab {
            background: none;
            border: none;
            padding: var(--space-16) var(--space-24);
            color: var(--color-text-secondary);
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: all var(--duration-normal) var(--ease-standard);
            font-weight: var(--font-weight-medium);
        }

        .admin-tab.active {
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
        }

        .plans-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: var(--space-24);
        }

        .plan-card {
            border: 2px solid var(--color-border);
            border-radius: var(--radius-lg);
            padding: var(--space-24);
            position: relative;
            transition: all var(--duration-normal) var(--ease-standard);
            background: var(--color-surface);
        }

        .plan-card:hover {
            border-color: var(--color-primary);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .plan-card.pro {
            border-color: var(--color-primary);
            background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.05) 0%, rgba(var(--color-primary-rgb), 0.1) 100%);
        }

        .plan-header {
            margin-bottom: var(--space-20);
            position: relative;
        }

        .plan-header h3 {
            font-size: var(--font-size-xl);
            font-weight: var(--font-weight-semibold);
            margin-bottom: var(--space-8);
            color: var(--color-text);
        }

        .plan-price {
            margin-bottom: var(--space-12);
        }

        .price-value {
            font-size: var(--font-size-3xl);
            font-weight: var(--font-weight-bold);
            color: var(--color-primary);
        }

        .price-period {
            font-size: var(--font-size-sm);
            color: var(--color-text-secondary);
        }

        .plan-badge {
            position: absolute;
            top: -8px;
            right: 0;
            padding: var(--space-4) var(--space-12);
            border-radius: var(--radius-full);
            font-size: var(--font-size-xs);
            font-weight: var(--font-weight-semibold);
            text-transform: uppercase;
        }

        .plan-badge.current {
            background: rgba(var(--color-success-rgb), 0.15);
            color: var(--color-success);
        }

        .plan-badge.popular {
            background: var(--color-primary);
            color: var(--color-btn-primary-text);
        }

        .plan-features {
            margin-bottom: var(--space-20);
        }

        .plan-features ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .plan-features li {
            display: flex;
            align-items: center;
            gap: var(--space-8);
            margin-bottom: var(--space-8);
            font-size: var(--font-size-sm);
            color: var(--color-text);
        }

        .plan-features li i {
            color: var(--color-success);
            font-size: var(--font-size-xs);
        }

        .plan-stats {
            margin-bottom: var(--space-20);
            padding: var(--space-16);
            background: var(--color-background);
            border-radius: var(--radius-base);
            border: 1px solid var(--color-border);
        }

        .plan-stat {
            display: flex;
            justify-content: space-between;
            margin-bottom: var(--space-8);
            font-size: var(--font-size-sm);
        }

        .plan-stat:last-child {
            margin-bottom: 0;
        }

        .plan-stat .stat-label {
            color: var(--color-text-secondary);
        }

        .plan-stat .stat-value {
            color: var(--color-text);
            font-weight: var(--font-weight-semibold);
        }

        .plan-actions {
            display: flex;
            gap: var(--space-8);
        }

        .btn--outline {
            background: transparent;
            border: 1px solid var(--color-border);
            padding: var(--space-8) var(--space-12);
            border-radius: var(--radius-base);
            color: var(--color-text-secondary);
            cursor: pointer;
            transition: all var(--duration-normal) var(--ease-standard);
        }

        .btn--outline:hover {
            border-color: var(--color-primary);
            color: var(--color-primary);
        }

        .users-table-container {
            background: var(--color-surface);
            border-radius: var(--radius-base);
            overflow: hidden;
            border: 1px solid var(--color-border);
        }

        .admin-table {
            width: 100%;
            border-collapse: collapse;
        }

        .admin-table th {
            background: var(--color-background);
            padding: var(--space-16);
            text-align: left;
            font-weight: var(--font-weight-semibold);
            color: var(--color-text);
            border-bottom: 1px solid var(--color-border);
        }

        .admin-table td {
            padding: var(--space-16);
            border-bottom: 1px solid var(--color-border);
        }

        .user-cell {
            display: flex;
            align-items: center;
            gap: var(--space-12);
        }

        .user-avatar-small {
            width: 32px;
            height: 32px;
            background: var(--color-primary);
            color: var(--color-btn-primary-text);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: var(--font-weight-semibold);
            font-size: var(--font-size-sm);
        }

        .plan-badge-small {
            padding: var(--space-4) var(--space-8);
            border-radius: var(--radius-full);
            font-size: var(--font-size-xs);
            font-weight: var(--font-weight-semibold);
            text-transform: uppercase;
        }

        .plan-badge-small.pro {
            background: rgba(var(--color-primary-rgb), 0.1);
            color: var(--color-primary);
        }

        .plan-badge-small.organization {
            background: rgba(128, 90, 213, 0.1);
            color: #805ad5;
        }

        .status-badge {
            padding: var(--space-4) var(--space-8);
            border-radius: var(--radius-full);
            font-size: var(--font-size-xs);
            font-weight: var(--font-weight-semibold);
            text-transform: uppercase;
        }

        .status-badge.active {
            background: rgba(var(--color-success-rgb), 0.1);
            color: var(--color-success);
        }

        .actions-cell {
            display: flex;
            gap: var(--space-8);
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

        .content-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: var(--space-24);
        }

        .content-stat-card {
            background: var(--color-surface);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-base);
            padding: var(--space-24);
            display: flex;
            gap: var(--space-20);
        }

        .content-stat-card i {
            font-size: var(--font-size-3xl);
            color: var(--color-text-secondary);
            margin-top: var(--space-8);
        }

        .content-stat-info h3 {
            font-size: var(--font-size-xl);
            font-weight: var(--font-weight-semibold);
            margin-bottom: var(--space-16);
            color: var(--color-text);
        }

        .stat-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: var(--space-12);
            padding: var(--space-8) 0;
            border-bottom: 1px solid var(--color-border);
        }

        .stat-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .stat-row .stat-number {
            font-weight: var(--font-weight-semibold);
            color: var(--color-text);
        }

        .stat-row.success .stat-number {
            color: var(--color-success);
        }

        .stat-row.warning .stat-number {
            color: var(--color-warning);
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

        .form-control,
        .form-textarea {
            padding: var(--space-12) var(--space-16);
            border: 1px solid var(--color-border);
            border-radius: var(--radius-base);
            font-size: var(--font-size-sm);
            transition: border-color var(--duration-normal) var(--ease-standard);
            background: var(--color-surface);
            color: var(--color-text);
        }

        .form-control:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--color-primary);
            box-shadow: 0 0 0 3px rgba(var(--color-primary-rgb), 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 80px;
        }

        .config-actions {
            display: flex;
            justify-content: flex-end;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .admin-header {
                flex-direction: column;
                gap: var(--space-16);
                align-items: flex-start;
            }

            .admin-stats-grid {
                grid-template-columns: 1fr;
            }

            .plans-grid {
                grid-template-columns: 1fr;
            }

            .admin-tabs {
                flex-wrap: wrap;
            }

            .section-header {
                flex-direction: column;
                gap: var(--space-16);
                align-items: flex-start;
            }

            .users-table-container {
                overflow-x: auto;
            }

            .content-stats {
                grid-template-columns: 1fr;
            }
            
            .tab-content {
                padding: var(--space-24);
            }
        }
    </style>

    <script>
        // Admin tabs functionality
        document.querySelectorAll('.admin-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active from all tabs and content
                document.querySelectorAll('.admin-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                // Add active to clicked tab and corresponding content
                this.classList.add('active');
                document.getElementById(this.dataset.tab).classList.add('active');
            });
        });
    </script>

    <script src="js/main.js"></script>
</body>
</html>