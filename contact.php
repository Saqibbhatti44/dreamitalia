<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us | Dream Italia UniPathways</title>
<meta name="description" content="Get your free eligibility evaluation for Italian scholarships and study visas. Connect directly on WhatsApp with our advisors.">

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
<section class="relative pt-40 pb-20 lg:pt-48 lg:pb-24 overflow-hidden" data-parallax-wrap>
  <div class="absolute inset-0">
    <img src="https://images.unsplash.com/photo-1467269204594-9661b134dd2b?q=80&w=2400&auto=format&fit=crop" alt="Italian coastline" class="absolute inset-x-0 top-[-15%] w-full h-[130%] object-cover" data-parallax="0.15">
    <div class="absolute inset-0 hero-gradient-overlay"></div>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-10 text-center">
    <span class="hero-eyebrow inline-flex items-center gap-2 rounded-full border border-amber-500/30 bg-amber-500/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-[0.2em] text-amber-500 mb-6">Get Started</span>
    <h1 class="hero-headline font-display text-4xl sm:text-5xl lg:text-6xl font-semibold leading-tight text-white max-w-3xl mx-auto">Let's Evaluate Your <span class="text-gradient-italia">Eligibility</span></h1>
    <p class="hero-subheadline mt-6 text-lg text-slate-300 max-w-2xl mx-auto leading-relaxed">Complete the assessment below, or message us directly on WhatsApp — our advisors typically respond within the hour.</p>
  </div>
</section>

<!-- ==========================================================================
     SECTION: Full Assessment Form + Contact Details
     ========================================================================== -->
<section class="relative py-16 lg:py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-10">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-10">

      <!-- Full Dynamic Eligibility Form -->
      <div class="lg:col-span-3 reveal-up">
        <div class="glass-strong rounded-3xl p-8 lg:p-10">
          <div class="mb-8">
            <span class="inline-flex items-center gap-2 rounded-full bg-amber-500/10 border border-amber-500/30 px-3 py-1 text-xs font-semibold text-amber-500 mb-4">Full Eligibility Evaluation</span>
            <h2 class="font-display text-2xl lg:text-3xl font-semibold text-white">Tell Us About Yourself</h2>
            <p class="text-sm text-slate-400 mt-2">The more detail you provide, the more precise our assessment will be.</p>
          </div>

          <?php include __DIR__ . '/includes/lead-form.php'; ?>
        </div>
      </div>

      <!-- Direct Contact + Office Details -->
      <div class="lg:col-span-2 reveal-up space-y-6">

        <div class="glass rounded-3xl p-8">
          <div class="icon-pop flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-500/10 border border-emerald-500/20 mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-emerald-500" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12.004 2c-5.523 0-10 4.477-10 10 0 1.766.463 3.484 1.34 4.997L2 22l5.146-1.35A9.958 9.958 0 0012.004 22c5.523 0 10-4.477 10-10s-4.477-10-10-10zm0 18.15a8.13 8.13 0 01-4.146-1.14l-.297-.176-3.055.801.816-2.977-.194-.306a8.14 8.14 0 01-1.276-4.352c0-4.501 3.664-8.165 8.165-8.165s8.165 3.664 8.165 8.165-3.664 8.15-8.174 8.15z"/></svg>
          </div>
          <h3 class="font-display text-lg font-semibold text-white mb-2">Chat With Us Directly</h3>
          <p class="text-sm text-slate-400 leading-relaxed mb-5">Skip the form entirely — message an advisor right now on WhatsApp for an instant response.</p>
          <a href="https://wa.me/393508836325?text=Ciao!%20I'd%20like%20to%20know%20more%20about%20studying%20in%20Italy." target="_blank" rel="noopener" class="btn-luxury btn-glow-emerald inline-flex items-center justify-center gap-2 rounded-full bg-emerald-600 px-6 py-3 text-sm font-semibold text-white w-full">
            +39 350 883 6325
          </a>
        </div>

        <div class="glass rounded-3xl p-8">
          <h3 class="font-display text-lg font-semibold text-white mb-5">Our Offices</h3>
          <div class="space-y-5">
            <div class="flex items-start gap-4">
              <span class="flex h-10 w-10 items-center justify-center rounded-full bg-amber-500/10 border border-amber-500/20 shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
              </span>
              <div>
                <p class="text-sm font-semibold text-white">Milan, Italy</p>
                <p class="text-xs text-slate-400 mt-1">Via Roma 12, 20121 Milano MI</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <span class="flex h-10 w-10 items-center justify-center rounded-full bg-emerald-500/10 border border-emerald-500/20 shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
              </span>
              <div>
                <p class="text-sm font-semibold text-white">Lahore, Pakistan</p>
                <p class="text-xs text-slate-400 mt-1">Gulberg III, Lahore, Punjab</p>
              </div>
            </div>
          </div>
        </div>

        <div class="glass rounded-3xl p-8">
          <h3 class="font-display text-lg font-semibold text-white mb-4">Office Hours</h3>
          <div class="space-y-2 text-sm">
            <div class="flex items-center justify-between">
              <span class="text-slate-400">Monday – Friday</span>
              <span class="text-slate-200 font-medium">9:00 AM – 7:00 PM</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400">Saturday</span>
              <span class="text-slate-200 font-medium">10:00 AM – 4:00 PM</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-400">Sunday</span>
              <span class="text-slate-200 font-medium">WhatsApp only</span>
            </div>
          </div>
        </div>

      </div>
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
