<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclamações Recentes - O Democrata</title>
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
                        <a href="reclamacoes.php" class="nav-link active">Reclamações</a>
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
        <h1 class="page-title">Reclamações Recentes</h1>
        <p class="page-description">Acompanhe as últimas reclamações da comunidade e participe das discussões</p>
    </div>
  </section>

    <!-- Complaints Section -->
    <section class="complaints-section">
        <div class="container">
            <div class="complaints-list">
                
                <!-- Reclamação 1 -->
                <article class="complaint-card">
                    <div class="complaint-header">
                        <div class="user-info">
                            <div class="user-avatar">M</div>
                            <div class="user-details">
                                <span class="user-name">Maria Silva</span>
                                <div class="user-verification">
                                    <i class="fas fa-check-circle verified"></i>
                                    <span class="complaint-time">2 horas atrás</span>
                                </div>
                            </div>
                        </div>
                        <div class="complaint-status">
                            <span class="category-badge saude">Saúde Pública</span>
                            <span class="status-badge aberta">Aberta</span>
                        </div>
                    </div>
                    
                    <h3 class="complaint-title">Demora excessiva no atendimento do Hospital Municipal</h3>
                    
                    <p class="complaint-description">
                        Minha mãe está há 6 horas esperando atendimento na emergência do Hospital Municipal. Não é a primeira vez que isso acontece. Precisamos de mais médicos e uma gestão melhor do tempo de espera.
                    </p>
                    
                    <div class="complaint-stats">
                        <div class="stats-left">
                            <button class="stat-btn positive">
                                <i class="fas fa-thumbs-up"></i>
                                <span>127</span>
                            </button>
                            <button class="stat-btn negative">
                                <i class="fas fa-thumbs-down"></i>
                                <span>3</span>
                            </button>
                            <button class="stat-btn">
                                <i class="fas fa-comment"></i>
                                <span>23</span>
                            </button>
                        </div>
                        <div class="stats-right">
                            <button class="share-btn">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Reclamação 2 -->
                <article class="complaint-card">
                    <div class="complaint-header">
                        <div class="user-info">
                            <div class="user-avatar orange">J</div>
                            <div class="user-details">
                                <span class="user-name">João Santos</span>
                                <div class="user-verification">
                                    <span class="complaint-time">4 horas atrás</span>
                                </div>
                            </div>
                        </div>
                        <div class="complaint-status">
                            <span class="category-badge infraestrutura">Infraestrutura</span>
                            <span class="status-badge andamento">Em andamento</span>
                        </div>
                    </div>
                    
                    <h3 class="complaint-title">Buraco na Rua das Flores causando acidentes</h3>
                    
                    <p class="complaint-description">
                        Há um buraco enorme na Rua das Flores, altura do número 150. Já vi 3 motocicletas caírem essa semana. A prefeitura precisa urgentemente fazer o reparo antes que aconteça algo mais grave.
                    </p>
                    
                    <div class="complaint-stats">
                        <div class="stats-left">
                            <button class="stat-btn positive">
                                <i class="fas fa-thumbs-up"></i>
                                <span>89</span>
                            </button>
                            <button class="stat-btn negative">
                                <i class="fas fa-thumbs-down"></i>
                                <span>1</span>
                            </button>
                            <button class="stat-btn">
                                <i class="fas fa-comment"></i>
                                <span>15</span>
                            </button>
                        </div>
                        <div class="stats-right">
                            <button class="share-btn">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Reclamação 3 -->
                <article class="complaint-card">
                    <div class="complaint-header">
                        <div class="user-info">
                            <div class="user-avatar purple">A</div>
                            <div class="user-details">
                                <span class="user-name">Ana Costa</span>
                                <div class="user-verification">
                                    <span class="complaint-time">6 horas atrás</span>
                                </div>
                            </div>
                        </div>
                        <div class="complaint-status">
                            <span class="category-badge educacao">Educação</span>
                            <span class="status-badge aberta">Aberta</span>
                        </div>
                    </div>
                    
                    <h3 class="complaint-title">Falta de professores na Escola Estadual Central</h3>
                    
                    <p class="complaint-description">
                        Meu filho está sem aulas de matemática há 3 semanas. A escola não consegue contratar professores. Como nossos jovens vão ter uma educação de qualidade assim?
                    </p>
                    
                    <div class="complaint-stats">
                        <div class="stats-left">
                            <button class="stat-btn positive">
                                <i class="fas fa-thumbs-up"></i>
                                <span>156</span>
                            </button>
                            <button class="stat-btn negative">
                                <i class="fas fa-thumbs-down"></i>
                                <span>5</span>
                            </button>
                            <button class="stat-btn">
                                <i class="fas fa-comment"></i>
                                <span>31</span>
                            </button>
                        </div>
                        <div class="stats-right">
                            <button class="share-btn">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Reclamação 4 - Resolvida -->
                <article class="complaint-card resolved">
                    <div class="complaint-header">
                        <div class="user-info">
                            <div class="user-avatar green">C</div>
                            <div class="user-details">
                                <span class="user-name">Carlos Oliveira</span>
                                <div class="user-verification">
                                    <i class="fas fa-check-circle verified"></i>
                                    <span class="complaint-time">8 horas atrás</span>
                                </div>
                            </div>
                        </div>
                        <div class="complaint-status">
                            <span class="category-badge transporte">Transporte</span>
                            <span class="status-badge resolvida">Resolvida</span>
                        </div>
                    </div>
                    
                    <h3 class="complaint-title">Ônibus da linha 205 sempre atrasados</h3>
                    
                    <p class="complaint-description">
                        Todos os dias o ônibus da linha 205 atrasa pelo menos 30 minutos. Já cheguei atrasado no trabalho várias vezes por causa disso. A empresa precisa melhorar a pontualidade.
                    </p>
                    
                    <div class="resolution-notice">
                        <div class="resolution-content">
                            <i class="fas fa-check-circle"></i>
                            <div class="resolution-text">
                                <h4>Problema Resolvido!</h4>
                                <p>A empresa de ônibus implementou novos horários e aumentou a frota. Melhoria confirmada pela comunidade.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="complaint-stats">
                        <div class="stats-left">
                            <button class="stat-btn positive">
                                <i class="fas fa-thumbs-up"></i>
                                <span>203</span>
                            </button>
                            <button class="stat-btn negative">
                                <i class="fas fa-thumbs-down"></i>
                                <span>8</span>
                            </button>
                            <button class="stat-btn">
                                <i class="fas fa-comment"></i>
                                <span>45</span>
                            </button>
                        </div>
                        <div class="stats-right">
                            <button class="share-btn">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Reclamação 5 -->
                <article class="complaint-card">
                    <div class="complaint-header">
                        <div class="user-info">
                            <div class="user-avatar teal">R</div>
                            <div class="user-details">
                                <span class="user-name">Roberto Silva</span>
                                <div class="user-verification">
                                    <span class="complaint-time">12 horas atrás</span>
                                </div>
                            </div>
                        </div>
                        <div class="complaint-status">
                            <span class="category-badge seguranca">Segurança</span>
                            <span class="status-badge andamento">Em andamento</span>
                        </div>
                    </div>
                    
                    <h3 class="complaint-title">Falta de policiamento no Parque Central à noite</h3>
                    
                    <p class="complaint-description">
                        O Parque Central virou ponto de encontro de pessoas suspeitas à noite. Moradores estão com medo de passar na região após às 20h. Precisamos de mais patrulhamento.
                    </p>
                    
                    <div class="complaint-stats">
                        <div class="stats-left">
                            <button class="stat-btn positive">
                                <i class="fas fa-thumbs-up"></i>
                                <span>78</span>
                            </button>
                            <button class="stat-btn negative">
                                <i class="fas fa-thumbs-down"></i>
                                <span>2</span>
                            </button>
                            <button class="stat-btn">
                                <i class="fas fa-comment"></i>
                                <span>19</span>
                            </button>
                        </div>
                        <div class="stats-right">
                            <button class="share-btn">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </article>

                <!-- Reclamação 6 -->
                <article class="complaint-card">
                    <div class="complaint-header">
                        <div class="user-info">
                            <div class="user-avatar pink">L</div>
                            <div class="user-details">
                                <span class="user-name">Lucia Fernandes</span>
                                <div class="user-verification">
                                    <span class="complaint-time">1 dia atrás</span>
                                </div>
                            </div>
                        </div>
                        <div class="complaint-status">
                            <span class="category-badge meio-ambiente">Meio Ambiente</span>
                            <span class="status-badge aberta">Aberta</span>
                        </div>
                    </div>
                    
                    <h3 class="complaint-title">Lixo acumulado na Praça da Liberdade há 1 semana</h3>
                    
                    <p class="complaint-description">
                        A coleta de lixo não está passando na Praça da Liberdade há mais de uma semana. O local está com mau cheiro e atraindo insetos. A situação está insustentável.
                    </p>
                    
                    <div class="complaint-stats">
                        <div class="stats-left">
                            <button class="stat-btn positive">
                                <i class="fas fa-thumbs-up"></i>
                                <span>134</span>
                            </button>
                            <button class="stat-btn negative">
                                <i class="fas fa-thumbs-down"></i>
                                <span>1</span>
                            </button>
                            <button class="stat-btn">
                                <i class="fas fa-comment"></i>
                                <span>27</span>
                            </button>
                        </div>
                        <div class="stats-right">
                            <button class="share-btn">
                                <i class="fas fa-share"></i>
                            </button>
                        </div>
                    </div>
                </article>
            </div>
            
            <!-- Load More Button -->
            <div class="load-more-section">
                <button class="btn btn-outline load-more-btn">
                    <i class="fas fa-plus"></i>
                    Carregar Mais Reclamações
                </button>
            </div>
        </div>
    </section>

    <!-- Floating Action Button -->
    <button class="fab" title="Fazer uma nova reclamação">
        <i class="fas fa-plus"></i>
    </button>

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

    <!-- CSS específico para página de reclamações -->
    <style>
        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            padding: 60px 0;
            text-align: center;
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

        /* Complaints Section */
        .complaints-section {
            padding: 60px 0;
            background: #f9fafb;
        }

        .complaints-list {
            display: flex;
            flex-direction: column;
            gap: 24px;
            margin-bottom: 48px;
        }

        .complaint-card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .complaint-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-color: #2563eb;
            transform: translateY(-2px);
        }

        .complaint-card.resolved {
            border-left: 4px solid #059669;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
        }

        .complaint-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 16px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #2563eb;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
        }

        .user-avatar.orange { background: #ea580c; }
        .user-avatar.purple { background: #7c3aed; }
        .user-avatar.green { background: #059669; }
        .user-avatar.teal { background: #0d9488; }
        .user-avatar.pink { background: #ec4899; }

        .user-name {
            font-weight: 600;
            color: #1f2937;
        }

        .user-verification {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
            color: #6b7280;
        }

        .verified {
            color: #2563eb;
        }

        .complaint-status {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .category-badge {
            padding: 4px 12px;
            border-radius: 16px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .category-badge.saude {
            background: #dbeafe;
            color: #1e40af;
        }

        .category-badge.infraestrutura {
            background: #fef3c7;
            color: #92400e;
        }

        .category-badge.educacao {
            background: #e0e7ff;
            color: #3730a3;
        }

        .category-badge.transporte {
            background: #d1fae5;
            color: #065f46;
        }

        .category-badge.seguranca {
            background: #fef2f2;
            color: #991b1b;
        }

        .category-badge.meio-ambiente {
            background: #dcfce7;
            color: #166534;
        }

        .status-badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 11px;
            font-weight: 600;
        }

        .status-badge.aberta {
            background: #fef2f2;
            color: #dc2626;
        }

        .status-badge.andamento {
            background: #fef3c7;
            color: #d97706;
        }

        .status-badge.resolvida {
            background: #d1fae5;
            color: #059669;
        }

        .complaint-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 12px;
            color: #1f2937;
            line-height: 1.4;
        }

        .complaint-description {
            color: #6b7280;
            line-height: 1.6;
            margin-bottom: 16px;
        }

        .resolution-notice {
            background: #d1fae5;
            border: 1px solid #a7f3d0;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
        }

        .resolution-content {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .resolution-content i {
            color: #059669;
            font-size: 20px;
            margin-top: 2px;
        }

        .resolution-text h4 {
            font-size: 14px;
            font-weight: 600;
            color: #065f46;
            margin-bottom: 4px;
        }

        .resolution-text p {
            font-size: 13px;
            color: #047857;
            margin: 0;
        }

        .complaint-stats {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .stats-left {
            display: flex;
            gap: 16px;
        }

        .stat-btn {
            display: flex;
            align-items: center;
            gap: 4px;
            background: transparent;
            border: none;
            color: #6b7280;
            font-size: 14px;
            cursor: pointer;
            padding: 4px 8px;
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .stat-btn:hover {
            background: #f3f4f6;
            color: #2563eb;
        }

        .stat-btn.positive:hover {
            color: #059669;
        }

        .stat-btn.negative:hover {
            color: #dc2626;
        }

        .share-btn {
            background: transparent;
            border: none;
            color: #6b7280;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
            transition: all 0.2s ease;
        }

        .share-btn:hover {
            background: #f3f4f6;
            color: #2563eb;
        }

        .load-more-section {
            text-align: center;
        }

        .load-more-btn {
            padding: 16px 32px;
            font-size: 16px;
        }

        /* Floating Action Button */
        .fab {
            position: fixed;
            bottom: 24px;
            right: 24px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: #2563eb;
            color: white;
            border: none;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.4);
            cursor: pointer;
            font-size: 20px;
            transition: all 0.2s ease;
            z-index: 1000;
        }

        .fab:hover {
            background: #1d4ed8;
            transform: scale(1.1);
            box-shadow: 0 6px 16px rgba(37, 99, 235, 0.5);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .complaint-header {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }

            .complaint-stats {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }

            .stats-left {
                justify-content: space-between;
                width: 100%;
            }

            .fab {
                bottom: 16px;
                right: 16px;
                width: 48px;
                height: 48px;
                font-size: 18px;
            }
        }
    </style>

    <script src="js/main.js"></script>
</body>
</html>