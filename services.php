<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Services &amp; Italy Guide | Dream Italia UniPathways</title>
<meta name="description" content="Complete guide to Italian scholarships (DSU/EDISU), top public universities, and the study visa process for Pakistani students.">

<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: { obsidian: '#080C14', slateaccent: '#94A3B8', italgreen: '#059669', italred: '#DC2626', luxgold: '#D97706' },
        fontFamily: { display: ['Playfair Display', 'serif'], sans: ['Manrope', 'sans-serif'] },
      },
    },
  };
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,500&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="icon" href="assets/images/branding/favicon-32.png" sizes="32x32" type="image/png">
<link rel="icon" href="assets/images/branding/favicon-192.png" sizes="192x192" type="image/png">
<link rel="apple-touch-icon" href="assets/images/branding/favicon-180.png">
</head>
<body class="bg-obsidian antialiased">
<!-- ==========================================================================
     COMPONENT: Preloader — routes from partner countries converging on Italy
     Fully self-contained (inline style + script) so it renders even if the
     external stylesheet/scripts are slow, stale-cached, or fail to load.
     Fades out once the window "load" event fires.
     ========================================================================== -->
<style>
  #preloader{position:fixed;inset:0;z-index:9999;display:flex;align-items:center;justify-content:center;background:#080C14;transition:opacity .6s ease,visibility .6s ease;}
  #preloader.is-hidden{opacity:0;visibility:hidden;pointer-events:none;}
  .preloader-inner{display:flex;flex-direction:column;align-items:center;gap:1.5rem;width:min(600px,88vw);}
  .preloader-map{width:100%;height:auto;overflow:visible;}
  .preloader-marker-dot{animation:preloader-pulse 2.2s ease-in-out infinite;}
  .preloader-marker-ring{animation:preloader-ring 2.2s ease-out infinite;transform-origin:center;}
  @keyframes preloader-pulse{0%,100%{opacity:.6;}50%{opacity:1;}}
  @keyframes preloader-ring{0%{r:3;opacity:.7;}100%{r:12;opacity:0;}}
  .preloader-brand{font-family:'Playfair Display',Georgia,serif;font-size:1.05rem;font-weight:600;letter-spacing:.04em;color:#FFFFFF;text-align:center;}
  .preloader-status{font-size:.7rem;font-weight:500;letter-spacing:.22em;text-transform:uppercase;color:#94A3B8;text-align:center;min-height:1em;}
</style>
<div id="preloader" aria-hidden="true">
  <div class="preloader-inner">
    <svg id="preloader-svg" class="preloader-map" viewBox="0 0 900 380" xmlns="http://www.w3.org/2000/svg">
      <!-- faint world-map graticule -->
      <g stroke="#94A3B8" stroke-opacity="0.08" stroke-width="1">
        <path d="M0,60 H900" stroke-dasharray="1 9"/>
        <path d="M0,140 H900" stroke-dasharray="1 9"/>
        <path d="M0,220 H900" stroke-dasharray="1 9"/>
        <path d="M0,300 H900" stroke-dasharray="1 9"/>
        <path d="M150,0 V380" stroke-dasharray="1 9"/>
        <path d="M450,0 V380" stroke-dasharray="1 9"/>
        <path d="M750,0 V380" stroke-dasharray="1 9"/>
      </g>

      <!-- faint landmass silhouettes: Europe (Italy), Africa, Middle East / South Asia -->
      <g fill="#059669" fill-opacity="0.05" stroke="#94A3B8" stroke-opacity="0.12" stroke-width="1.2">
        <path d="M40,110 C70,80 120,75 150,90 C185,70 225,85 235,115 C255,120 260,150 235,165 C245,190 220,215 190,205 C165,230 120,225 110,195 C75,200 55,170 70,145 C50,140 35,125 40,110 Z"/>
        <path d="M330,230 C365,205 420,205 445,235 C475,240 480,275 455,295 C460,320 425,340 395,325 C365,345 320,335 315,305 C285,300 275,270 300,255 C285,245 310,240 330,230 Z"/>
        <path d="M600,60 C630,35 680,35 700,60 C730,55 740,80 720,95 C725,115 700,130 675,120 C650,135 610,125 610,100 C590,95 585,75 600,60 Z"/>
        <path d="M650,150 C685,115 745,105 785,120 C825,100 875,120 885,155 C905,165 900,200 875,210 C880,235 845,255 815,240 C785,265 730,260 715,230 C680,235 655,205 670,180 C645,175 630,160 650,150 Z"/>
      </g>

      <!-- static ambient routes: every origin converging on Italy -->
      <g id="ambient-routes" fill="none" stroke="#FFFFFF" stroke-opacity="0.14" stroke-width="1.3" stroke-linecap="round" stroke-dasharray="1 8"></g>
      <g id="ambient-markers"></g>

      <!-- destination marker: Italy -->
      <g>
        <circle cx="165" cy="140" r="12" fill="none" stroke="#059669" stroke-width="1.5" class="preloader-marker-ring"/>
        <circle cx="165" cy="140" r="5" fill="#059669" class="preloader-marker-dot"/>
        <text x="165" y="122" text-anchor="middle" fill="#E2E8F0" font-size="13" font-weight="600" font-family="Manrope, sans-serif" letter-spacing="0.5">Italy</text>
      </g>

      <!-- active route: cycles through origin countries -->
      <path id="active-glow" d="" fill="none" stroke="#D97706" stroke-opacity="0.15" stroke-width="6" stroke-linecap="round"/>
      <mask id="active-mask">
        <rect id="active-rect" x="0" y="0" width="0" height="380" fill="#fff"/>
      </mask>
      <path id="active-line" d="" fill="none" stroke="#D97706" stroke-opacity="0.95" stroke-width="2.5" stroke-linecap="round" stroke-dasharray="2 11" mask="url(#active-mask)"/>

      <g id="active-origin-marker">
        <circle r="12" fill="none" stroke="#DC2626" stroke-width="1.5" class="preloader-marker-ring"/>
        <circle r="5" fill="#DC2626" class="preloader-marker-dot"/>
        <text id="active-origin-label" text-anchor="middle" fill="#E2E8F0" font-size="13" font-weight="600" font-family="Manrope, sans-serif" letter-spacing="0.5"></text>
      </g>

      <!-- plane -->
      <g id="plane">
        <path d="M0,0 L-12,-4 L-9.5,0 L-12,4 Z" fill="#FFFFFF" stroke="#94A3B8" stroke-width="0.4"/>
      </g>
    </svg>

    <div class="preloader-brand">Dream Italia UniPathways</div>
    <div class="preloader-status" id="preloader-status">Charting routes to Italy</div>
  </div>
</div>
<script>
(function () {
  var pre = document.getElementById('preloader');
  if (!pre) return;

  /* -------- reveal-on-load -------- */
  var minVisible = 900;
  var startedAt = Date.now();
  function reveal() {
    var remaining = minVisible - (Date.now() - startedAt);
    setTimeout(function () {
      pre.classList.add('is-hidden');
      setTimeout(function () { pre.style.display = 'none'; }, 650);
    }, Math.max(0, remaining));
  }
  if (document.readyState === 'complete') {
    reveal();
  } else {
    window.addEventListener('load', reveal);
  }

  /* -------- flight animation: several countries converging on Italy -------- */
  var ITALY = { x: 165, y: 140 };
  var ORIGINS = [
    { name: 'Pakistan', x: 745, y: 175 },
    { name: 'India',    x: 770, y: 250 },
    { name: 'Turkey',   x: 545, y: 95  },
    { name: 'Nigeria',  x: 400, y: 260 }
  ];

  var svg = document.getElementById('preloader-svg');
  var activeLine = document.getElementById('active-line');
  var activeGlow = document.getElementById('active-glow');
  var rect = document.getElementById('active-rect');
  var plane = document.getElementById('plane');
  var originMarker = document.getElementById('active-origin-marker');
  var originLabel = document.getElementById('active-origin-label');
  var statusEl = document.getElementById('preloader-status');
  var ambientRoutes = document.getElementById('ambient-routes');
  var ambientMarkers = document.getElementById('ambient-markers');

  if (!svg || !activeLine) return;

  var ns = 'http://www.w3.org/2000/svg';
  function controlPoint(a, b) {
    return { x: (a.x + b.x) / 2, y: Math.min(a.y, b.y) - 95 };
  }
  function routeD(a, ctrl, b) {
    return 'M' + a.x + ',' + a.y + ' Q' + ctrl.x + ',' + ctrl.y + ' ' + b.x + ',' + b.y;
  }

  /* faint always-on routes from every origin, drawn once */
  ORIGINS.forEach(function (origin) {
    var ctrl = controlPoint(origin, ITALY);
    var p = document.createElementNS(ns, 'path');
    p.setAttribute('d', routeD(origin, ctrl, ITALY));
    ambientRoutes.appendChild(p);

    var g = document.createElementNS(ns, 'g');
    var dot = document.createElementNS(ns, 'circle');
    dot.setAttribute('cx', origin.x);
    dot.setAttribute('cy', origin.y);
    dot.setAttribute('r', 3.5);
    dot.setAttribute('fill', '#94A3B8');
    dot.setAttribute('fill-opacity', '0.5');
    var label = document.createElementNS(ns, 'text');
    label.setAttribute('x', origin.x);
    label.setAttribute('y', origin.y + 18);
    label.setAttribute('text-anchor', 'middle');
    label.setAttribute('fill', '#94A3B8');
    label.setAttribute('fill-opacity', '0.55');
    label.setAttribute('font-size', '10.5');
    label.setAttribute('font-family', 'Manrope, sans-serif');
    label.textContent = origin.name;
    g.appendChild(dot);
    g.appendChild(label);
    ambientMarkers.appendChild(g);
  });

  var idx = -1;
  var duration = 2600;
  var startTime = null;
  var current = null;

  function nextRoute() {
    idx = (idx + 1) % ORIGINS.length;
    var origin = ORIGINS[idx];
    var ctrl = controlPoint(origin, ITALY);
    var d = routeD(origin, ctrl, ITALY);
    activeLine.setAttribute('d', d);
    activeGlow.setAttribute('d', d);
    originMarker.setAttribute('transform', 'translate(' + origin.x + ',' + origin.y + ')');
    originLabel.setAttribute('y', -18);
    originLabel.textContent = origin.name;
    if (statusEl) statusEl.textContent = origin.name + ' → Italy';
    current = { p0: origin, p1: ctrl, p2: ITALY };
  }

  function bezierPoint(p0, p1, p2, t) {
    var mt = 1 - t;
    return {
      x: mt * mt * p0.x + 2 * mt * t * p1.x + t * t * p2.x,
      y: mt * mt * p0.y + 2 * mt * t * p1.y + t * t * p2.y
    };
  }
  function bezierAngle(p0, p1, p2, t) {
    var mt = 1 - t;
    var dx = 2 * mt * (p1.x - p0.x) + 2 * t * (p2.x - p1.x);
    var dy = 2 * mt * (p1.y - p0.y) + 2 * t * (p2.y - p1.y);
    return Math.atan2(dy, dx) * 180 / Math.PI;
  }

  nextRoute();

  function frame(ts) {
    if (pre.style.display === 'none') return;
    if (!startTime) startTime = ts;
    var t = Math.min(1, (ts - startTime) / duration);
    var pos = bezierPoint(current.p0, current.p1, current.p2, t);
    var angle = bezierAngle(current.p0, current.p1, current.p2, t);
    plane.setAttribute('transform', 'translate(' + pos.x + ',' + pos.y + ') rotate(' + angle + ')');

    var originX = current.p0.x;
    rect.setAttribute('x', Math.min(originX, pos.x));
    rect.setAttribute('width', Math.abs(pos.x - originX));

    if (t < 1) {
      requestAnimationFrame(frame);
    } else {
      startTime = null;
      nextRoute();
      requestAnimationFrame(frame);
    }
  }
  requestAnimationFrame(frame);
})();
</script>

<div id="page-content">
<div id="scroll-progress"></div>

<!-- ==========================================================================
     COMPONENT: Global Header
     ========================================================================== -->
<?php include __DIR__ . '/includes/global-header.php'; ?>

<main>

<!-- ==========================================================================
     SECTION: Page Hero
     ========================================================================== -->
<section class="relative pt-40 pb-24 lg:pt-48 lg:pb-32 overflow-hidden" data-parallax-wrap>
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1523906834658-6e24ef2386f9?q=80&w=2400&auto=format&fit=crop" alt="Italian university library" class="absolute inset-x-0 top-[-15%] w-full h-[130%] object-cover" data-parallax="0.15">
    <div class="absolute inset-0 hero-gradient-overlay"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-10">
    <span class="hero-eyebrow inline-flex items-center gap-2 rounded-full border border-amber-500/30 bg-amber-500/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.2em] text-amber-500 mb-6">Services &amp; Italy Guide</span>
    <h1 class="hero-headline font-display text-4xl sm:text-5xl lg:text-6xl font-semibold leading-tight text-white max-w-3xl">Everything You Need to Study in <span class="text-gradient-italia">Italy</span></h1>
    <p class="hero-subheadline mt-6 text-lg text-slate-300 max-w-2xl leading-relaxed">An in-depth breakdown of scholarship benefits, top public universities, and the exact visa process — so you know precisely what to expect at every stage.</p>
  </div>
</section>

<!-- ==========================================================================
     SECTION: Scholarship Benefits Breakdown (DSU/EDISU)
     ========================================================================== -->
<section class="relative py-24 lg:py-28">
  <div class="max-w-7xl mx-auto px-6 lg:px-10">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal-up">
      <span class="text-xs font-semibold uppercase tracking-[0.3em] text-amber-500">Government Funding</span>
      <h2 class="font-display text-3xl lg:text-5xl font-semibold text-white mt-4">DSU &amp; EDISU Scholarship Benefits</h2>
      <p class="text-slate-400 mt-4">Italy's regional right-to-study bodies fund thousands of international students every year.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 reveal-stagger">
      <div class="reveal-up glass rounded-3xl p-8 card-hover spotlight-card tilt-card">
        <div class="icon-pop flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-500/10 border border-emerald-500/20 mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V6m0 10v2m9-8a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        </div>
        <h3 class="font-display text-lg font-semibold text-white mb-3">Full Tuition Waiver</h3>
        <p class="text-sm text-slate-400 leading-relaxed">Eligible students pay zero tuition fees for the entire duration of their program, based on ISEE income brackets.</p>
      </div>
      <div class="reveal-up glass rounded-3xl p-8 card-hover spotlight-card tilt-card">
        <div class="icon-pop flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-500/10 border border-amber-500/20 mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
        </div>
        <h3 class="font-display text-lg font-semibold text-white mb-3">Housing Grant</h3>
        <p class="text-sm text-slate-400 leading-relaxed">Free or subsidized accommodation in university residences, or a monthly housing allowance where residences are full.</p>
      </div>
      <div class="reveal-up glass rounded-3xl p-8 card-hover spotlight-card tilt-card">
        <div class="icon-pop flex h-14 w-14 items-center justify-center rounded-2xl bg-red-500/10 border border-red-500/20 mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V6m0 10v2m9-8a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        </div>
        <h3 class="font-display text-lg font-semibold text-white mb-3">Monthly Stipend</h3>
        <p class="text-sm text-slate-400 leading-relaxed">Cash grants paid in installments throughout the academic year to cover food and living expenses.</p>
      </div>
    </div>

    <div class="mt-14 grid grid-cols-1 lg:grid-cols-2 gap-6">
      <div class="reveal-up glass rounded-3xl p-8">
        <h3 class="font-display text-xl font-semibold text-white mb-4 gold-underline pb-2">DSU (Diritto allo Studio)</h3>
        <p class="text-sm text-slate-400 leading-relaxed mb-4">Regional scholarship program available across most Italian regions, covering tuition, housing, meals, and a study allowance for both Bachelor's and Master's students.</p>
        <ul class="space-y-2 text-sm text-slate-300">
          <li class="flex items-start gap-2"><span class="text-emerald-500 mt-1">&#9679;</span> Based on family income (ISEE Parificato) and merit</li>
          <li class="flex items-start gap-2"><span class="text-emerald-500 mt-1">&#9679;</span> Renewable annually with minimum credit requirements</li>
          <li class="flex items-start gap-2"><span class="text-emerald-500 mt-1">&#9679;</span> Available in Piedmont, Lombardy, Lazio, and more</li>
        </ul>
      </div>
      <div class="reveal-up glass rounded-3xl p-8">
        <h3 class="font-display text-xl font-semibold text-white mb-4 gold-underline pb-2">EDISU Piemonte</h3>
        <p class="text-sm text-slate-400 leading-relaxed mb-4">The dedicated right-to-study agency for Piedmont region universities including Politecnico di Torino and University of Turin.</p>
        <ul class="space-y-2 text-sm text-slate-300">
          <li class="flex items-start gap-2"><span class="text-amber-500 mt-1">&#9679;</span> Fully-funded tuition, housing &amp; canteen access</li>
          <li class="flex items-start gap-2"><span class="text-amber-500 mt-1">&#9679;</span> Additional support for international students</li>
          <li class="flex items-start gap-2"><span class="text-amber-500 mt-1">&#9679;</span> Application typically opens July-August annually</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTION: Top Italian Public Universities
     ========================================================================== -->
<section class="relative py-24 lg:py-28 bg-[#0A0F1A] border-y border-white/5">
  <div class="max-w-7xl mx-auto px-6 lg:px-10">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal-up">
      <span class="text-xs font-semibold uppercase tracking-[0.3em] text-amber-500">Partner Network</span>
      <h2 class="font-display text-3xl lg:text-5xl font-semibold text-white mt-4">Top Italian Public Universities</h2>
      <p class="text-slate-400 mt-4">Globally ranked institutions across engineering, business, medicine, and the arts.</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-5 reveal-stagger">

      <div class="reveal-up img-zoom-wrap group relative rounded-2xl h-44 card-hover">
        <img src="https://images.unsplash.com/photo-1591604021695-0c69b7c05981?q=80&w=900&auto=format&fit=crop" alt="Politecnico di Torino campus" class="absolute inset-0 h-full w-full object-cover">
        <div class="img-zoom-overlay absolute inset-0"></div>
        <div class="relative h-full flex items-end p-4">
          <p class="font-display text-base font-semibold text-white">Politecnico<br>di Torino</p>
        </div>
      </div>

      <div class="reveal-up img-zoom-wrap group relative rounded-2xl h-44 card-hover">
        <img src="https://images.unsplash.com/photo-1675556003667-879fce2d23e9?q=80&w=900&auto=format&fit=crop" alt="Bocconi University Milan" class="absolute inset-0 h-full w-full object-cover">
        <div class="img-zoom-overlay absolute inset-0"></div>
        <div class="relative h-full flex items-end p-4">
          <p class="font-display text-base font-semibold text-white">Bocconi<br>University</p>
        </div>
      </div>

      <div class="reveal-up img-zoom-wrap group relative rounded-2xl h-44 card-hover">
        <img src="https://images.unsplash.com/photo-1552832230-c0197dd311b5?q=80&w=900&auto=format&fit=crop" alt="Sapienza University of Rome" class="absolute inset-0 h-full w-full object-cover">
        <div class="img-zoom-overlay absolute inset-0"></div>
        <div class="relative h-full flex items-end p-4">
          <p class="font-display text-base font-semibold text-white">Sapienza<br>Rome</p>
        </div>
      </div>

      <div class="reveal-up img-zoom-wrap group relative rounded-2xl h-44 card-hover">
        <img src="https://images.unsplash.com/photo-1569959220744-ff553533f492?q=80&w=900&auto=format&fit=crop" alt="University of Bologna" class="absolute inset-0 h-full w-full object-cover">
        <div class="img-zoom-overlay absolute inset-0"></div>
        <div class="relative h-full flex items-end p-4">
          <p class="font-display text-base font-semibold text-white">University<br>of Bologna</p>
        </div>
      </div>

      <div class="reveal-up img-zoom-wrap group relative rounded-2xl h-44 card-hover">
        <img src="https://images.unsplash.com/photo-1704151101872-6888b508cf7c?q=80&w=900&auto=format&fit=crop" alt="Politecnico di Milano" class="absolute inset-0 h-full w-full object-cover">
        <div class="img-zoom-overlay absolute inset-0"></div>
        <div class="relative h-full flex items-end p-4">
          <p class="font-display text-base font-semibold text-white">Politecnico<br>di Milano</p>
        </div>
      </div>

      <div class="reveal-up img-zoom-wrap group relative rounded-2xl h-44 card-hover">
        <img src="https://images.unsplash.com/photo-1523906834658-6e24ef2386f9?q=80&w=900&auto=format&fit=crop" alt="University of Turin" class="absolute inset-0 h-full w-full object-cover">
        <div class="img-zoom-overlay absolute inset-0"></div>
        <div class="relative h-full flex items-end p-4">
          <p class="font-display text-base font-semibold text-white">University<br>of Turin</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTION: Visa Process — Detailed Steps
     ========================================================================== -->
<section class="relative py-24 lg:py-28">
  <div class="max-w-7xl mx-auto px-6 lg:px-10">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal-up">
      <span class="text-xs font-semibold uppercase tracking-[0.3em] text-amber-500">Visa Process</span>
      <h2 class="font-display text-3xl lg:text-5xl font-semibold text-white mt-4">Your Study Visa, Step by Step</h2>
      <p class="text-slate-400 mt-4">A transparent, no-surprises walkthrough of the National (D) Visa application.</p>
    </div>

    <div class="space-y-4 reveal-stagger">
      <div class="reveal-up glass rounded-2xl overflow-hidden">
        <button data-accordion-trigger class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
          <div class="flex items-center gap-4">
            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-amber-500/10 border border-amber-500/30 text-xs font-bold text-amber-500">01</span>
            <span class="font-display text-base font-semibold text-white">University Pre-Enrollment (Preiscrizione)</span>
          </div>
          <span data-accordion-icon class="text-amber-500 text-xl leading-none transition-transform">+</span>
        </button>
        <div class="px-6 overflow-hidden transition-all duration-300" style="max-height:0px">
          <p class="pb-6 text-sm text-slate-400 leading-relaxed">Submit legalized academic documents and Declaration of Value (or CIMEA statement) to the Italian consulate for pre-enrollment approval.</p>
        </div>
      </div>

      <div class="reveal-up glass rounded-2xl overflow-hidden">
        <button data-accordion-trigger class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
          <div class="flex items-center gap-4">
            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-amber-500/10 border border-amber-500/30 text-xs font-bold text-amber-500">02</span>
            <span class="font-display text-base font-semibold text-white">University Admission Confirmation</span>
          </div>
          <span data-accordion-icon class="text-amber-500 text-xl leading-none transition-transform">+</span>
        </button>
        <div class="px-6 overflow-hidden transition-all duration-300" style="max-height:0px">
          <p class="pb-6 text-sm text-slate-400 leading-relaxed">Receive your official acceptance letter (Lettera di Immatricolazione) confirming your seat in the chosen program.</p>
        </div>
      </div>

      <div class="reveal-up glass rounded-2xl overflow-hidden">
        <button data-accordion-trigger class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
          <div class="flex items-center gap-4">
            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-500/10 border border-emerald-500/30 text-xs font-bold text-emerald-500">03</span>
            <span class="font-display text-base font-semibold text-white">Visa Application Submission</span>
          </div>
          <span data-accordion-icon class="text-amber-500 text-xl leading-none transition-transform">+</span>
        </button>
        <div class="px-6 overflow-hidden transition-all duration-300" style="max-height:0px">
          <p class="pb-6 text-sm text-slate-400 leading-relaxed">Book an appointment at VFS Global, submit your D-visa file including proof of funds, admission letter, and accommodation proof.</p>
        </div>
      </div>

      <div class="reveal-up glass rounded-2xl overflow-hidden">
        <button data-accordion-trigger class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
          <div class="flex items-center gap-4">
            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-500/10 border border-emerald-500/30 text-xs font-bold text-emerald-500">04</span>
            <span class="font-display text-base font-semibold text-white">Consulate Interview &amp; Approval</span>
          </div>
          <span data-accordion-icon class="text-amber-500 text-xl leading-none transition-transform">+</span>
        </button>
        <div class="px-6 overflow-hidden transition-all duration-300" style="max-height:0px">
          <p class="pb-6 text-sm text-slate-400 leading-relaxed">Attend your visa interview fully prepared — we conduct mock interviews with every student prior to their appointment.</p>
        </div>
      </div>

      <div class="reveal-up glass rounded-2xl overflow-hidden">
        <button data-accordion-trigger class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left">
          <div class="flex items-center gap-4">
            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-500/10 border border-emerald-500/30 text-xs font-bold text-emerald-500">05</span>
            <span class="font-display text-base font-semibold text-white">Arrival &amp; Permesso di Soggiorno</span>
          </div>
          <span data-accordion-icon class="text-amber-500 text-xl leading-none transition-transform">+</span>
        </button>
        <div class="px-6 overflow-hidden transition-all duration-300" style="max-height:0px">
          <p class="pb-6 text-sm text-slate-400 leading-relaxed">Land in Italy and apply for your residence permit within 8 working days — we guide you through the post office kit and Questura appointment.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTION: CTA Band
     ========================================================================== -->
<section class="relative py-20 bg-[#0A0F1A] border-t border-white/5">
  <div class="max-w-5xl mx-auto px-6 lg:px-10 text-center reveal-up">
    <h2 class="font-display text-3xl lg:text-4xl font-semibold text-white">Have Questions About Your Specific Case?</h2>
    <p class="text-slate-400 mt-4 max-w-xl mx-auto">Every academic profile is different. Talk to our advisors directly for a tailored roadmap.</p>
    <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
      <a href="contact.php" class="btn-luxury btn-shine arrow-nudge inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-amber-600 to-amber-500 px-8 py-4 text-sm font-semibold text-white w-full sm:w-auto">Check Eligibility</a>
      <a href="https://wa.me/393508836325" target="_blank" rel="noopener" class="btn-luxury btn-glow-emerald inline-flex items-center justify-center gap-2 rounded-full glass px-8 py-4 text-sm font-semibold text-white w-full sm:w-auto">WhatsApp an Advisor</a>
    </div>
  </div>
</section>

</main>

<!-- ==========================================================================
     COMPONENT: Global Footer
     ========================================================================== -->
<?php include __DIR__ . '/includes/global-footer.php'; ?>

<!-- ==========================================================================
     COMPONENT: Floating WhatsApp CTA
     ========================================================================== -->
<?php include __DIR__ . '/includes/floating-whatsapp.php'; ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/sliders.js"></script>
<script src="assets/js/form-handler.js"></script>
</body>
</html>
