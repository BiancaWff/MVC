<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="page" id="page-empresas">
        <section class="section">
          <div class="container">
            <div class="text-center mb-4 animate-in">
              <div class="section-label">Para Empresas</div>
              <h1 class="section-title">Diversidade que gera resultados</h1>
              <div class="tts-wrap" style="align-items:center;">
                <p class="section-desc" style="margin:0 auto;" id="emp-desc">Encontre talentos incríveis e cumpra sua responsabilidade social com o apoio do PEVI.</p>
                <button class="speak-btn" onclick="speakElement('emp-desc')" aria-label="Ouvir">🔊 Ouvir</button>
              </div>
            </div>
            <div class="grid-3 mb-4">
              <div class="card animate-in text-center">
                <div class="feature-icon" style="background:#DBEAFE;margin:0 auto 1rem;">📋</div>
                <h3 style="font-weight:800;margin-bottom:0.5rem;">Publique Vagas</h3>
                <div class="tts-wrap" style="align-items:center;"><p class="text-muted" id="emp1">Cadastre suas vagas inclusivas gratuitamente e alcance +15.000 candidatos qualificados.</p><button class="speak-btn" onclick="speakElement('emp1')" aria-label="Ouvir">🔊 Ouvir</button></div>
              </div>
              <div class="card animate-in text-center">
                <div class="feature-icon" style="background:#D1FAE5;margin:0 auto 1rem;">🎯</div>
                <h3 style="font-weight:800;margin-bottom:0.5rem;">Match Inteligente</h3>
                <div class="tts-wrap" style="align-items:center;"><p class="text-muted" id="emp2">Nosso algoritmo faz o match entre candidatos e vagas considerando habilidades E necessidades de acessibilidade.</p><button class="speak-btn" onclick="speakElement('emp2')" aria-label="Ouvir">🔊 Ouvir</button></div>
              </div>
              <div class="card animate-in text-center">
                <div class="feature-icon" style="background:#FEF3C7;margin:0 auto 1rem;">📜</div>
                <h3 style="font-weight:800;margin-bottom:0.5rem;">Conformidade Legal</h3>
                <div class="tts-wrap" style="align-items:center;"><p class="text-muted" id="emp3">Auxílio no cumprimento da Lei de Cotas (Lei 8.213/91) com relatórios e consultoria especializada.</p><button class="speak-btn" onclick="speakElement('emp3')" aria-label="Ouvir">🔊 Ouvir</button></div>
              </div>
            </div>
            <div class="card animate-in" style="background:linear-gradient(135deg,var(--primary-light),var(--bg-card));">
              <div class="grid-2" style="align-items:center;">
                <div>
                  <h2 style="font-family:'Fraunces',serif;font-size:1.8rem;margin-bottom:1rem;">Empresas que confiam no PEVI</h2>
                  <div class="grid-2" style="gap:1rem;margin-bottom:1.5rem;">
                    <div style="text-align:center;padding:1rem;background:var(--bg-card);border-radius:var(--radius-sm);border:1px solid var(--border);">
                      <div style="font-size:1.8rem;font-weight:900;color:var(--primary);">320+</div>
                      <div class="text-muted" style="font-size:0.85rem;">Empresas parceiras</div>
                    </div>
                    <div style="text-align:center;padding:1rem;background:var(--bg-card);border-radius:var(--radius-sm);border:1px solid var(--border);">
                      <div style="font-size:1.8rem;font-weight:900;color:var(--secondary);">94%</div>
                      <div class="text-muted" style="font-size:0.85rem;">Taxa de satisfação</div>
                    </div>
                  </div>
                  <button class="btn btn-primary btn-lg" onclick="openModal('empresa-cadastro')">Quero Ser Parceiro</button>
                </div>
                <div style="text-align:center;font-size:5rem;opacity:0.3;" aria-hidden="true">🤝</div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-- ===== SOBRE ===== -->

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>