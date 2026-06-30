document.querySelectorAll('.contact-option').forEach(opt => {
  opt.addEventListener('click', () => {
    // 1. Gérer l'état visuel de l'option
    const optionsContainer = opt.closest('.contact-options');
    optionsContainer.querySelectorAll('.contact-option').forEach(o => o.classList.remove('is-selected'));
    opt.classList.add('is-selected');
    
    // 2. Gérer l'affichage dynamique du formulaire de droite
    const type = opt.getAttribute('data-type');
    const section = opt.closest('.contact-grid') || opt.closest('.contact-section');
    const formCard = section.querySelector('.form-card');
    
    if (formCard) {
      // Masquer tous les formulaires
      formCard.querySelectorAll('.form-content').forEach(form => {
        form.style.display = 'none';
        form.classList.remove('active');
        form.querySelectorAll('input, select, textarea, button').forEach(el => el.disabled = true);
      });
      
      // Afficher le bon formulaire
      const targetForm = formCard.querySelector('#form-' + type);
      if (targetForm) {
        targetForm.style.display = 'block';
        targetForm.classList.add('active');
        targetForm.querySelectorAll('input, select, textarea, button').forEach(el => el.disabled = false);
      }

      // 3. Mettre à jour le champ caché type_demande (seulement pour chiot/bilan)
      const hiddenInput = formCard.querySelector('.type_demande_input');
      if (hiddenInput) {
        hiddenInput.value = type;
      }
    }
  });
});

// --- INITIALISATION DU FORMULAIRE ---
document.querySelectorAll('.form-card .form-content').forEach(form => {
  if (!form.classList.contains('active')) {
    form.querySelectorAll('input, select, textarea, button').forEach(el => el.disabled = true);
  }
});

// --- GESTION DU MENU BURGER ---
const mobileNavIcon = document.querySelector('.mobile-nav-icon');
const mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
const closeBtn = document.querySelector('.mobile-menu-overlay .close-btn');

if (mobileNavIcon && mobileMenuOverlay) {
  mobileNavIcon.addEventListener('click', () => {
    mobileMenuOverlay.classList.add('open');
  });
}

if (closeBtn && mobileMenuOverlay) {
  closeBtn.addEventListener('click', () => {
    mobileMenuOverlay.classList.remove('open');
  });
}

// --- GESTION DU HEADER STICKY ---
window.addEventListener('scroll', () => {
  const headers = document.querySelectorAll('.site-header');
  headers.forEach(header => {
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
});

// --- ANIMATIONS FADE-IN AU SCROLL ---
(function() {
  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -50px 0px', // Déclenche un peu avant le bas de l'écran
    threshold: 0.05 // Seuil bas pour s'assurer que même les très grandes cartes déclenchent
  };

  let delay = 0;
  let delayTimeout = null;

  const fadeObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.transitionDelay = `${delay}ms`;
        entry.target.classList.add('is-visible');
        
        delay += 150;
        
        clearTimeout(delayTimeout);
        delayTimeout = setTimeout(() => {
          delay = 0;
        }, 100);

        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.fade-in').forEach(el => {
    fadeObserver.observe(el);
  });
})();

// --- GESTION AJAX DU FORMULAIRE DE CONTACT ---
const contactForm = document.getElementById('contact-form');
if (contactForm) {
  contactForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const msgContainer = document.getElementById('form-ajax-message');
    const activeFormContent = contactForm.querySelector('.form-content.active');
    const submitBtn = activeFormContent ? activeFormContent.querySelector('.btn-submit') : contactForm.querySelector('.btn-submit');
    const originalBtnText = submitBtn ? submitBtn.innerText : 'Envoyer ma demande';
    
    // UI Loading state
    if (msgContainer) msgContainer.style.display = 'none';
    if (submitBtn) {
      submitBtn.innerText = 'Envoi en cours...';
      submitBtn.disabled = true;
    }
    
    const formData = new FormData(contactForm);
    
    fetch('submit_contact.php', {
      method: 'POST',
      body: formData,
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      }
    })
    .then(response => response.json())
    .then(data => {
      if (msgContainer) {
        msgContainer.style.display = 'block';
        msgContainer.className = data.status === 'success' ? 'msg-success' : 'msg-error';
        msgContainer.innerText = data.message;
      }
      
      if (data.status === 'success') {
        contactForm.reset();
        // Réinitialiser correctement l'état disabled des blocs inactifs
        document.querySelectorAll('.form-card .form-content').forEach(form => {
          if (!form.classList.contains('active')) {
            form.querySelectorAll('input, select, textarea, button').forEach(el => el.disabled = true);
          }
        });
      }
    })
    .catch(error => {
      console.error("Erreur Fetch:", error);
      if (msgContainer) {
        msgContainer.style.display = 'block';
        msgContainer.className = 'msg-error';
        msgContainer.innerText = 'Une erreur réseau est survenue. Veuillez vérifier votre connexion.';
      }
    })
    .finally(() => {
      if (submitBtn) {
        submitBtn.innerText = originalBtnText;
        submitBtn.disabled = false;
      }
    });
  });
}