<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<div class="page" id="page-contato">
        <section class="section">
          <div class="container">
            <div class="grid-2" style="gap:4rem;align-items:flex-start;">
              <div class="animate-in">
                <div class="section-label">Fale Conosco</div>
                <h1 class="section-title">Estamos aqui para ajudar</h1>
                <div class="tts-wrap" style="margin-bottom:2rem;">
                  <p class="section-desc" id="contato-desc">Tem dúvidas, sugestões ou quer saber mais sobre o PEVI? Nossa equipe responde em até 24 horas.</p>
                  <button class="speak-btn" onclick="speakElement('contato-desc')" aria-label="Ouvir">🔊 Ouvir</button>
                </div>
                <div style="display:flex;flex-direction:column;gap:1.25rem;">
                  <div class="flex align-center gap-1">
                    <div style="width:44px;height:44px;background:var(--primary-light);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;font-size:1.2rem;flex-shrink:0;" aria-hidden="true">📧</div>
                    <div><div style="font-weight:700;font-size:0.9rem;">E-mail</div><div class="text-muted">contato@pevi.com.br</div></div>
                  </div>
                  <div class="flex align-center gap-1">
                    <div style="width:44px;height:44px;background:var(--primary-light);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;font-size:1.2rem;flex-shrink:0;" aria-hidden="true">📱</div>
                    <div><div style="font-weight:700;font-size:0.9rem;">WhatsApp Acessível</div><div class="text-muted">(11) 99999-0000</div></div>
                  </div>
                  <div class="flex align-center gap-1">
                    <div style="width:44px;height:44px;background:var(--primary-light);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;font-size:1.2rem;flex-shrink:0;" aria-hidden="true">🤟</div>
                    <div><div style="font-weight:700;font-size:0.9rem;">Atendimento em LIBRAS</div><div class="text-muted">Disponível seg. a sex., 9h–18h</div></div>
                  </div>
                </div>
              </div>
              <div class="card animate-in">
                <h2 style="font-weight:800;margin-bottom:1.5rem;">Enviar mensagem</h2>
                <div class="form-group"><label class="form-label" for="contato-nome">Nome completo *</label><input type="text" id="contato-nome" class="form-input" placeholder="Seu nome" required aria-required="true" /></div>
                <div class="form-group"><label class="form-label" for="contato-email">E-mail *</label><input type="email" id="contato-email" class="form-input" placeholder="seu@email.com" required aria-required="true" /></div>
                <div class="form-group">
                  <label class="form-label" for="contato-assunto">Assunto</label>
                  <select id="contato-assunto" class="form-select">
                    <option>Dúvidas sobre vagas</option>
                    <option>Sou empresa e quero ser parceira</option>
                    <option>Acessibilidade da plataforma</option>
                    <option>Sugestão</option>
                    <option>Outro</option>
                  </select>
                </div>
                <div class="form-group"><label class="form-label" for="contato-msg">Mensagem *</label><textarea id="contato-msg" class="form-textarea" placeholder="Como podemos ajudar?" required aria-required="true"></textarea></div>
                <button class="btn btn-primary" style="width:100%;" onclick="submitContato()">Enviar Mensagem 📨</button>
              </div>
            </div>
          </div>
        </section>
      </div>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>