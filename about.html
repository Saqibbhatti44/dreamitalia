<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us | Dream Italia UniPathways</title>
<meta name="description" content="Learn about Dream Italia UniPathways' mission to make tuition-free Italian education accessible to Pakistani students, and how we compare to traditional agencies.">

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
    <img src="https://images.unsplash.com/photo-1534445867742-43195f401b6c?q=80&w=2400&auto=format&fit=crop" alt="Italian city skyline" class="absolute inset-x-0 top-[-15%] w-full h-[130%] object-cover" data-parallax="0.15">
    <div class="absolute inset-0 hero-gradient-overlay"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-10">
    <span class="hero-eyebrow inline-flex items-center gap-2 rounded-full border border-amber-500/30 bg-amber-500/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.2em] text-amber-500 mb-6">About Us</span>
    <h1 class="hero-headline font-display text-4xl sm:text-5xl lg:text-6xl font-semibold leading-tight text-white max-w-3xl">Built by People Who Believe <span class="text-gradient-italia">Education Should Be Earned, Not Bought</span></h1>
    <p class="hero-subheadline mt-6 text-lg text-slate-300 max-w-2xl leading-relaxed">Dream Italia UniPathways exists to make Italy's tuition-free, world-class universities genuinely accessible to Pakistani students — with honesty at every step.</p>
  </div>
</section>

<!-- ==========================================================================
     SECTION: Mission Statement
     ========================================================================== -->
<section class="relative py-24 lg:py-28">
  <div class="max-w-7xl mx-auto px-6 lg:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
      <div class="reveal-up order-2 lg:order-1">
        <div class="img-zoom-wrap relative rounded-3xl aspect-[4/5] shadow-2xl shadow-black/40">
          <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=1400&auto=format&fit=crop" alt="Students collaborating" class="w-full h-full object-cover">
          <div class="img-zoom-overlay absolute inset-0"></div>
          <div class="absolute bottom-6 left-6 right-6 glass-strong rounded-2xl px-5 py-4 flex items-center gap-4">
            <div class="flex -space-x-3">
              <div class="h-9 w-9 rounded-full bg-gradient-to-br from-emerald-600 to-amber-600 border-2 border-[#080C14]"></div>
              <div class="h-9 w-9 rounded-full bg-gradient-to-br from-amber-600 to-red-600 border-2 border-[#080C14]"></div>
              <div class="h-9 w-9 rounded-full bg-gradient-to-br from-red-600 to-emerald-600 border-2 border-[#080C14]"></div>
            </div>
            <p class="text-xs text-slate-300 leading-snug">Joined by <span class="text-white font-semibold">1,200+</span> students already on their way to Italy</p>
          </div>
        </div>
      </div>
      <div class="reveal-up order-1 lg:order-2">
        <span class="text-xs font-semibold uppercase tracking-[0.3em] text-amber-500">Our Mission</span>
        <h2 class="font-display text-3xl lg:text-4xl font-semibold text-white mt-4 leading-tight">Removing the Barriers Between Pakistani Talent and Italian Universities</h2>
        <p class="text-slate-400 mt-6 leading-relaxed">Every year, thousands of talented Pakistani students are priced out of quality higher education — not because they lack merit, but because they lack guidance. We built Dream Italia UniPathways to close that gap.</p>
        <p class="text-slate-400 mt-4 leading-relaxed">Our mission is simple: connect ambitious students with Italy's fully-funded public university system, and walk beside them through admissions, scholarships, and visas until they land safely on Italian soil.</p>

        <div class="mt-8 grid grid-cols-2 gap-6">
          <div>
            <p class="font-display text-3xl font-bold text-white">2019</p>
            <p class="text-xs text-slate-500 uppercase tracking-wide mt-1">Founded</p>
          </div>
          <div>
            <p class="font-display text-3xl font-bold text-white">1,200+</p>
            <p class="text-xs text-slate-500 uppercase tracking-wide mt-1">Students Placed</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTION: Company Background / Values
     ========================================================================== -->
<section class="relative py-24 lg:py-28 bg-[#0A0F1A] border-y border-white/5">
  <div class="max-w-7xl mx-auto px-6 lg:px-10">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal-up">
      <span class="text-xs font-semibold uppercase tracking-[0.3em] text-amber-500">Our Story</span>
      <h2 class="font-display text-3xl lg:text-5xl font-semibold text-white mt-4">Where We Come From</h2>
      <p class="text-slate-400 mt-4">Founded by former international students who lived the exact journey they now guide others through.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 reveal-stagger">
      <div class="reveal-up glass rounded-3xl p-8 card-hover spotlight-card tilt-card">
        <div class="icon-pop flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-500/10 border border-emerald-500/20 mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        </div>
        <h3 class="font-display text-lg font-semibold text-white mb-3">Integrity First</h3>
        <p class="text-sm text-slate-400 leading-relaxed">We never promise what we can't deliver. Every eligibility assessment is honest, even when the answer is "not yet."</p>
      </div>
      <div class="reveal-up glass rounded-3xl p-8 card-hover spotlight-card tilt-card">
        <div class="icon-pop flex h-14 w-14 items-center justify-center rounded-2xl bg-amber-500/10 border border-amber-500/20 mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
        </div>
        <h3 class="font-display text-lg font-semibold text-white mb-3">Speed &amp; Precision</h3>
        <p class="text-sm text-slate-400 leading-relaxed">Scholarship and visa deadlines don't wait. Our processes are built for accuracy under tight timelines.</p>
      </div>
      <div class="reveal-up glass rounded-3xl p-8 card-hover spotlight-card tilt-card">
        <div class="icon-pop flex h-14 w-14 items-center justify-center rounded-2xl bg-red-500/10 border border-red-500/20 mb-6">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6-8.13a4 4 0 110 8 4 4 0 010-8zm6 3a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
        </div>
        <h3 class="font-display text-lg font-semibold text-white mb-3">Student-Centric</h3>
        <p class="text-sm text-slate-400 leading-relaxed">Every recommendation is built around your goals and budget — never a university's commission structure.</p>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTION: Comparison Matrix — Dream Italia vs Traditional Agencies
     ========================================================================== -->
