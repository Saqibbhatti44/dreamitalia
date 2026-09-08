/* ==========================================================================
   Dream Italia UniPathways — Core Interactions
   Lenis smooth scroll, GSAP reveals, mobile menu, header state, counters
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------------------------------------------------------------------
     Page-load fade-in
     --------------------------------------------------------------------- */
  requestAnimationFrame(() => document.body.classList.add('page-ready'));

  /* ---------------------------------------------------------------------
     Scroll progress bar
     --------------------------------------------------------------------- */
  const progressBar = document.getElementById('scroll-progress');
  if (progressBar) {
    const updateProgress = () => {
      const scrollTop = window.scrollY;
      const docHeight = document.documentElement.scrollHeight - window.innerHeight;
      const pct = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
      progressBar.style.width = pct + '%';
    };
    window.addEventListener('scroll', updateProgress, { passive: true });
    updateProgress();
  }

  /* ---------------------------------------------------------------------
     Spotlight cursor-glow on cards (skipped for touch/reduced-motion —
     it's a hover-only enhancement with no functional impact if absent)
     --------------------------------------------------------------------- */
  if (!prefersReducedMotion && window.matchMedia('(hover: hover)').matches) {
    document.querySelectorAll('.spotlight-card').forEach((card) => {
      card.addEventListener('pointermove', (e) => {
        const rect = card.getBoundingClientRect();
        card.style.setProperty('--mx', (e.clientX - rect.left) + 'px');
        card.style.setProperty('--my', (e.clientY - rect.top) + 'px');
      });
    });

    /* ---------------------------------------------------------------------
       Subtle 3D tilt on cards flagged with .tilt-card
       --------------------------------------------------------------------- */
    document.querySelectorAll('.tilt-card').forEach((card) => {
      const maxTilt = 6;
      card.addEventListener('pointermove', (e) => {
        const rect = card.getBoundingClientRect();
        const px = (e.clientX - rect.left) / rect.width;
        const py = (e.clientY - rect.top) / rect.height;
        const ry = (px - 0.5) * maxTilt * 2;
        const rx = (0.5 - py) * maxTilt * 2;
        card.style.setProperty('--rx', rx.toFixed(2) + 'deg');
        card.style.setProperty('--ry', ry.toFixed(2) + 'deg');
      });
      card.addEventListener('pointerleave', () => {
        card.style.setProperty('--rx', '0deg');
        card.style.setProperty('--ry', '0deg');
      });
    });
  }

  /* ---------------------------------------------------------------------
     Lenis Smooth Scroll
     --------------------------------------------------------------------- */
  let lenis;
  if (window.Lenis) {
    lenis = new Lenis({
      duration: 1.15,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
      smoothWheel: true,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    if (window.gsap && window.ScrollTrigger) {
      lenis.on('scroll', ScrollTrigger.update);
      gsap.ticker.add((time) => lenis.raf(time * 1000));
      gsap.ticker.lagSmoothing(0);
    }
  }

  /* ---------------------------------------------------------------------
     GSAP registration
     --------------------------------------------------------------------- */
  if (window.gsap && window.ScrollTrigger) {
    gsap.registerPlugin(ScrollTrigger);
  }

  /* ---------------------------------------------------------------------
     Sticky header state
     --------------------------------------------------------------------- */
  const header = document.getElementById('global-header');
  const onScrollHeader = () => {
    if (!header) return;
    if (window.scrollY > 40) header.classList.add('scrolled');
    else header.classList.remove('scrolled');
  };
  window.addEventListener('scroll', onScrollHeader);
  onScrollHeader();

  /* ---------------------------------------------------------------------
     Mobile menu toggle
     --------------------------------------------------------------------- */
  const menuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIconOpen = document.getElementById('icon-menu-open');
  const menuIconClose = document.getElementById('icon-menu-close');

  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', () => {
      const isOpen = mobileMenu.classList.contains('flex');
      if (isOpen) {
        mobileMenu.classList.remove('flex');
        mobileMenu.classList.add('hidden');
        menuIconOpen && menuIconOpen.classList.remove('hidden');
        menuIconClose && menuIconClose.classList.add('hidden');
      } else {
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('flex');
        menuIconOpen && menuIconOpen.classList.add('hidden');
        menuIconClose && menuIconClose.classList.remove('hidden');
      }
    });

    mobileMenu.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('flex');
        mobileMenu.classList.add('hidden');
        menuIconOpen && menuIconOpen.classList.remove('hidden');
        menuIconClose && menuIconClose.classList.add('hidden');
      });
    });
  }

  /* ---------------------------------------------------------------------
     GSAP scroll reveals (skipped entirely when reduced motion is requested;
     content stays visible by default since .reveal-init is never applied)
     --------------------------------------------------------------------- */
  if (window.gsap && !prefersReducedMotion) {
    gsap.utils.toArray('.reveal-up').forEach((el) => {
      el.classList.add('reveal-init');
      gsap.to(el, {
        opacity: 1,
        y: 0,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
          trigger: el,
          start: 'top 88%',
          once: true,
        },
      });
    });

    gsap.utils.toArray('.reveal-stagger').forEach((group) => {
      const children = group.children;
      gsap.to(children, {
        opacity: 1,
        y: 0,
        duration: 0.9,
        ease: 'power3.out',
        stagger: 0.12,
        scrollTrigger: {
          trigger: group,
          start: 'top 85%',
          once: true,
        },
      });
    });

    /* Hero entrance */
    const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });
    if (document.querySelector('.hero-headline')) {
      heroTl
        .from('.hero-eyebrow', { opacity: 0, y: 16, duration: 0.7 })
        .from('.hero-headline', { opacity: 0, y: 32, duration: 1 }, '-=0.4')
        .from('.hero-subheadline', { opacity: 0, y: 24, duration: 0.9 }, '-=0.6')
        .from('.hero-cta', { opacity: 0, y: 20, duration: 0.8, stagger: 0.15 }, '-=0.5');
    }

    /* Trust counters */
    gsap.utils.toArray('[data-counter]').forEach((el) => {
      const target = parseFloat(el.getAttribute('data-counter'));
      const suffix = el.getAttribute('data-suffix') || '';
      const obj = { val: 0 };
      ScrollTrigger.create({
        trigger: el,
        start: 'top 90%',
        once: true,
        onEnter: () => {
          gsap.to(obj, {
            val: target,
            duration: 2,
            ease: 'power2.out',
            onUpdate: () => {
              const isDecimal = target % 1 !== 0;
              el.textContent = (isDecimal ? obj.val.toFixed(1) : Math.floor(obj.val)) + suffix;
            },
          });
        },
      });
    });

    /* Parallax hero image layers */
    gsap.utils.toArray('[data-parallax]').forEach((el) => {
      const speed = parseFloat(el.getAttribute('data-parallax')) || 0.3;
      gsap.to(el, {
        yPercent: speed * 100,
        ease: 'none',
        scrollTrigger: {
          trigger: el.closest('[data-parallax-wrap]') || el,
          start: 'top bottom',
          end: 'bottom top',
          scrub: true,
        },
      });
    });

    /* Roadmap step progress line */
    if (document.querySelector('#roadmap-line-fill')) {
      gsap.to('#roadmap-line-fill', {
        scaleY: 1,
        transformOrigin: 'top',
        ease: 'none',
        scrollTrigger: {
          trigger: '#roadmap',
          start: 'top 70%',
          end: 'bottom 60%',
          scrub: true,
        },
      });
    }
    if (document.querySelector('#roadmap-line-fill-h')) {
      gsap.to('#roadmap-line-fill-h', {
        scaleX: 1,
        transformOrigin: 'left',
        ease: 'none',
        scrollTrigger: {
          trigger: '#roadmap',
          start: 'top 60%',
          end: 'bottom 70%',
          scrub: true,
        },
      });
    }
  }

  /* ---------------------------------------------------------------------
     Reduced-motion fallback: set final counter values instantly since the
     GSAP count-up block above is skipped entirely in that mode
     --------------------------------------------------------------------- */
  if (prefersReducedMotion) {
    document.querySelectorAll('[data-counter]').forEach((el) => {
      const target = parseFloat(el.getAttribute('data-counter'));
      const suffix = el.getAttribute('data-suffix') || '';
      const isDecimal = target % 1 !== 0;
      el.textContent = (isDecimal ? target.toFixed(1) : target) + suffix;
    });
  }

  /* ---------------------------------------------------------------------
     Active nav link highlighting
     --------------------------------------------------------------------- */
  const currentPage = (window.location.pathname.split('/').pop() || 'index.html');
  document.querySelectorAll('[data-nav-link]').forEach((link) => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.html')) {
      link.classList.add('text-white');
      link.classList.remove('text-slate-300');
      link.setAttribute('aria-current', 'page');
    }
  });

  /* ---------------------------------------------------------------------
     Current year in footer
     --------------------------------------------------------------------- */
  document.querySelectorAll('[data-current-year]').forEach((el) => {
    el.textContent = new Date().getFullYear();
  });

  /* ---------------------------------------------------------------------
     FAQ / Accordion (used on services + about pages)
     --------------------------------------------------------------------- */
  document.querySelectorAll('[data-accordion-trigger]').forEach((trigger) => {
    trigger.addEventListener('click', () => {
      const panel = trigger.nextElementSibling;
      const icon = trigger.querySelector('[data-accordion-icon]');
      const isOpen = panel.style.maxHeight && panel.style.maxHeight !== '0px';

      document.querySelectorAll('[data-accordion-trigger]').forEach((t) => {
        if (t !== trigger) {
          t.nextElementSibling.style.maxHeight = '0px';
          const ic = t.querySelector('[data-accordion-icon]');
          if (ic) ic.style.transform = 'rotate(0deg)';
        }
      });

      if (isOpen) {
        panel.style.maxHeight = '0px';
        if (icon) icon.style.transform = 'rotate(0deg)';
      } else {
        panel.style.maxHeight = panel.scrollHeight + 'px';
        if (icon) icon.style.transform = 'rotate(45deg)';
      }
    });
  });

});
