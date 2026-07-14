<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="page active" id="page-home">

        <!-- HERO -->
        <section class="hero" aria-labelledby="hero-title">
          <div class="hero-content">
            <div class="hero-text">
              <div class="hero-eyebrow" aria-hidden="true"><span>✨</span> Plataforma 100% Inclusiva</div>
              <h1 class="hero-title" id="hero-title">
                Encontre sua vaga com <span>dignidade e acessibilidade</span>
              </h1>
              <div class="tts-wrap">
                <p class="hero-desc" id="hero-desc">
                  O PEVI conecta pessoas com deficiência, neurodivergentes e outros talentos diversos a empresas verdadeiramente comprometidas com a inclusão.
                </p>
                <button class="speak-btn" onclick="speakElement('hero-desc')" aria-label="Ouvir descrição">🔊 Ouvir</button>
              </div>
              <div class="hero-actions" style="margin-top:1.5rem;">
                <button class="btn btn-primary btn-lg" onclick="window.location.href=\'/vagas\'">💼 Ver Vagas</button>
                <button class="btn btn-outline btn-lg" onclick="window.location.href=\'/sobre\'">Como Funciona</button>
              </div>
              <div class="hero-stats" role="list" aria-label="Números do PEVI">
                <div role="listitem">
                  <div class="hero-stat-num" data-target="1240" data-suffix="+" aria-label="1240 ou mais vagas ativas">0</div>
                  <div class="hero-stat-label">Vagas Ativas</div>
                </div>
                <div role="listitem">
                  <div class="hero-stat-num" data-target="320" data-suffix="+" aria-label="320 ou mais empresas parceiras">0</div>
                  <div class="hero-stat-label">Empresas Parceiras</div>
                </div>
                <div role="listitem">
                  <div class="hero-stat-num" data-target="8700" data-suffix="+" aria-label="8700 ou mais contratações">0</div>
                  <div class="hero-stat-label">Contratações</div>
                </div>
              </div>
            </div>

            <div class="hero-visual" aria-hidden="true">
              <div class="hero-card-float">
                <div class="hero-card-tag">
                  <span class="badge badge-green">✅ Vaga Inclusiva</span>
                  <span class="badge badge-blue">🌟 Destaque</span>
                </div>
                <div class="job-preview">
                  <div class="job-logo" style="background:#DBEAFE;">💻</div>
                  <div>
                    <div class="job-title">Dev Frontend Sênior</div>
                    <div class="job-company">TechBrasil · Remoto</div>
                    <div class="job-tags"><span class="badge badge-blue">PcD</span><span class="badge badge-purple">Home Office</span></div>
                  </div>
                </div>
                <div class="job-preview">
                  <div class="job-logo" style="background:#D1FAE5;">🎨</div>
                  <div>
                    <div class="job-title">Designer UX/UI</div>
                    <div class="job-company">Criativa Studio · SP</div>
                    <div class="job-tags"><span class="badge badge-green">Neurodiversidade</span><span class="badge badge-yellow">Híbrido</span></div>
                  </div>
                </div>
                <div class="job-preview">
                  <div class="job-logo" style="background:#FEF3C7;">📊</div>
                  <div>
                    <div class="job-title">Analista de Dados</div>
                    <div class="job-company">DataMind · RJ</div>
                    <div class="job-tags"><span class="badge badge-blue">PcD</span><span class="badge badge-purple">Remoto</span></div>
                  </div>
                </div>
              </div>
              <div class="float-badge float-badge-1">✅ +48 vagas hoje</div>
              <div class="float-badge float-badge-2">🤝 Empresas verificadas</div>
            </div>
          </div>
        </section>

        <!-- COMO FUNCIONA -->
        <section class="section" aria-labelledby="como-funciona-title">
          <div class="container">
            <div class="text-center mb-4 animate-in">
              <div class="section-label">Como Funciona</div>
              <h2 class="section-title" id="como-funciona-title">Simples, rápido e acessível</h2>
              <div class="tts-wrap" style="align-items:center;">
                <p class="section-desc" style="margin:0 auto;" id="como-desc">Em apenas 3 passos você está conectado a oportunidades reais de emprego adaptadas para você.</p>
                <button class="speak-btn" onclick="speakElement('como-desc')" aria-label="Ouvir descrição">🔊 Ouvir</button>
              </div>
            </div>
            <div class="grid-3">
              <div class="card text-center animate-in">
                <div class="feature-icon" style="background:#DBEAFE;margin:0 auto 1rem;" aria-hidden="true">📝</div>
                <h3 style="font-weight:800;margin-bottom:0.5rem;" id="step1-h">1. Crie seu perfil</h3>
                <div class="tts-wrap" style="align-items:center;">
                  <p class="text-muted" id="step1-p">Cadastre-se gratuitamente e informe suas habilidades, necessidades de acessibilidade e preferências de trabalho.</p>
                  <button class="speak-btn" onclick="speakElement('step1-p')" aria-label="Ouvir passo 1">🔊 Ouvir</button>
                </div>
              </div>
              <div class="card text-center animate-in">
                <div class="feature-icon" style="background:#D1FAE5;margin:0 auto 1rem;" aria-hidden="true">🔍</div>
                <h3 style="font-weight:800;margin-bottom:0.5rem;">2. Encontre vagas</h3>
                <div class="tts-wrap" style="align-items:center;">
                  <p class="text-muted" id="step2-p">Use nossos filtros de acessibilidade para encontrar vagas que combinam com seu perfil e necessidades específicas.</p>
                  <button class="speak-btn" onclick="speakElement('step2-p')" aria-label="Ouvir passo 2">🔊 Ouvir</button>
                </div>
              </div>
              <div class="card text-center animate-in">
                <div class="feature-icon" style="background:#FEF3C7;margin:0 auto 1rem;" aria-hidden="true">🚀</div>
                <h3 style="font-weight:800;margin-bottom:0.5rem;">3. Candidate-se</h3>
                <div class="tts-wrap" style="align-items:center;">
                  <p class="text-muted" id="step3-p">Envie sua candidatura com um clique. Empresas verificadas recebem seu currículo e entram em contato com você.</p>
                  <button class="speak-btn" onclick="speakElement('step3-p')" aria-label="Ouvir passo 3">🔊 Ouvir</button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- FUNCIONALIDADES -->
        <section class="section" style="background:var(--primary-light);" aria-labelledby="features-title">
          <div class="container">
            <div class="text-center mb-4 animate-in">
              <div class="section-label">Diferenciais</div>
              <h2 class="section-title" id="features-title">Feito para todas as pessoas</h2>
            </div>
            <div class="grid-4">
              <div class="card animate-in">
                <div class="feature-icon" style="background:#DBEAFE;" aria-hidden="true">♿</div>
                <h3 style="font-weight:800;margin-bottom:0.5rem;font-size:1rem;">Vagas PcD</h3>
                <div class="tts-wrap">
                  <p class="text-muted" style="font-size:0.9rem;" id="feat1-p">Vagas exclusivas para Pessoas com Deficiência, com adaptações descritas em detalhes.</p>
                  <button class="speak-btn" onclick="speakElement('feat1-p')" aria-label="Ouvir sobre vagas PcD">🔊 Ouvir</button>
                </div>
              </div>
              <div class="card animate-in">
                <div class="feature-icon" style="background:#EDE9FE;" aria-hidden="true">🧠</div>
                <h3 style="font-weight:800;margin-bottom:0.5rem;font-size:1rem;">Neurodiversidade</h3>
                <div class="tts-wrap">
                  <p class="text-muted" style="font-size:0.9rem;" id="feat2-p">Empresas abertas a autistas, TDAH, dislexia e outras formas de neurodivergência.</p>
                  <button class="speak-btn" onclick="speakElement('feat2-p')" aria-label="Ouvir sobre neurodiversidade">🔊 Ouvir</button>
                </div>
              </div>
              <div class="card animate-in">
                <div class="feature-icon" style="background:#D1FAE5;" aria-hidden="true">🔊</div>
                <h3 style="font-weight:800;margin-bottom:0.5rem;font-size:1rem;">Leitura de Tela</h3>
                <div class="tts-wrap">
                  <p class="text-muted" style="font-size:0.9rem;" id="feat3-p">Compatível com leitores de tela e com TTS integrado para maior independência.</p>
                  <button class="speak-btn" onclick="speakElement('feat3-p')" aria-label="Ouvir sobre leitura de tela">🔊 Ouvir</button>
                </div>
              </div>
              <div class="card animate-in">
                <div class="feature-icon" style="background:#FEF3C7;" aria-hidden="true">🌗</div>
                <h3 style="font-weight:800;margin-bottom:0.5rem;font-size:1rem;">Alto Contraste</h3>
                <div class="tts-wrap">
                  <p class="text-muted" style="font-size:0.9rem;" id="feat4-p">Modo escuro, alto contraste, paleta para daltonismo e tamanhos ajustáveis de texto.</p>
                  <button class="speak-btn" onclick="speakElement('feat4-p')" aria-label="Ouvir sobre alto contraste">🔊 Ouvir</button>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- VAGAS DESTAQUE -->
        <section class="section" aria-labelledby="vagas-destaque-title">
          <div class="container">
            <div class="flex align-center justify-between mb-4 animate-in" style="flex-wrap:wrap;gap:1rem;">
              <div>
                <div class="section-label">Vagas em Destaque</div>
                <h2 class="section-title" id="vagas-destaque-title">Oportunidades recentes</h2>
              </div>
              <button class="btn btn-outline" onclick="window.location.href=\'/vagas\'">Ver Todas →</button>
            </div>
            <div class="grid-3">
              <article class="job-card animate-in" onclick="openModal('vaga1')" aria-labelledby="vaga1h">
                <div class="job-card-header">
                  <div class="job-card-logo" aria-hidden="true">💻</div>
                  <div><div class="job-card-name" id="vaga1h">Dev Frontend Sênior</div><div class="job-card-company">TechBrasil S.A.</div></div>
                </div>
                <div class="job-card-meta"><span>📍 Remoto</span><span>💰 R$ 8k–12k</span><span>⏱️ CLT</span></div>
                <div class="tts-wrap">
                  <p class="job-card-desc" id="vaga1-desc">Desenvolvimento de interfaces acessíveis com React. Empresa com cultura inclusiva e suporte completo a PcD.</p>
                  <button class="speak-btn" onclick="event.stopPropagation();speakElement('vaga1-desc')" aria-label="Ouvir sobre esta vaga">🔊 Ouvir</button>
                </div>
                <div class="job-card-footer">
                  <div class="flex gap-1 flex-wrap"><span class="badge badge-blue">PcD</span><span class="badge badge-purple">React</span></div>
                  <span class="text-muted" style="font-size:0.8rem;">há 2 dias</span>
                </div>
              </article>
              <article class="job-card animate-in" onclick="openModal('vaga2')" aria-labelledby="vaga2h">
                <div class="job-card-header">
                  <div class="job-card-logo" aria-hidden="true">🎨</div>
                  <div><div class="job-card-name" id="vaga2h">Designer UX/UI Pleno</div><div class="job-card-company">Criativa Studio</div></div>
                </div>
                <div class="job-card-meta"><span>📍 São Paulo · Híbrido</span><span>💰 R$ 5k–7,5k</span></div>
                <div class="tts-wrap">
                  <p class="job-card-desc" id="vaga2-desc">Criação de experiências digitais inclusivas. Buscamos designers neurodivergentes que tragam perspectivas únicas.</p>
                  <button class="speak-btn" onclick="event.stopPropagation();speakElement('vaga2-desc')" aria-label="Ouvir sobre esta vaga">🔊 Ouvir</button>
                </div>
                <div class="job-card-footer">
                  <div class="flex gap-1 flex-wrap"><span class="badge badge-green">Neurodiversidade</span><span class="badge badge-yellow">Figma</span></div>
                  <span class="text-muted" style="font-size:0.8rem;">há 3 dias</span>
                </div>
              </article>
              <article class="job-card animate-in" onclick="openModal('vaga3')" aria-labelledby="vaga3h">
                <div class="job-card-header">
                  <div class="job-card-logo" aria-hidden="true">📊</div>
                  <div><div class="job-card-name" id="vaga3h">Analista de Dados</div><div class="job-card-company">DataMind Analytics</div></div>
                </div>
                <div class="job-card-meta"><span>📍 Rio de Janeiro · Remoto</span><span>💰 R$ 6k–9k</span></div>
                <div class="tts-wrap">
                  <p class="job-card-desc" id="vaga3-desc">Análise de dados e geração de insights. Empresa 100% acessível com intérprete de LIBRAS em reuniões.</p>
                  <button class="speak-btn" onclick="event.stopPropagation();speakElement('vaga3-desc')" aria-label="Ouvir sobre esta vaga">🔊 Ouvir</button>
                </div>
                <div class="job-card-footer">
                  <div class="flex gap-1 flex-wrap"><span class="badge badge-blue">PcD</span><span class="badge badge-purple">Python</span></div>
                  <span class="text-muted" style="font-size:0.8rem;">há 5 dias</span>
                </div>
              </article>
            </div>
          </div>
        </section>

        <!-- DEPOIMENTOS -->
        <section class="section" style="background:var(--bg-card);" aria-labelledby="dep-title">
          <div class="container">
            <div class="text-center mb-4 animate-in">
              <div class="section-label">Depoimentos</div>
              <h2 class="section-title" id="dep-title">Histórias reais de superação</h2>
            </div>
            <div class="grid-3">
              <blockquote class="card animate-in">
                <div class="tts-wrap">
                  <p style="font-size:1rem;line-height:1.7;margin-bottom:1.25rem;color:var(--text);" id="dep1">"O PEVI foi o único lugar onde me senti respeitado como profissional. Consegui meu emprego em menos de 2 semanas!"</p>
                  <button class="speak-btn" onclick="speakElement('dep1')" aria-label="Ouvir depoimento">🔊 Ouvir</button>
                </div>
                <footer class="flex align-center gap-1" style="margin-top:1rem;">
                  <div class="avatar" style="width:44px;height:44px;font-size:1rem;" aria-hidden="true">CR</div>
                  <div><div style="font-weight:700;font-size:0.9rem;">Carlos R.</div><div class="text-muted" style="font-size:0.8rem;">Dev Backend · Usuário de cadeira de rodas</div></div>
                </footer>
              </blockquote>
              <blockquote class="card animate-in">
                <div class="tts-wrap">
                  <p style="font-size:1rem;line-height:1.7;margin-bottom:1.25rem;color:var(--text);" id="dep2">"Como autista, sempre tive dificuldade em processos seletivos tradicionais. Aqui as empresas já sabem e se adaptam."</p>
                  <button class="speak-btn" onclick="speakElement('dep2')" aria-label="Ouvir depoimento">🔊 Ouvir</button>
                </div>
                <footer class="flex align-center gap-1" style="margin-top:1rem;">
                  <div class="avatar" style="width:44px;height:44px;font-size:1rem;" aria-hidden="true">AM</div>
                  <div><div style="font-weight:700;font-size:0.9rem;">Ana M.</div><div class="text-muted" style="font-size:0.8rem;">Analista de TI · Autista</div></div>
                </footer>
              </blockquote>
              <blockquote class="card animate-in">
                <div class="tts-wrap">
                  <p style="font-size:1rem;line-height:1.7;margin-bottom:1.25rem;color:var(--text);" id="dep3">"A plataforma tem recursos de acessibilidade que nenhum outro site de vagas tem. O botão Ouvir fez toda a diferença para mim."</p>
                  <button class="speak-btn" onclick="speakElement('dep3')" aria-label="Ouvir depoimento">🔊 Ouvir</button>
                </div>
                <footer class="flex align-center gap-1" style="margin-top:1rem;">
                  <div class="avatar" style="width:44px;height:44px;font-size:1rem;" aria-hidden="true">JP</div>
                  <div><div style="font-weight:700;font-size:0.9rem;">João P.</div><div class="text-muted" style="font-size:0.8rem;">Designer · Deficiente Visual</div></div>
                </footer>
              </blockquote>
            </div>
          </div>
        </section>

        <!-- CTA FINAL -->
        <section class="section" style="background:linear-gradient(135deg,var(--primary) 0%,var(--primary-dark) 100%);" aria-labelledby="cta-title">
          <div class="container text-center">
            <div class="animate-in">
              <h2 class="section-title" id="cta-title" style="color:#fff;margin-bottom:1rem;">Pronto para começar sua jornada?</h2>
              <p style="color:rgba(255,255,255,0.85);font-size:1.1rem;margin-bottom:2rem;max-width:500px;margin-left:auto;margin-right:auto;">Cadastre-se gratuitamente e acesse centenas de vagas inclusivas agora mesmo.</p>
              <div class="flex align-center gap-1" style="justify-content:center;flex-wrap:wrap;">
                <button class="btn" style="background:#fff;color:var(--primary);border-color:#fff;" onclick="openModal('cadastro')">Criar Conta Grátis</button>
                <button class="btn" style="background:transparent;color:#fff;border-color:rgba(255,255,255,0.5);" onclick="window.location.href=\'/vagas\'">Explorar Vagas</button>
              </div>
            </div>
          </div>
        </section>

      </div><!-- /home -->

      <!-- ===== VAGAS ===== -->

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>