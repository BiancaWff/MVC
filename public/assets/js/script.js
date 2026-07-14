// ===== STATE =====
  const state = {
    currentPage: 'home',
    a11y: {
      contrast: 'normal', theme: 'light', fontSize: 'normal',
      dyslexia: false, motion: false, tts: false, links: false,
      cursor: false, colorblind: false
    },
    ttsHoverActive: false,
    activeSpeakBtn: null,
  };

  // ===== ROUTER =====
  function navigate(pageId, pushState = true) {
    const currentEl = document.querySelector('.page.active');
    const nextEl = document.getElementById('page-' + pageId);
    if (!nextEl || pageId === state.currentPage) return;
    if (currentEl) { currentEl.classList.remove('active'); currentEl.style.display = 'none'; }
    nextEl.style.display = 'block';
    nextEl.offsetHeight; // reflow
    nextEl.classList.add('active');
    state.currentPage = pageId;
    window.scrollTo({ top: 0, behavior: 'smooth' });
    updateNavActive(pageId);
    observeAnimations();
    if (pushState) history.pushState({ page: pageId }, '', '#' + pageId);
  }

  function updateNavActive(pageId) {
    document.querySelectorAll('[data-nav]').forEach(el => {
      el.classList.toggle('active', el.dataset.nav === pageId);
    });
  }

  window.addEventListener('popstate', e => navigate(e.state?.page || 'home', false));

  // ===== A11Y PANEL =====
  const a11yPanel  = document.getElementById('a11y-panel');
  const a11yOverlay = document.getElementById('a11y-overlay');

  function openA11yPanel() {
    a11yPanel.classList.add('open');
    a11yOverlay.classList.add('open');
    document.getElementById('a11y-close-btn').focus();
    document.body.style.overflow = 'hidden';
    announceToSR('Painel de acessibilidade aberto');
  }
  function closeA11yPanel() {
    a11yPanel.classList.remove('open');
    a11yOverlay.classList.remove('open');
    document.body.style.overflow = '';
  }

  // ---- helpers ----
  function setToggle(id, active) {
    const btn = document.getElementById(id);
    if (!btn) return;
    btn.classList.toggle('active', active);
    btn.setAttribute('aria-pressed', active);
    const ts = btn.querySelector('.toggle-state');
    if (ts) ts.textContent = active ? 'ON' : 'OFF';
  }

  // ===== FONT SIZE =====
  function setFontSize(size) {
    state.a11y.fontSize = size;
    document.documentElement.dataset.fontSize = size;
    document.querySelectorAll('.font-btn').forEach(b => b.classList.toggle('active', b.dataset.size === size));
    saveA11yPrefs();
    announceToSR('Tamanho de fonte: ' + size);
  }

  // ===== CONTRAST =====
  function toggleContrast() {
    const on = state.a11y.contrast !== 'high';
    state.a11y.contrast = on ? 'high' : 'normal';
    document.documentElement.dataset.contrast = on ? 'high' : '';
    setToggle('btn-contrast', on);
    saveA11yPrefs();
    announceToSR(on ? 'Alto contraste ativado' : 'Contraste normal ativado');
  }

  // ===== DARK MODE =====
  function toggleDarkMode() {
    const on = state.a11y.theme !== 'dark';
    state.a11y.theme = on ? 'dark' : 'light';
    document.documentElement.dataset.theme = on ? 'dark' : '';
    setToggle('btn-dark', on);
    saveA11yPrefs();
    announceToSR(on ? 'Modo escuro ativado' : 'Modo claro ativado');
  }

  // ===== COLORBLIND =====
  function toggleColorblind() {
    state.a11y.colorblind = !state.a11y.colorblind;
    document.documentElement.dataset.colorblind = state.a11y.colorblind ? 'on' : '';
    setToggle('btn-colorblind', state.a11y.colorblind);
    saveA11yPrefs();
    announceToSR(state.a11y.colorblind ? 'Modo daltonismo ativado (paleta acessível)' : 'Cores normais restauradas');
  }

  // ===== DYSLEXIA =====
  function toggleDyslexia() {
    state.a11y.dyslexia = !state.a11y.dyslexia;
    document.documentElement.dataset.dyslexia = state.a11y.dyslexia ? 'on' : '';
    setToggle('btn-dyslexia', state.a11y.dyslexia);
    saveA11yPrefs();
    announceToSR(state.a11y.dyslexia ? 'Fonte para dislexia ativada' : 'Fonte normal restaurada');
  }

  // ===== MOTION =====
  function toggleMotion() {
    state.a11y.motion = !state.a11y.motion;
    document.documentElement.dataset.motion = state.a11y.motion ? 'reduced' : '';
    setToggle('btn-motion', state.a11y.motion);
    saveA11yPrefs();
    announceToSR(state.a11y.motion ? 'Movimento reduzido ativado' : 'Movimento normal restaurado');
  }

  // ===== LINKS =====
  function toggleLinks() {
    state.a11y.links = !state.a11y.links;
    document.documentElement.dataset.links = state.a11y.links ? 'underline' : '';
    setToggle('btn-links', state.a11y.links);
    saveA11yPrefs();
    announceToSR(state.a11y.links ? 'Sublinhado de links ativado' : 'Sublinhado de links desativado');
  }

  // ===== CURSOR =====
  function toggleCursor() {
    state.a11y.cursor = !state.a11y.cursor;
    document.body.style.cursor = state.a11y.cursor
      ? `url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Cpath d='M0 0 L0 28 L8 20 L14 32 L18 30 L12 18 L24 18 Z' fill='%232563EB' stroke='white' stroke-width='2'/%3E%3C/svg%3E") 0 0, auto`
      : '';
    setToggle('btn-cursor', state.a11y.cursor);
    saveA11yPrefs();
    announceToSR(state.a11y.cursor ? 'Cursor grande ativado' : 'Cursor normal restaurado');
  }

  // ===== GLOBAL TTS (hover) =====
  let ttsHoverHandler = null;
  function toggleGlobalTTS() {
    state.a11y.tts = !state.a11y.tts;
    setToggle('btn-tts', state.a11y.tts);
    if (state.a11y.tts) {
      showToast('🔊 TTS ativado — passe o mouse sobre parágrafos e títulos', 'info');
      ttsHoverHandler = e => {
        const el = e.target.closest('p,h1,h2,h3,li,blockquote');
        if (el) { stopTTS(); speakText(el.textContent); }
      };
      document.addEventListener('mouseover', ttsHoverHandler);
    } else {
      stopTTS();
      if (ttsHoverHandler) { document.removeEventListener('mouseover', ttsHoverHandler); ttsHoverHandler = null; }
      showToast('🔇 TTS desativado', 'info');
    }
    saveA11yPrefs();
    announceToSR(state.a11y.tts ? 'Leitura por hover ativada' : 'Leitura por hover desativada');
  }

  // ===== ABRIR VLIBRAS (mostrar o widget e anunciar) =====
  function openVLibras() {
    const vlibrasButton = document.querySelector('[vw-access-button]');
    if (vlibrasButton) {
      // Simula clique no botão do VLibras para abrir o avatar
      vlibrasButton.click();
      showToast('🤟 Tradutor Libras ativado. Clique no ícone flutuante para abrir o avatar.', 'info');
      announceToSR('Tradutor VLibras ativado. Use o botão flutuante para traduzir para Libras.');
    } else {
      showToast('⚠️ O VLibras já está disponível. Procure o ícone flutuante no canto inferior direito.', 'info');
    }
    // Fecha o painel de acessibilidade após acionar (opcional)
    closeA11yPanel();
  }

  // ===== RESET =====
  function resetA11y() {
    state.a11y = { contrast:'normal', theme:'light', fontSize:'normal', dyslexia:false, motion:false, tts:false, links:false, cursor:false, colorblind:false };
    ['contrast','theme','dyslexia','motion','links','colorblind','fontSize'].forEach(k => {
      if (k === 'fontSize') document.documentElement.dataset.fontSize = 'normal';
      else document.documentElement.removeAttribute('data-' + k);
    });
    document.body.style.cursor = '';
    stopTTS();
    if (ttsHoverHandler) { document.removeEventListener('mouseover', ttsHoverHandler); ttsHoverHandler = null; }
    ['btn-contrast','btn-dark','btn-colorblind','btn-dyslexia','btn-tts','btn-motion','btn-links','btn-cursor'].forEach(id => setToggle(id, false));
    document.querySelectorAll('.font-btn').forEach(b => b.classList.toggle('active', b.dataset.size === 'normal'));
    localStorage.removeItem('pevi-a11y');
    showToast('✅ Configurações redefinidas', 'success');
    announceToSR('Todas as configurações de acessibilidade foram redefinidas');
  }

  // ===== PERSIST =====
  function saveA11yPrefs() {
    try { localStorage.setItem('pevi-a11y', JSON.stringify(state.a11y)); } catch(e) {}
  }
  function loadA11yPrefs() {
    try {
      const saved = localStorage.getItem('pevi-a11y');
      if (!saved) return;
      const p = JSON.parse(saved);
      Object.assign(state.a11y, p);
      if (p.contrast === 'high') document.documentElement.dataset.contrast = 'high';
      if (p.theme === 'dark') document.documentElement.dataset.theme = 'dark';
      if (p.colorblind) document.documentElement.dataset.colorblind = 'on';
      if (p.dyslexia) document.documentElement.dataset.dyslexia = 'on';
      if (p.motion) document.documentElement.dataset.motion = 'reduced';
      if (p.links) document.documentElement.dataset.links = 'underline';
      document.documentElement.dataset.fontSize = p.fontSize || 'normal';
      if (p.contrast === 'high') setToggle('btn-contrast', true);
      if (p.theme === 'dark') setToggle('btn-dark', true);
      if (p.colorblind) setToggle('btn-colorblind', true);
      if (p.dyslexia) setToggle('btn-dyslexia', true);
      if (p.motion) setToggle('btn-motion', true);
      if (p.links) setToggle('btn-links', true);
      if (p.cursor) { setToggle('btn-cursor', true); toggleCursor(); }
      document.querySelectorAll('.font-btn').forEach(b => b.classList.toggle('active', b.dataset.size === (p.fontSize || 'normal')));
    } catch(e) {}
  }

  // ===== TTS ENGINE =====
  function speakText(text) {
    if (!text || !text.trim()) return;
    stopTTS();
    const utt = new SpeechSynthesisUtterance(text.trim().substring(0, 500));
    utt.lang = 'pt-BR'; utt.rate = 0.9; utt.pitch = 1; utt.volume = 1;
    const voices = speechSynthesis.getVoices();
    const ptVoice = voices.find(v => v.lang.startsWith('pt'));
    if (ptVoice) utt.voice = ptVoice;
    utt.onend = () => { if (state.activeSpeakBtn) { state.activeSpeakBtn.classList.remove('speaking'); state.activeSpeakBtn.textContent = '🔊 Ouvir'; state.activeSpeakBtn = null; } };
    speechSynthesis.speak(utt);
  }

  function speakElement(id) {
    const el = document.getElementById(id);
    if (!el) return;

    const wrap = el.closest('.tts-wrap') || el.parentElement;
    const btn = wrap ? wrap.querySelector('.speak-btn') : null;

    if (state.activeSpeakBtn === btn && speechSynthesis.speaking) {
      stopTTS(); return;
    }

    if (state.activeSpeakBtn) { state.activeSpeakBtn.classList.remove('speaking'); state.activeSpeakBtn.textContent = '🔊 Ouvir'; }

    state.activeSpeakBtn = btn;
    if (btn) { btn.classList.add('speaking'); btn.textContent = '⏹ Parar'; }

    speakText(el.textContent);
  }

  function stopTTS() {
    speechSynthesis.cancel();
    if (state.activeSpeakBtn) {
      state.activeSpeakBtn.classList.remove('speaking');
      state.activeSpeakBtn.textContent = '🔊 Ouvir';
      state.activeSpeakBtn = null;
    }
  }

  // ===== SR ANNOUNCE =====
  function announceToSR(msg) {
    const r = document.getElementById('sr-announce');
    if (!r) return;
    r.textContent = '';
    setTimeout(() => r.textContent = msg, 50);
  }

  // ===== TOAST =====
  function showToast(message, type = 'info', duration = 3500) {
    const container = document.getElementById('toast-container');
    if (!container) return;
    const icons = { success:'✅', error:'❌', info:'ℹ️' };
    const toast = document.createElement('div');
    toast.className = 'toast ' + type;
    toast.innerHTML = `<span>${icons[type]||'ℹ️'}</span><span>${message}</span>`;
    toast.setAttribute('role','alert');
    container.appendChild(toast);
    setTimeout(() => {
      toast.style.animation = 'toastIn 0.3s ease reverse forwards';
      setTimeout(() => toast.remove(), 300);
    }, duration);
  }

  // ===== ANIMATIONS =====
  function observeAnimations() {
    const els = document.querySelectorAll('.animate-in:not(.visible)');
    if (!els.length) return;
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
    }, { threshold: 0.1 });
    els.forEach(el => obs.observe(el));
  }

  // ===== COUNTERS =====
  function animateCounter(el) {
    const target = parseInt(el.dataset.target, 10);
    const suffix = el.dataset.suffix || '';
    const duration = 1500;
    const start = performance.now();
    function update(now) {
      const progress = Math.min((now - start) / duration, 1);
      const ease = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.round(ease * target) + suffix;
      if (progress < 1) requestAnimationFrame(update);
    }
    requestAnimationFrame(update);
  }
  function observeCounters() {
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting && !e.target.classList.contains('counted')) { e.target.classList.add('counted'); animateCounter(e.target); obs.unobserve(e.target); } });
    }, { threshold: 0.5 });
    document.querySelectorAll('[data-target]').forEach(c => obs.observe(c));
  }

  // ===== MOBILE NAV =====
  function toggleMobileNav() {
    document.getElementById('mobile-nav')?.classList.toggle('open');
    const btn = document.getElementById('hamburger');
    if (btn) { const open = btn.classList.toggle('open'); btn.setAttribute('aria-expanded', open); }
  }

  // ===== MODAL =====
  function openModal(id) {
    const m = document.getElementById('modal-' + id);
    if (m) { m.classList.add('open'); document.body.style.overflow = 'hidden'; }
  }
  function closeModal(id) {
    const m = document.getElementById('modal-' + id);
    if (m) { m.classList.remove('open'); document.body.style.overflow = ''; }
  }
  document.querySelectorAll('.modal-overlay').forEach(overlay => {
    overlay.addEventListener('click', e => { if (e.target === overlay) { overlay.classList.remove('open'); document.body.style.overflow = ''; } });
  });

  // ===== FILTER / SEARCH =====
  function setFilter(btn, filter) {
    document.querySelectorAll('.filter-chip').forEach(c => c.classList.remove('active'));
    btn.classList.add('active');
    filterJobs();
  }
  function filterJobs() {
    const query = (document.getElementById('search-jobs')?.value || '').toLowerCase();
    const activeFilter = document.querySelector('.filter-chip.active')?.dataset.filter || 'all';
    const cards = document.querySelectorAll('.job-card[data-categories]');
    let shown = 0;
    cards.forEach(card => {
      const text = card.textContent.toLowerCase();
      const cats = card.dataset.categories || '';
      const show = (!query || text.includes(query)) && (activeFilter === 'all' || cats.includes(activeFilter));
      card.style.display = show ? '' : 'none';
      if (show) shown++;
    });
    const count = document.getElementById('jobs-count');
    if (count) count.textContent = shown + ' vaga' + (shown !== 1 ? 's' : '') + ' encontrada' + (shown !== 1 ? 's' : '');
  }

  // ===== FORM =====
  function submitContato() {
    const nome  = document.getElementById('contato-nome')?.value.trim();
    const email = document.getElementById('contato-email')?.value.trim();
    if (!nome || !email) { showToast('❌ Preencha os campos obrigatórios', 'error'); return; }
    showToast('✅ Mensagem enviada! Responderemos em breve.', 'success');
  }

  // ===== KEYBOARD =====
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
      closeA11yPanel();
      document.querySelectorAll('.modal-overlay.open').forEach(m => { m.classList.remove('open'); document.body.style.overflow = ''; });
      stopTTS();
    }
  });

  // ===== INIT =====
  document.addEventListener('DOMContentLoaded', () => {
    loadA11yPrefs();
    observeAnimations();
    observeCounters();
    const hash = window.location.hash.replace('#', '');
    if (hash && document.getElementById('page-' + hash)) navigate(hash, false);
    else { document.getElementById('page-home').classList.add('active'); document.getElementById('page-home').style.display = 'block'; }
    speechSynthesis.addEventListener('voiceschanged', () => {});
  });

new window.VLibras.Widget('https://vlibras.gov.br/app');

