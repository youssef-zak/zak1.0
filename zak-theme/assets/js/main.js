(function(){
  const root = document.documentElement;
  const stored = localStorage.getItem('zak-theme');
  if (stored) {
    root.setAttribute('data-theme', stored);
  }
})();

document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('[data-toggle="theme"]');
  if (toggle) {
    toggle.addEventListener('click', () => {
      const current = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
      document.documentElement.setAttribute('data-theme', current);
      localStorage.setItem('zak-theme', current);
    });
  }

  const header = document.querySelector('.site-header');
  const miniCart = document.querySelector('.mini-cart');
  window.addEventListener('scroll', () => {
    if (!header) return;
    header.classList.toggle('scrolled', window.scrollY > 10);
  });

  // Sticky add to cart reveal
  const stickyATC = document.querySelector('.sticky-atc');
  if (stickyATC) {
    const trigger = document.querySelector('.product-hero');
    window.addEventListener('scroll', () => {
      if (!trigger) return;
      const rect = trigger.getBoundingClientRect();
      stickyATC.classList.toggle('visible', rect.bottom < 0);
    });
  }

  // Quick view
  document.querySelectorAll('[data-quick-view]').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const modal = document.querySelector('#quick-view-modal');
      if (!modal) return;
      modal.querySelector('.qv-title').textContent = btn.dataset.title;
      modal.querySelector('.qv-price').textContent = btn.dataset.price;
      modal.querySelector('.qv-image').src = btn.dataset.image;
      modal.classList.add('open');
      document.body.classList.add('modal-open');
    });
  });

  const qvClose = document.querySelector('#quick-view-close');
  if (qvClose) {
    qvClose.addEventListener('click', () => {
      document.querySelector('#quick-view-modal').classList.remove('open');
      document.body.classList.remove('modal-open');
    });
  }

  // Mobile menu
  const mobileBtn = document.querySelector('.mobile-menu-btn');
  const offcanvas = document.querySelector('.offcanvas');
  if (mobileBtn && offcanvas) {
    mobileBtn.addEventListener('click', () => offcanvas.style.display = 'block');
    offcanvas.addEventListener('click', (e) => {
      if (e.target === offcanvas) offcanvas.style.display = 'none';
    });
  }

  // Simple parallax for hero grid
  document.querySelectorAll('[data-parallax]').forEach(el => {
    window.addEventListener('scroll', () => {
      const offset = window.scrollY * 0.04;
      el.style.transform = `translateY(${offset}px)`;
    });
  });

  // Filter drawer mobile
  const filterToggle = document.querySelector('[data-filter-toggle]');
  const filterDrawer = document.querySelector('[data-filter-drawer]');
  const filterClose = document.querySelector('[data-filter-close]');
  if (filterToggle && filterDrawer) {
    filterToggle.addEventListener('click', () => filterDrawer.classList.add('open'));
  }
  if (filterClose && filterDrawer) {
    filterClose.addEventListener('click', () => filterDrawer.classList.remove('open'));
  }
  if (filterDrawer) {
    filterDrawer.addEventListener('click', (e) => {
      if (e.target === filterDrawer) filterDrawer.classList.remove('open');
    });
  }
});
