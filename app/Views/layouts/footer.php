</main>
  </div>

  <!-- ===== FOOTER ===== -->
  <footer role="contentinfo">
    <div class="footer-inner">
      <div class="footer-grid">
        <div>
          <div class="footer-logo-text">PEVI</div>
          <p class="footer-desc">Plataforma Especializada em Vagas Inclusivas. Conectando talentos diversos a empresas comprometidas com a diversidade.</p>
          <div class="footer-badges">
            <span class="footer-badge">♿ WCAG 2.1 AA</span>
            <span class="footer-badge">🌟 B Corp</span>
          </div>
        </div>
        <div>
          <div class="footer-heading">Plataforma</div>
          <ul class="footer-links">
            <li><button class="footer-link" onclick="navigate('vagas')">Buscar Vagas</button></li>
            <li><button class="footer-link" onclick="navigate('empresas')">Para Empresas</button></li>
            <li><button class="footer-link" onclick="openModal('cadastro')">Cadastrar</button></li>
          </ul>
        </div>
        <div>
          <div class="footer-heading">Empresa</div>
          <ul class="footer-links">
            <li><button class="footer-link" onclick="navigate('sobre')">Sobre o PEVI</button></li>
            <li><button class="footer-link" onclick="navigate('contato')">Contato</button></li>
            <li><a class="footer-link" href="#">Blog</a></li>
          </ul>
        </div>
        <div>
          <div class="footer-heading">Acessibilidade</div>
          <ul class="footer-links">
            <li><button class="footer-link" onclick="openA11yPanel()">Painel de Acessibilidade</button></li>
            <li><a class="footer-link" href="#">Política de Privacidade</a></li>
            <li><a class="footer-link" href="#">Termos de Uso</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span>© 2024 PEVI — Todos os direitos reservados</span>
        <span>Feito com ❤️ para a inclusão</span>
      </div>
    </div>
  </footer>

  <!-- ===== MODAIS ===== -->
  <div class="modal-overlay" id="modal-cadastro" role="dialog" aria-modal="true" aria-labelledby="modal-cad-title">
    <div class="modal">
      <div class="modal-header">
        <h2 class="modal-title" id="modal-cad-title">Criar sua conta no PEVI</h2>
        <button class="modal-close" onclick="closeModal('cadastro')" aria-label="Fechar">✕</button>
      </div>
      <div class="steps mb-4">
        <div class="step active"><div class="step-circle">1</div><div class="step-label">Dados</div></div>
        <div class="step"><div class="step-circle">2</div><div class="step-label">Perfil</div></div>
        <div class="step"><div class="step-circle">3</div><div class="step-label">Pronto</div></div>
      </div>
      <div class="form-group"><label class="form-label" for="cad-nome">Nome completo *</label><input type="text" id="cad-nome" class="form-input" placeholder="Seu nome completo" required /></div>
      <div class="form-group"><label class="form-label" for="cad-email">E-mail *</label><input type="email" id="cad-email" class="form-input" placeholder="seu@email.com" required /></div>
      <div class="form-group"><label class="form-label" for="cad-senha">Senha *</label><input type="password" id="cad-senha" class="form-input" placeholder="Mínimo 8 caracteres" required /></div>
      <div class="form-group">
        <label class="form-label" for="cad-tipo">Você é... *</label>
        <select id="cad-tipo" class="form-select">
          <option>Candidato(a) buscando emprego</option>
          <option>Empresa buscando talentos</option>
        </select>
      </div>
      <button class="btn btn-primary" style="width:100%;margin-top:0.5rem;" onclick="showToast('✅ Conta criada com sucesso!','success');closeModal('cadastro');">Criar Conta Gratuitamente 🚀</button>
      <p class="text-muted text-center mt-2" style="font-size:0.85rem;">Já tem conta? <a href="#" style="color:var(--primary);font-weight:700;">Entrar</a></p>
    </div>
  </div>

  <div class="modal-overlay" id="modal-vaga1" role="dialog" aria-modal="true" aria-labelledby="mv1-title">
    <div class="modal">
      <div class="modal-header"><h2 class="modal-title" id="mv1-title">Dev Frontend Sênior</h2><button class="modal-close" onclick="closeModal('vaga1')" aria-label="Fechar">✕</button></div>
      <div class="flex gap-1 flex-wrap mb-2"><span class="badge badge-blue">PcD</span><span class="badge badge-green">Remoto</span><span class="badge badge-purple">CLT</span></div>
      <p style="font-weight:700;margin-bottom:0.25rem;">TechBrasil S.A. · R$ 8.000 – 12.000/mês</p>
      <hr class="divider" />
      <h3 style="font-weight:700;margin-bottom:0.5rem;">Sobre a vaga</h3>
      <div class="tts-wrap"><p class="text-muted" style="line-height:1.7;margin-bottom:1rem;" id="mv1-desc">Buscamos um(a) desenvolvedor(a) frontend sênior apaixonado(a) por acessibilidade digital. Você implementará componentes acessíveis seguindo as diretrizes WCAG 2.1.</p><button class="speak-btn" onclick="speakElement('mv1-desc')" aria-label="Ouvir descrição da vaga">🔊 Ouvir</button></div>
      <h3 style="font-weight:700;margin-bottom:0.5rem;margin-top:1rem;">Adaptações disponíveis</h3>
      <ul style="list-style:none;display:flex;flex-direction:column;gap:0.4rem;margin-bottom:1rem;">
        <li>✅ Home office 100%</li><li>✅ Horários flexíveis</li><li>✅ Equipamentos adaptados fornecidos</li><li>✅ Intérprete de LIBRAS em reuniões</li>
      </ul>
      <button class="btn btn-primary" style="width:100%;" onclick="showToast('✅ Candidatura enviada!','success');closeModal('vaga1');">Candidatar-me a esta vaga</button>
    </div>
  </div>

  <div class="modal-overlay" id="modal-vaga2" role="dialog" aria-modal="true" aria-labelledby="mv2-title">
    <div class="modal">
      <div class="modal-header"><h2 class="modal-title" id="mv2-title">Designer UX/UI Pleno</h2><button class="modal-close" onclick="closeModal('vaga2')" aria-label="Fechar">✕</button></div>
      <div class="flex gap-1 flex-wrap mb-2"><span class="badge badge-green">Neurodiversidade</span><span class="badge badge-yellow">Híbrido</span></div>
      <p style="font-weight:700;margin-bottom:0.25rem;">Criativa Studio · R$ 5.000 – 7.500/mês</p>
      <hr class="divider" />
      <h3 style="font-weight:700;margin-bottom:0.5rem;">Sobre a vaga</h3>
      <div class="tts-wrap"><p class="text-muted" style="line-height:1.7;" id="mv2-desc">Criação de interfaces intuitivas e acessíveis. Valorizamos perspectivas únicas de profissionais neurodivergentes que enxergam soluções diferenciadas em design.</p><button class="speak-btn" onclick="speakElement('mv2-desc')" aria-label="Ouvir">🔊 Ouvir</button></div>
      <h3 style="font-weight:700;margin-bottom:0.5rem;margin-top:1rem;">Ambiente inclusivo</h3>
      <ul style="list-style:none;display:flex;flex-direction:column;gap:0.4rem;margin-bottom:1rem;">
        <li>✅ Horários flexíveis para TDAH</li><li>✅ Comunicação assíncrona preferencial</li><li>✅ Sala de descompressão no escritório</li>
      </ul>
      <button class="btn btn-primary" style="width:100%;" onclick="showToast('✅ Candidatura enviada!','success');closeModal('vaga2');">Candidatar-me a esta vaga</button>
    </div>
  </div>

  <div class="modal-overlay" id="modal-vaga3" role="dialog" aria-modal="true" aria-labelledby="mv3-title">
    <div class="modal">
      <div class="modal-header"><h2 class="modal-title" id="mv3-title">Analista de Dados</h2><button class="modal-close" onclick="closeModal('vaga3')" aria-label="Fechar">✕</button></div>
      <div class="flex gap-1 flex-wrap mb-2"><span class="badge badge-blue">PcD</span><span class="badge badge-purple">Remoto</span></div>
      <p style="font-weight:700;margin-bottom:0.25rem;">DataMind Analytics · R$ 6.000 – 9.000/mês</p>
      <hr class="divider" />
      <h3 style="font-weight:700;margin-bottom:0.5rem;">Sobre a vaga</h3>
      <div class="tts-wrap"><p class="text-muted" style="line-height:1.7;" id="mv3-desc">Análise de grandes volumes de dados para geração de insights estratégicos. Empresa com infraestrutura 100% acessível e time diverso.</p><button class="speak-btn" onclick="speakElement('mv3-desc')" aria-label="Ouvir">🔊 Ouvir</button></div>
      <h3 style="font-weight:700;margin-bottom:0.5rem;margin-top:1rem;">Acessibilidade garantida</h3>
      <ul style="list-style:none;display:flex;flex-direction:column;gap:0.4rem;margin-bottom:1rem;">
        <li>✅ Intérprete de LIBRAS em todas as reuniões</li><li>✅ Ferramentas com acessibilidade completa</li><li>✅ Suporte de RH especializado em inclusão</li>
      </ul>
      <button class="btn btn-primary" style="width:100%;" onclick="showToast('✅ Candidatura enviada!','success');closeModal('vaga3');">Candidatar-me a esta vaga</button>
    </div>
  </div>

  <div class="modal-overlay" id="modal-empresa-cadastro" role="dialog" aria-modal="true" aria-labelledby="memp-title">
    <div class="modal">
      <div class="modal-header"><h2 class="modal-title" id="memp-title">Seja uma empresa parceira</h2><button class="modal-close" onclick="closeModal('empresa-cadastro')" aria-label="Fechar">✕</button></div>
      <div class="form-group"><label class="form-label" for="emp-nome">Nome da empresa *</label><input type="text" id="emp-nome" class="form-input" placeholder="Razão social ou nome fantasia" /></div>
      <div class="form-group"><label class="form-label" for="emp-cnpj">CNPJ *</label><input type="text" id="emp-cnpj" class="form-input" placeholder="00.000.000/0000-00" /></div>
      <div class="form-group"><label class="form-label" for="emp-email">E-mail corporativo *</label><input type="email" id="emp-email" class="form-input" placeholder="rh@empresa.com.br" /></div>
      <div class="form-group">
        <label class="form-label" for="emp-setor">Setor *</label>
        <select id="emp-setor" class="form-select"><option>Tecnologia</option><option>Saúde</option><option>Educação</option><option>Financeiro</option><option>Varejo</option><option>Outro</option></select>
      </div>
      <button class="btn btn-primary" style="width:100%;" onclick="showToast('✅ Cadastro enviado! Entraremos em contato.','success');closeModal('empresa-cadastro');">Enviar Cadastro</button>
    </div>
  </div>

  <!-- ===== PAINEL DE ACESSIBILIDADE ===== -->
  <div class="a11y-overlay" id="a11y-overlay" onclick="closeA11yPanel()" aria-hidden="true"></div>
  <aside class="a11y-panel" id="a11y-panel" role="complementary" aria-label="Painel de acessibilidade">
    <div class="a11y-header">
      <div class="a11y-title">♿ Acessibilidade</div>
      <button class="a11y-close" id="a11y-close-btn" onclick="closeA11yPanel()" aria-label="Fechar painel">✕</button>
    </div>

    <div>
      <div class="a11y-section-title">Tamanho do Texto</div>
      <div class="font-size-controls" role="group" aria-label="Tamanho da fonte">
        <button class="font-btn" data-size="small"  onclick="setFontSize('small')"  aria-label="Fonte pequena">A-</button>
        <button class="font-btn active" data-size="normal" onclick="setFontSize('normal')" aria-label="Fonte normal">A</button>
        <button class="font-btn" data-size="large"  onclick="setFontSize('large')"  aria-label="Fonte grande">A+</button>
        <button class="font-btn" data-size="xlarge" onclick="setFontSize('xlarge')" aria-label="Fonte extra grande">A++</button>
      </div>
    </div>

    <div class="a11y-group">
      <div class="a11y-section-title">Visual</div>
      <button class="a11y-toggle" id="btn-contrast" onclick="toggleContrast()" aria-pressed="false">
        <span class="a11y-icon" aria-hidden="true">🔆</span> Alto Contraste
        <span class="toggle-state">OFF</span>
      </button>
      <button class="a11y-toggle" id="btn-dark" onclick="toggleDarkMode()" aria-pressed="false">
        <span class="a11y-icon" aria-hidden="true">🌙</span> Modo Escuro
        <span class="toggle-state">OFF</span>
      </button>
      <button class="a11y-toggle" id="btn-colorblind" onclick="toggleColorblind()" aria-pressed="false">
        <span class="a11y-icon" aria-hidden="true">👁️</span> Modo Daltonismo
        <span class="toggle-state">OFF</span>
      </button>
      <button class="a11y-toggle" id="btn-dyslexia" onclick="toggleDyslexia()" aria-pressed="false">
        <span class="a11y-icon" aria-hidden="true">📖</span> Fonte para Dislexia
        <span class="toggle-state">OFF</span>
      </button>
    </div>

    <div class="a11y-group">
      <div class="a11y-section-title">Interação</div>
      <button class="a11y-toggle" id="btn-tts" onclick="toggleGlobalTTS()" aria-pressed="false">
        <span class="a11y-icon" aria-hidden="true">🔊</span> TTS ao Passar Mouse
        <span class="toggle-state">OFF</span>
      </button>
      <button class="a11y-toggle" id="btn-motion" onclick="toggleMotion()" aria-pressed="false">
        <span class="a11y-icon" aria-hidden="true">✋</span> Reduzir Movimento
        <span class="toggle-state">OFF</span>
      </button>
      <button class="a11y-toggle" id="btn-links" onclick="toggleLinks()" aria-pressed="false">
        <span class="a11y-icon" aria-hidden="true">🔗</span> Sublinhar Links
        <span class="toggle-state">OFF</span>
      </button>
      <button class="a11y-toggle" id="btn-cursor" onclick="toggleCursor()" aria-pressed="false">
        <span class="a11y-icon" aria-hidden="true">🖱️</span> Cursor Grande
        <span class="toggle-state">OFF</span>
      </button>
    </div>

    <!-- NOVO: Botão para VLibras dentro do painel de acessibilidade -->
    <div class="a11y-group">
      <div class="a11y-section-title">Língua de Sinais</div>
      <button class="a11y-toggle" id="btn-vlibras" onclick="openVLibras()" aria-pressed="false">
        <span class="a11y-icon" aria-hidden="true">🤟</span> Libras (VLibras)
        <span class="toggle-state">Ativar</span>
      </button>
    </div>

    <button class="a11y-reset" onclick="resetA11y()" aria-label="Redefinir todas as configurações">🔄 Redefinir Configurações</button>
  </aside>

  <!-- ===== JAVASCRIPT ===== -->
  

  <!-- ===== VLIBRAS (Acessibilidade em Libras) ===== -->
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  
  <script src="/assets/js/script.js"></script>
</body>
</html>

Exibindo i