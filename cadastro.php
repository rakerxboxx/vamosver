<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - O Democrata</title>
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
                    <a href="#" class="nav-btn primary active">Cadastrar</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Registration Page -->
    <main class="registration-page">
        <div class="registration-container" style="gap: var(--space-48);">
            <!-- Registration Form -->
            <div class="registration-form-container">
                <div class="form-header">
                    <h1>Junte-se ao O Democrata</h1>
                    <p>Sua voz é fundamental para construir uma democracia mais transparente e participativa.</p>
                </div>

                <!-- User Type Selection -->
                <div class="user-type-selection">
                    <h3>Escolha seu tipo de conta</h3>
                    <div class="user-type-options">
                        <div class="user-type-card active" data-type="citizen">
                            <div class="type-icon citizen">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4>Cidadão</h4>
                            <p>Para fazer denúncias, criar propostas e participar de discussões públicas</p>
                            <ul class="type-features">
                                <li><i class="fas fa-check"></i> Criar reclamações</li>
                                <li><i class="fas fa-check"></i> Propor melhorias</li>
                                <li><i class="fas fa-check"></i> Votar em propostas</li>
                                <li><i class="fas fa-check"></i> Comentar e discutir</li>
                            </ul>
                        </div>

                        <div class="user-type-card" data-type="institution">
                            <div class="type-icon institution">
                                <i class="fas fa-building"></i>
                            </div>
                            <h4>Instituição</h4>
                            <p>Para órgãos públicos responderem reclamações e se comunicarem com cidadãos</p>
                            <ul class="type-features">
                                <li><i class="fas fa-check"></i> Gerenciar reclamações</li>
                                <li><i class="fas fa-check"></i> Responder cidadãos</li>
                                <li><i class="fas fa-check"></i> Dashboard analítico</li>
                                <li><i class="fas fa-check"></i> Comunicados oficiais</li>
                            </ul>
                        </div>

                        <div class="user-type-card" data-type="organization">
                            <div class="type-icon organization">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4>Organização</h4>
                            <p>Para ONGs, coletivos e organizações da sociedade civil</p>
                            <ul class="type-features">
                                <li><i class="fas fa-check"></i> Campanhas organizadas</li>
                                <li><i class="fas fa-check"></i> Múltiplos usuários</li>
                                <li><i class="fas fa-check"></i> Relatórios avançados</li>
                                <li><i class="fas fa-check"></i> API personalizada</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Registration Form -->
                <form class="registration-form" id="registrationForm">
                    <div class="form-section">
                        <h3>Informações Pessoais</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">Nome *</label>
                                <input type="text" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Sobrenome *</label>
                                <input type="text" id="lastName" name="lastName" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">Telefone</label>
                                <input type="tel" id="phone" name="phone" placeholder="(11) 99999-9999">
                            </div>
                            <div class="form-group">
                                <label for="birthDate">Data de Nascimento</label>
                                <input type="date" id="birthDate" name="birthDate">
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3>Localização</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Estado *</label>
                                <select id="state" name="state" required>
                                    <option value="">Selecione seu estado</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="city">Cidade *</label>
                                <input type="text" id="city" name="city" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="neighborhood">Bairro</label>
                            <input type="text" id="neighborhood" name="neighborhood">
                        </div>
                    </div>

                    <!-- Institution Specific Fields -->
                    <div class="form-section institution-fields" style="display: none;">
                        <h3>Informações da Instituição</h3>
                        <div class="form-group">
                            <label for="institutionName">Nome da Instituição *</label>
                            <input type="text" id="institutionName" name="institutionName">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="cnpj">CNPJ *</label>
                                <input type="text" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00">
                            </div>
                            <div class="form-group">
                                <label for="institutionType">Tipo de Instituição *</label>
                                <select id="institutionType" name="institutionType">
                                    <option value="">Selecione o tipo</option>
                                    <option value="prefeitura">Prefeitura Municipal</option>
                                    <option value="secretaria">Secretaria</option>
                                    <option value="departamento">Departamento</option>
                                    <option value="autarquia">Autarquia</option>
                                    <option value="outros">Outros</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Descrição da Instituição</label>
                            <textarea id="description" name="description" rows="3" placeholder="Descreva brevemente a função e área de atuação da instituição"></textarea>
                        </div>
                    </div>

                    <!-- Organization Specific Fields -->
                    <div class="form-section organization-fields" style="display: none;">
                        <h3>Informações da Organização</h3>
                        <div class="form-group">
                            <label for="organizationName">Nome da Organização *</label>
                            <input type="text" id="organizationName" name="organizationName">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="orgType">Tipo de Organização *</label>
                                <select id="orgType" name="orgType">
                                    <option value="">Selecione o tipo</option>
                                    <option value="ong">ONG</option>
                                    <option value="coletivo">Coletivo</option>
                                    <option value="movimento">Movimento Social</option>
                                    <option value="associacao">Associação</option>
                                    <option value="sindicato">Sindicato</option>
                                    <option value="outros">Outros</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="focusArea">Área de Atuação *</label>
                                <select id="focusArea" name="focusArea">
                                    <option value="">Selecione a área</option>
                                    <option value="meio-ambiente">Meio Ambiente</option>
                                    <option value="direitos-humanos">Direitos Humanos</option>
                                    <option value="educacao">Educação</option>
                                    <option value="saude">Saúde</option>
                                    <option value="moradia">Moradia</option>
                                    <option value="transporte">Transporte</option>
                                    <option value="outros">Outros</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" id="website" name="website" placeholder="https://exemplo.org">
                        </div>
                    </div>

                    <div class="form-section">
                        <h3>Segurança</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">Senha *</label>
                                <div class="password-input">
                                    <input type="password" id="password" name="password" required>
                                    <button type="button" class="password-toggle">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="password-strength">
                                    <div class="strength-bar">
                                        <div class="strength-fill"></div>
                                    </div>
                                    <span class="strength-text">Digite uma senha</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirmar Senha *</label>
                                <input type="password" id="confirmPassword" name="confirmPassword" required>
                            </div>
                        </div>

                        <div class="password-requirements">
                            <p>A senha deve conter:</p>
                            <ul>
                                <li id="req-length"><i class="fas fa-times"></i> Pelo menos 8 caracteres</li>
                                <li id="req-upper"><i class="fas fa-times"></i> Uma letra maiúscula</li>
                                <li id="req-lower"><i class="fas fa-times"></i> Uma letra minúscula</li>
                                <li id="req-number"><i class="fas fa-times"></i> Um número</li>
                                <li id="req-special"><i class="fas fa-times"></i> Um caractere especial</li>
                            </ul>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="form-agreements">
                            <div class="checkbox-group">
                                <input type="checkbox" id="terms" name="terms" required>
                                <label for="terms">
                                    Eu concordo com os <a href="#" target="_blank">Termos de Uso</a> e a <a href="#" target="_blank">Política de Privacidade</a> *
                                </label>
                            </div>

                            <div class="checkbox-group">
                                <input type="checkbox" id="newsletter" name="newsletter">
                                <label for="newsletter">
                                    Quero receber notificações sobre atualizações da plataforma e novas funcionalidades
                                </label>
                            </div>

                            <div class="checkbox-group">
                                <input type="checkbox" id="publicProfile" name="publicProfile">
                                <label for="publicProfile">
                                    Permitir que meu perfil seja público (recomendado para maior transparência)
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-large">
                            <i class="fas fa-user-plus"></i>
                            Criar Conta
                        </button>
                    </div>
                </form>

                <div class="login-link">
                    <p>Já tem uma conta? <a href="login.php">Faça login aqui</a></p>
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="benefits-section">
                <div class="benefits-content">
                    <h2>Por que se juntar ao O Democrata?</h2>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-megaphone"></i>
                        </div>
                        <div class="benefit-text">
                            <h4>Sua voz será ouvida</h4>
                            <p>Faça reclamações que chegam diretamente aos órgãos responsáveis e acompanhe o progresso em tempo real.</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="benefit-text">
                            <h4>Proponha soluções</h4>
                            <p>Crie propostas de melhoria para sua cidade e mobilize outros cidadãos em torno de causas importantes.</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="benefit-text">
                            <h4>Transparência total</h4>
                            <p>Acompanhe estatísticas de resolução, tempo de resposta e avalie a performance das instituições.</p>
                        </div>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="benefit-text">
                            <h4>Construa comunidade</h4>
                            <p>Conecte-se com outros cidadãos, participe de discussões e fortaleça a democracia participativa.</p>
                        </div>
                    </div>

                    <div class="success-stats">
                        <h3>Nossos resultados</h3>
                        <div class="stats-grid">
                            <div class="stat-item">
                                <span class="stat-number">12.5k+</span>
                                <span class="stat-label">Reclamações</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">8.2k+</span>
                                <span class="stat-label">Resolvidas</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">50k+</span>
                                <span class="stat-label">Cidadãos</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">200+</span>
                                <span class="stat-label">Instituições</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Registration CSS -->
    <style>
        .registration-page {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: calc(100vh - 80px);
            padding: 40px 0;
        }

        .registration-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 60px;
            align-items: start;
        }

        .registration-form-container {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 12px;
        }

        .form-header p {
            color: #6b7280;
            font-size: 16px;
            line-height: 1.6;
        }

        .user-type-selection {
            margin-bottom: 40px;
        }

        .user-type-selection h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1f2937;
        }

        .user-type-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .user-type-card {
            border: 2px solid #e5e7eb;
            border-radius: 16px;
            padding: 24px;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
        }

        .user-type-card:hover {
            border-color: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.1);
        }

        .user-type-card.active {
            border-color: #2563eb;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
        }

        .type-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin: 0 auto 16px;
        }

        .type-icon.citizen {
            background: #dbeafe;
            color: #1e40af;
        }

        .type-icon.institution {
            background: #fef3c7;
            color: #92400e;
        }

        .type-icon.organization {
            background: #d1fae5;
            color: #065f46;
        }

        .user-type-card h4 {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #1f2937;
        }

        .user-type-card p {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 16px;
        }

        .type-features {
            list-style: none;
            padding: 0;
            text-align: left;
        }

        .type-features li {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
            color: #374151;
            margin-bottom: 6px;
        }

        .type-features li i {
            color: #059669;
            font-size: 10px;
        }

        .registration-form {
            display: flex;
            flex-direction: column;
            gap: 32px;
        }

        .form-section {
            border-bottom: 1px solid #f3f4f6;
            padding-bottom: 32px;
        }

        .form-section:last-of-type {
            border-bottom: none;
            padding-bottom: 0;
        }

        .form-section h3 {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #1f2937;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 500;
            color: #374151;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 12px 16px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        .password-input {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #6b7280;
            cursor: pointer;
            padding: 4px;
        }

        .password-strength {
            margin-top: 8px;
        }

        .strength-bar {
            height: 4px;
            background: #e5e7eb;
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 4px;
        }

        .strength-fill {
            height: 100%;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .strength-text {
            font-size: 12px;
            color: #6b7280;
        }

        .password-requirements {
            margin-top: 12px;
            padding: 12px;
            background: #f9fafb;
            border-radius: 8px;
        }

        .password-requirements p {
            font-size: 12px;
            color: #374151;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .password-requirements ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .password-requirements li {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 11px;
            color: #6b7280;
        }

        .password-requirements li i {
            font-size: 10px;
        }

        .password-requirements li.valid {
            color: #059669;
        }

        .password-requirements li.valid i {
            color: #059669;
        }

        .form-agreements {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .checkbox-group input[type="checkbox"] {
            margin-top: 2px;
        }

        .checkbox-group label {
            font-size: 14px;
            color: #374151;
            line-height: 1.5;
        }

        .checkbox-group a {
            color: #2563eb;
            text-decoration: none;
        }

        .checkbox-group a:hover {
            text-decoration: underline;
        }

        .form-actions {
            display: flex;
            justify-content: center;
            margin-top: 32px;
        }

        .btn-large {
            padding: 16px 32px;
            font-size: 16px;
            font-weight: 600;
            min-width: 200px;
        }

        .login-link {
            text-align: center;
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
        }

        .login-link p {
            color: #6b7280;
            margin: 0;
        }

        .login-link a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .benefits-section {
            position: sticky;
            top: 100px;
        }

        .benefits-content {
            background: white;
            border-radius: 20px;
            padding: 32px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .benefits-content h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 24px;
            color: #1f2937;
        }

        .benefit-item {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 20px;
        }

        .benefit-icon {
            width: 40px;
            height: 40px;
            background: #2563eb;
            color: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .benefit-text h4 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 4px;
            color: #1f2937;
        }

        .benefit-text p {
            font-size: 12px;
            color: #6b7280;
            line-height: 1.5;
            margin: 0;
        }

        .success-stats {
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
        }

        .success-stats h3 {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 16px;
            color: #1f2937;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .stat-item {
            text-align: center;
            padding: 12px;
            background: #f8fafc;
            border-radius: 8px;
        }

        .stat-number {
            display: block;
            font-size: 1.25rem;
            font-weight: 700;
            color: #2563eb;
        }

        .stat-label {
            font-size: 11px;
            color: #6b7280;
            text-transform: uppercase;
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .registration-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .benefits-section {
                position: static;
            }

            .stats-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 768px) {
            .registration-container {
                padding: 0 16px;
            }

            .registration-form-container {
                padding: 24px;
            }

            .form-header h1 {
                font-size: 2rem;
            }

            .user-type-options {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>

    <script>
        // User type selection
        document.querySelectorAll('.user-type-card').forEach(card => {
            card.addEventListener('click', function() {
                // Remove active from all cards
                document.querySelectorAll('.user-type-card').forEach(c => c.classList.remove('active'));
                // Add active to clicked card
                this.classList.add('active');
                
                // Show/hide specific fields based on type
                const type = this.dataset.type;
                document.querySelectorAll('.institution-fields, .organization-fields').forEach(section => {
                    section.style.display = 'none';
                });
                
                if (type === 'institution') {
                    document.querySelector('.institution-fields').style.display = 'block';
                } else if (type === 'organization') {
                    document.querySelector('.organization-fields').style.display = 'block';
                }
            });
        });

        // Password toggle
        document.querySelector('.password-toggle').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });

        // Password strength checker
        document.getElementById('password').addEventListener('input', function() {
            const password = this.value;
            const strengthBar = document.querySelector('.strength-fill');
            const strengthText = document.querySelector('.strength-text');
            
            // Check requirements
            const requirements = {
                length: password.length >= 8,
                upper: /[A-Z]/.test(password),
                lower: /[a-z]/.test(password),
                number: /\d/.test(password),
                special: /[!@#$%^&*(),.?":{}|<>]/.test(password)
            };
            
            // Update requirement indicators
            Object.keys(requirements).forEach(req => {
                const element = document.getElementById(`req-${req}`);
                if (requirements[req]) {
                    element.classList.add('valid');
                    element.querySelector('i').classList.remove('fa-times');
                    element.querySelector('i').classList.add('fa-check');
                } else {
                    element.classList.remove('valid');
                    element.querySelector('i').classList.remove('fa-check');
                    element.querySelector('i').classList.add('fa-times');
                }
            });
            
            // Calculate strength
            const validCount = Object.values(requirements).filter(Boolean).length;
            const strength = (validCount / 5) * 100;
            
            strengthBar.style.width = strength + '%';
            
            if (strength < 40) {
                strengthBar.style.background = '#dc2626';
                strengthText.textContent = 'Fraca';
                strengthText.style.color = '#dc2626';
            } else if (strength < 80) {
                strengthBar.style.background = '#f59e0b';
                strengthText.textContent = 'Média';
                strengthText.style.color = '#f59e0b';
            } else {
                strengthBar.style.background = '#059669';
                strengthText.textContent = 'Forte';
                strengthText.style.color = '#059669';
            }
        });

        // Form submission
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Here you would normally send the data to your server
            alert('Cadastro realizado com sucesso! Você receberá um email de confirmação.');
        });
    </script>

    <script src="js/main.js"></script>
</body>
</html>