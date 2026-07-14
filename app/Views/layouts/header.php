<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PEVI — Plataforma Especializada em Vagas Inclusivas</title>
  <meta name="description" content="Conectando talentos diversos a empresas inclusivas." />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Fraunces:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

  <a href="#main-content" class="skip-link">Pular para o conteúdo principal</a>
  <div id="sr-announce" class="sr-only" aria-live="polite" aria-atomic="true"></div>
  <div id="toast-container" class="toast-container" aria-live="polite"></div>

  <!-- ===== NAVBAR ===== -->
  <nav class="navbar" role="navigation" aria-label="Navegação principal">
    <div class="nav-inner">
      <a class="logo" onclick="window.location.href='/home'" role="button" tabindex="0" aria-label="PEVI - Página inicial">
        <div class="logo-icon" aria-hidden="true">P</div>
        <div>
          <span class="logo-text">PEVI</span>
          <span class="logo-sub">Vagas Inclusivas</span>
        </div>
      </a>
      <ul class="nav-links" role="list">
        <li><a href="/home" class="nav-link active">Início</a></li>
        <li><a href="/vagas" class="nav-link">Vagas</a></li>
        <li><a href="/empresas" class="nav-link">Empresas</a></li>
        <li><a href="/sobre" class="nav-link">Sobre</a></li>
        <li><a href="/contato" class="nav-link">Contato</a></li>
      </ul>
      <div class="nav-actions">
        <button class="btn-nav-outline" onclick="window.location.href='/vagas'">Buscar Vagas</button>
        <button class="btn-nav-primary" onclick="openModal('cadastro')">Cadastrar</button>
        <button class="a11y-nav-btn" onclick="openA11yPanel()" aria-label="Abrir painel de acessibilidade" title="Acessibilidade">♿</button>
      </div>
      <button class="hamburger" id="hamburger" onclick="toggleMobileNav()" aria-label="Menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <nav class="mobile-nav" id="mobile-nav" aria-label="Menu mobile">
    <a href="/home" class="nav-link">🏠 Início</a>
    <a href="/vagas" class="nav-link">💼 Vagas</a>
    <a href="/empresas" class="nav-link">🏢 Empresas</a>
    <a href="/sobre" class="nav-link">ℹ️ Sobre</a>
    <a href="/contato" class="nav-link">📬 Contato</a>
    <hr style="border-color:var(--border);margin:0.5rem 0;" />
    <button class="btn btn-primary" onclick="openModal('cadastro');toggleMobileNav()">Cadastrar Gratuitamente</button>
  </nav>

  <!-- ===== PAGES ===== -->
  <div id="page-container">
    <main id="main-content">