<section class="relative py-24 lg:py-28">
  <div class="max-w-6xl mx-auto px-6 lg:px-10">
    <div class="text-center max-w-2xl mx-auto mb-16 reveal-up">
      <span class="text-xs font-semibold uppercase tracking-[0.3em] text-amber-500">The Difference</span>
      <h2 class="font-display text-3xl lg:text-5xl font-semibold text-white mt-4">Dream Italia vs. Traditional Agencies</h2>
      <p class="text-slate-400 mt-4">See exactly why families trust us over generic consultancies.</p>
    </div>

    <div class="reveal-up glass-strong rounded-3xl overflow-hidden">
      <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse min-w-[640px]">
          <thead>
            <tr class="border-b border-white/10">
              <th class="px-6 py-5 text-sm font-semibold text-slate-300 uppercase tracking-wide">Criteria</th>
              <th class="px-6 py-5 text-sm font-semibold text-white uppercase tracking-wide bg-emerald-600/10">
                <span class="inline-flex items-center gap-2">
                  <span class="h-2 w-2 rounded-full bg-emerald-500"></span> Dream Italia UniPathways
                </span>
              </th>
              <th class="px-6 py-5 text-sm font-semibold text-slate-400 uppercase tracking-wide">Traditional Agencies</th>
            </tr>
          </thead>
          <tbody class="text-sm">
            <tr class="border-b border-white/5">
              <td class="px-6 py-5 text-slate-300 font-medium">Scholarship Focus</td>
              <td class="px-6 py-5 bg-emerald-600/5"><span class="text-emerald-400">✓</span> Fully-funded DSU/EDISU specialists</td>
              <td class="px-6 py-5 text-slate-500">Often generic, low priority</td>
            </tr>
            <tr class="border-b border-white/5">
              <td class="px-6 py-5 text-slate-300 font-medium">Pricing Transparency</td>
              <td class="px-6 py-5 bg-emerald-600/5"><span class="text-emerald-400">✓</span> Fixed, published fee structure</td>
              <td class="px-6 py-5 text-slate-500">Hidden charges common</td>
            </tr>
            <tr class="border-b border-white/5">
              <td class="px-6 py-5 text-slate-300 font-medium">Visa Interview Prep</td>
              <td class="px-6 py-5 bg-emerald-600/5"><span class="text-emerald-400">✓</span> Mandatory mock interviews</td>
              <td class="px-6 py-5 text-slate-500">Rarely offered</td>
            </tr>
            <tr class="border-b border-white/5">
              <td class="px-6 py-5 text-slate-300 font-medium">Response Time</td>
              <td class="px-6 py-5 bg-emerald-600/5"><span class="text-emerald-400">✓</span> Same-day WhatsApp support</td>
              <td class="px-6 py-5 text-slate-500">Days to respond</td>
            </tr>
            <tr class="border-b border-white/5">
              <td class="px-6 py-5 text-slate-300 font-medium">Post-Landing Support</td>
              <td class="px-6 py-5 bg-emerald-600/5"><span class="text-emerald-400">✓</span> Residence permit &amp; settling-in help</td>
              <td class="px-6 py-5 text-slate-500">Support ends at visa stamp</td>
            </tr>
            <tr>
              <td class="px-6 py-5 text-slate-300 font-medium">Price Guarantee</td>
              <td class="px-6 py-5 bg-emerald-600/5"><span class="text-emerald-400">✓</span> Locked-in pricing, no surprises</td>
              <td class="px-6 py-5 text-slate-500">Prices increase mid-process</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECTION: CTA Band
     ========================================================================== -->
<section class="relative py-20 bg-[#0A0F1A] border-t border-white/5">
  <div class="max-w-5xl mx-auto px-6 lg:px-10 text-center reveal-up">
    <h2 class="font-display text-3xl lg:text-4xl font-semibold text-white">Let's Build Your Italian Future Together</h2>
    <p class="text-slate-400 mt-4 max-w-xl mx-auto">Join over 1,200 students who trusted us with their journey to Italy.</p>
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
<script src="assets/js/main.js"></script>
<script src="assets/js/form-handler.js"></script>
</body>
</html>
