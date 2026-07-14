<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="page" id="page-vagas">
        <section class="section">
          <div class="container">
            <div class="mb-4 animate-in">
              <div class="section-label">Oportunidades</div>
              <h1 class="section-title">Vagas Disponíveis</h1>
              <p><span id="jobs-count" aria-live="polite" aria-atomic="true">6 vagas encontradas</span></p>
            </div>
            <div class="search-bar" role="search" aria-label="Busca de vagas">
              <div class="search-input-wrap">
                <span aria-hidden="true">🔍</span>
                <input type="search" id="search-jobs" class="search-input" placeholder="Cargo, empresa ou habilidade..." oninput="filterJobs()" aria-label="Buscar vagas" />
              </div>
              <div class="search-divider" aria-hidden="true"></div>
              <div class="search-input-wrap">
                <span aria-hidden="true">📍</span>
                <input type="text" class="search-input" placeholder="Cidade ou Remoto" aria-label="Localização" />
              </div>
              <button class="btn btn-primary" aria-label="Buscar">Buscar</button>
            </div>
            <div class="filter-chips" role="group" aria-label="Filtros de categoria">
              <button class="filter-chip active" data-filter="all" onclick="setFilter(this,'all')">Todas</button>
              <button class="filter-chip" data-filter="pcd" onclick="setFilter(this,'pcd')">♿ PcD</button>
              <button class="filter-chip" data-filter="neuro" onclick="setFilter(this,'neuro')">🧠 Neurodiversidade</button>
              <button class="filter-chip" data-filter="remoto" onclick="setFilter(this,'remoto')">🏠 Remoto</button>
              <button class="filter-chip" data-filter="hibrido" onclick="setFilter(this,'hibrido')">🏢 Híbrido</button>
              <button class="filter-chip" data-filter="ti" onclick="setFilter(this,'ti')">💻 TI</button>
              <button class="filter-chip" data-filter="design" onclick="setFilter(this,'design')">🎨 Design</button>
            </div>
            <div class="grid-2" id="jobs-grid">
              <article class="job-card animate-in" data-categories="pcd ti remoto" onclick="openModal('vaga1')">
                <div class="job-card-header"><div class="job-card-logo">💻</div><div style="flex:1;"><div class="job-card-name">Dev Frontend Sênior</div><div class="job-card-company">TechBrasil S.A.</div></div><span class="badge badge-green">🟢 Ativa</span></div>
                <div class="job-card-meta"><span>📍 Remoto</span><span>💰 R$ 8k–12k</span><span>⏱️ CLT</span></div>
                <div class="tts-wrap">
                  <p class="job-card-desc" id="jv1">Desenvolvimento de interfaces acessíveis com React e TypeScript. Empresa com cultura inclusiva.</p>
                  <button class="speak-btn" onclick="event.stopPropagation();speakElement('jv1')" aria-label="Ouvir">🔊 Ouvir</button>
                </div>
                <div class="job-card-footer"><div class="flex gap-1 flex-wrap"><span class="badge badge-blue">PcD</span><span class="badge badge-purple">React</span></div><button class="btn btn-primary" style="padding:0.4rem 1rem;font-size:0.85rem;" onclick="event.stopPropagation();openModal('vaga1')">Candidatar</button></div>
              </article>
              <article class="job-card animate-in" data-categories="neuro design hibrido" onclick="openModal('vaga2')">
                <div class="job-card-header"><div class="job-card-logo">🎨</div><div style="flex:1;"><div class="job-card-name">Designer UX/UI Pleno</div><div class="job-card-company">Criativa Studio</div></div><span class="badge badge-green">🟢 Ativa</span></div>
                <div class="job-card-meta"><span>📍 São Paulo · Híbrido</span><span>💰 R$ 5k–7,5k</span></div>
                <div class="tts-wrap">
                  <p class="job-card-desc" id="jv2">Criação de experiências digitais inclusivas. Ambiente acolhedor para neurodivergentes com horários flexíveis.</p>
                  <button class="speak-btn" onclick="event.stopPropagation();speakElement('jv2')" aria-label="Ouvir">🔊 Ouvir</button>
                </div>
                <div class="job-card-footer"><div class="flex gap-1 flex-wrap"><span class="badge badge-green">Neurodiversidade</span><span class="badge badge-yellow">Figma</span></div><button class="btn btn-primary" style="padding:0.4rem 1rem;font-size:0.85rem;" onclick="event.stopPropagation();openModal('vaga2')">Candidatar</button></div>
              </article>
              <article class="job-card animate-in" data-categories="pcd ti remoto" onclick="openModal('vaga3')">
                <div class="job-card-header"><div class="job-card-logo">📊</div><div style="flex:1;"><div class="job-card-name">Analista de Dados</div><div class="job-card-company">DataMind Analytics</div></div><span class="badge badge-green">🟢 Ativa</span></div>
                <div class="job-card-meta"><span>📍 Rio de Janeiro · Remoto</span><span>💰 R$ 6k–9k</span></div>
                <div class="tts-wrap">
                  <p class="job-card-desc" id="jv3">Análise de dados e BI. Empresa com intérprete de LIBRAS e infraestrutura 100% acessível.</p>
                  <button class="speak-btn" onclick="event.stopPropagation();speakElement('jv3')" aria-label="Ouvir">🔊 Ouvir</button>
                </div>
                <div class="job-card-footer"><div class="flex gap-1 flex-wrap"><span class="badge badge-blue">PcD</span><span class="badge badge-purple">Python</span><span class="badge badge-blue">SQL</span></div><button class="btn btn-primary" style="padding:0.4rem 1rem;font-size:0.85rem;" onclick="event.stopPropagation();openModal('vaga3')">Candidatar</button></div>
              </article>
              <article class="job-card animate-in" data-categories="pcd neuro remoto ti">
                <div class="job-card-header"><div class="job-card-logo">🔒</div><div style="flex:1;"><div class="job-card-name">Analista de Segurança</div><div class="job-card-company">SecureNet Brasil</div></div><span class="badge badge-green">🟢 Ativa</span></div>
                <div class="job-card-meta"><span>📍 Remoto</span><span>💰 R$ 7k–10k</span><span>⏱️ PJ</span></div>
                <div class="tts-wrap">
                  <p class="job-card-desc" id="jv4">Monitoramento e resposta a incidentes de segurança. Empresa pioneira em contratação de profissionais com TEA.</p>
                  <button class="speak-btn" onclick="speakElement('jv4')" aria-label="Ouvir">🔊 Ouvir</button>
                </div>
                <div class="job-card-footer"><div class="flex gap-1 flex-wrap"><span class="badge badge-blue">PcD</span><span class="badge badge-green">TEA Welcome</span></div><button class="btn btn-primary" style="padding:0.4rem 1rem;font-size:0.85rem;">Candidatar</button></div>
              </article>
              <article class="job-card animate-in" data-categories="neuro hibrido">
                <div class="job-card-header"><div class="job-card-logo">📝</div><div style="flex:1;"><div class="job-card-name">Redator(a) de Conteúdo</div><div class="job-card-company">ConteúdoVivo</div></div><span class="badge badge-green">🟢 Ativa</span></div>
                <div class="job-card-meta"><span>📍 Belo Horizonte · Híbrido</span><span>💰 R$ 3,5k–5k</span></div>
                <div class="tts-wrap">
                  <p class="job-card-desc" id="jv5">Criação de conteúdo para blogs e redes sociais. Ambiente adaptado para pessoas com TDAH e dislexia.</p>
                  <button class="speak-btn" onclick="speakElement('jv5')" aria-label="Ouvir">🔊 Ouvir</button>
                </div>
                <div class="job-card-footer"><div class="flex gap-1 flex-wrap"><span class="badge badge-green">Neurodiversidade</span><span class="badge badge-yellow">TDAH Friendly</span></div><button class="btn btn-primary" style="padding:0.4rem 1rem;font-size:0.85rem;">Candidatar</button></div>
              </article>
              <article class="job-card animate-in" data-categories="pcd remoto ti">
                <div class="job-card-header"><div class="job-card-logo">☁️</div><div style="flex:1;"><div class="job-card-name">Engenheiro(a) Cloud</div><div class="job-card-company">CloudBR Tech</div></div><span class="badge badge-green">🟢 Ativa</span></div>
                <div class="job-card-meta"><span>📍 Remoto</span><span>💰 R$ 10k–15k</span><span>⏱️ CLT/PJ</span></div>
                <div class="tts-wrap">
                  <p class="job-card-desc" id="jv6">Infraestrutura e DevOps em AWS/Azure. Empresa com programa robusto de cotas e suporte a PcD.</p>
                  <button class="speak-btn" onclick="speakElement('jv6')" aria-label="Ouvir">🔊 Ouvir</button>
                </div>
                <div class="job-card-footer"><div class="flex gap-1 flex-wrap"><span class="badge badge-blue">PcD</span><span class="badge badge-purple">AWS</span><span class="badge badge-blue">DevOps</span></div><button class="btn btn-primary" style="padding:0.4rem 1rem;font-size:0.85rem;">Candidatar</button></div>
              </article>
            </div>
          </div>
        </section>
      </div>

      <!-- ===== EMPRESAS ===== -->

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>