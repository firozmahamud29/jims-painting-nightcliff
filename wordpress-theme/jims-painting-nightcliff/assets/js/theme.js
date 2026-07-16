/* ============================================================
   JIM'S PAINTING NIGHTCLIFF — WP Theme JS (Jim's Brand System)
   Handles: menu, scroll, reveal, count-up, before/after slider,
            magnetic CTAs, accordion, reviews carousel,
            2-step form (via WP admin-ajax), floating mobile CTA.
   ============================================================ */

(function () {
  'use strict';

  function initMenu() {
    const b = document.getElementById('burger');
    const n = document.getElementById('nav');
    if (!b || !n) return;
    b.addEventListener('click', () => {
      const open = n.classList.toggle('open');
      b.classList.toggle('is-open', open);
      b.setAttribute('aria-expanded', open);
    });
    n.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
      n.classList.remove('open'); b.classList.remove('is-open'); b.setAttribute('aria-expanded','false');
    }));
  }

  function initScroll() {
    const header = document.querySelector('.header');
    const progress = document.getElementById('scrollProgress');
    const onScroll = () => {
      const y = window.scrollY;
      header?.classList.toggle('scrolled', y > 8);
      if (progress) {
        const h = document.documentElement.scrollHeight - window.innerHeight;
        progress.style.width = (h > 0 ? (y / h) * 100 : 0) + '%';
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
    document.querySelectorAll('a[href^="#"]').forEach(link => {
      link.addEventListener('click', (e) => {
        const id = link.getAttribute('href');
        if (id === '#' || id.length < 2) return;
        const target = document.querySelector(id);
        if (!target) return;
        e.preventDefault();
        const hh = header?.offsetHeight || 0;
        window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - hh - 12, behavior: 'smooth' });
      });
    });
  }

  function initReveal() {
    const els = document.querySelectorAll('.reveal');
    if (!('IntersectionObserver' in window) || !els.length) { els.forEach(el => el.classList.add('in')); return; }
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('in'); io.unobserve(entry.target); } });
    }, { threshold: 0.12, rootMargin: '0px 0px -50px 0px' });
    els.forEach(el => io.observe(el));
  }

  function initCounters() {
    const nums = document.querySelectorAll('.stat-num');
    if (!nums.length) return;
    const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const animate = (el) => {
      const target = parseFloat(el.dataset.count);
      const decimals = parseInt(el.dataset.decimals || '0');
      const suffix = el.dataset.suffix || '';
      if (reduce) { el.textContent = target.toFixed(decimals) + suffix; return; }
      const start = performance.now();
      const step = (now) => {
        const t = Math.min((now - start) / 1800, 1);
        const eased = 1 - Math.pow(1 - t, 3);
        const val = target * eased;
        el.textContent = (decimals ? val.toFixed(decimals) : Math.round(val)) + suffix;
        if (t < 1) requestAnimationFrame(step);
      };
      requestAnimationFrame(step);
    };
    if (!('IntersectionObserver' in window)) { nums.forEach(animate); return; }
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => { if (entry.isIntersecting) { animate(entry.target); io.unobserve(entry.target); } });
    }, { threshold: 0.5 });
    nums.forEach(el => io.observe(el));
  }

  function initBaSlider() {
    const slider = document.getElementById('baSlider');
    if (!slider) return;
    const after = slider.querySelector('.ba-after');
    const handle = document.getElementById('baHandle');
    let dragging = false;
    const setPos = (clientX) => {
      const rect = slider.getBoundingClientRect();
      const x = Math.max(0, Math.min(clientX - rect.left, rect.width));
      const pct = (x / rect.width) * 100;
      after.style.clipPath = `inset(0 0 0 ${pct}%)`;
      handle.style.left = pct + '%';
    };
    const onDown = (e) => { dragging = true; setPos(e.clientX || e.touches?.[0]?.clientX); e.preventDefault(); };
    const onMove = (e) => { if (!dragging) return; setPos(e.clientX || e.touches?.[0]?.clientX); };
    slider.addEventListener('mousedown', onDown);
    slider.addEventListener('touchstart', onDown, { passive: false });
    window.addEventListener('mousemove', onMove);
    window.addEventListener('touchmove', onMove, { passive: true });
    window.addEventListener('mouseup', () => { dragging = false; });
    window.addEventListener('touchend', () => { dragging = false; });
    slider.addEventListener('click', (e) => setPos(e.clientX));
  }

  function initMagnetic() {
    if (window.matchMedia('(pointer: coarse)').matches) return;
    document.querySelectorAll('[data-magnetic]').forEach(btn => {
      btn.addEventListener('mousemove', (e) => {
        const r = btn.getBoundingClientRect();
        btn.style.transform = `translate(${(e.clientX - r.left - r.width/2) * 0.15}px, ${(e.clientY - r.top - r.height/2) * 0.2}px)`;
      });
      btn.addEventListener('mouseleave', () => { btn.style.transform = ''; });
    });
  }

  function initAccordion() {
    document.querySelectorAll('.acc-h').forEach(h => {
      h.addEventListener('click', () => {
        const item = h.parentElement;
        const wasOpen = item.classList.contains('open');
        document.querySelectorAll('.acc').forEach(i => { i.classList.remove('open'); i.querySelector('.acc-h').setAttribute('aria-expanded','false'); });
        if (!wasOpen) { item.classList.add('open'); h.setAttribute('aria-expanded','true'); }
      });
    });
  }

  function initReviews() {
    // Static card grid — no carousel needed
  }

  /* ---------- 2-step form (WP admin-ajax) ---------- */
  function initForm() {
    const form = document.getElementById('leadForm');
    if (!form) return;
    const step1 = form.querySelector('.fstep[data-step="1"]');
    const step2 = form.querySelector('.fstep[data-step="2"]');
    const nextBtn = document.getElementById('nextBtn');
    const backBtn = document.getElementById('backBtn');
    const pill = document.getElementById('stepPill');
    const success = form.querySelector('.fsuccess');

    function setStep(n) {
      step1.classList.toggle('active', n === 1);
      step2.classList.toggle('active', n === 2);
      if (pill) pill.textContent = n === 1 ? 'Step 1 of 2' : 'Step 2 of 2';
    }
    function validate(stepEl) {
      let ok = true;
      stepEl.querySelectorAll('[required]').forEach(f => {
        const isRadio = f.type === 'radio';
        const filled = isRadio ? form.querySelector(`[name="${f.name}"]:checked`) : f.value.trim();
        if (!filled) { ok = false; f.style.borderColor = '#C0392B'; } else { f.style.borderColor = ''; }
      });
      return ok;
    }
    nextBtn?.addEventListener('click', () => { if (validate(step1)) setStep(2); else step1.scrollIntoView({behavior:'smooth',block:'center'}); });
    backBtn?.addEventListener('click', () => setStep(1));

    form.addEventListener('submit', async (e) => {
      e.preventDefault();
      if (!validate(step2)) return;
      const data = Object.fromEntries(new FormData(form).entries());
      data.submitted_at = new Date().toISOString();
      data.source = "Jim's Painting Nightcliff — Website";

      const btn = form.querySelector('button[type="submit"]');
      const orig = btn.textContent;
      btn.disabled = true; btn.textContent = 'Sending…';

      try {
        const res = await fetch(JPN.ajax_url, {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: new URLSearchParams({ action: 'jpn_submit_lead', payload: JSON.stringify(data), nonce: JPN.nonce })
        });
        const json = await res.json();
        if (!json.success) throw new Error(json.data?.message || 'error');
        step1.classList.remove('active'); step2.classList.remove('active');
        success.classList.add('show');
        form.scrollIntoView({ behavior:'smooth', block:'center' });
      } catch (err) {
        alert('Sorry, something went wrong. Please call (08) 8900 0000.');
        btn.disabled = false; btn.textContent = orig;
      }
    });
  }

  function initFloatCta() {
    const cta = document.getElementById('floatCta');
    const form = document.getElementById('quote-form-card');
    if (!cta) return;
    const onScroll = () => {
      const past = window.scrollY > window.innerHeight * 0.7;
      let fv = false;
      if (form) { const r = form.getBoundingClientRect(); fv = r.top < window.innerHeight && r.bottom > 0; }
      cta.classList.toggle('show', past && !fv && window.innerWidth <= 720);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  function initYear() { const y = document.getElementById('year'); if (y) y.textContent = new Date().getFullYear(); }

  /* ---------- Package tabs ---------- */
  function initPackageTabs() {
    const tabs = document.querySelectorAll('.pkg-tab');
    const panels = document.querySelectorAll('.pkg-panel');
    if (!tabs.length) return;
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const target = tab.dataset.tab;
        tabs.forEach(t => t.classList.toggle('active', t === tab));
        panels.forEach(p => p.classList.toggle('active', p.dataset.panel === target));
      });
    });
  }

  function init() {
    initMenu(); initScroll(); initReveal(); initCounters(); initBaSlider();
    initMagnetic(); initAccordion(); initReviews(); initForm(); initFloatCta(); initYear();
    initPackageTabs();
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
  else init();
})();
