<?php require_once 'includes/header.php'; ?>

<!-- HERO CONTACT -->
<section class="section contact-page-hero" style="background:var(--nuit); color:var(--creme); text-align:center;">
  <div class="container">
    <h1 style="font-size: 48px; margin-bottom: 16px; color:var(--blanc);">Contactez-nous</h1>
    <p style="font-size: 18px; color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto;">
      Une question sur nos huskies, un besoin d'éducation ou une envie de mushing ? Nous sommes là pour vous répondre.
    </p>
  </div>
</section>

<!-- INFOS PRATIQUES & CARTE -->
<section class="section infos-section" style="padding: 80px 0;">
  <div class="container">
    <div class="infos-grid">
      <div class="infos-text">
        <h2 style="margin-bottom: 32px; color: var(--nuit);">Horaires et localisation</h2>
        <div class="info-block">
          <h4>Adresse</h4>
          <p>1 rue Basse<br>51800 Le Chemin</p>
        </div>
        <div class="info-block">
          <h4>Horaires d'ouverture</h4>
          <p>Ouvert tous les jours (du lundi au dimanche)<br>De 14h00 à 18h00</p>
          <p class="note">Uniquement sur rendez-vous.</p>
        </div>
        <div class="info-block">
          <h4>Contact direct</h4>
          <p><a href="tel:+33749279669" class="contact-link">+33 7 49 27 96 69</a></p>
          <p><a href="mailto:contact@wapidogs-family.fr" class="contact-link">contact@wapidogs-family.fr</a></p>
        </div>
      </div>
      <div class="infos-map">
        <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=4.92,48.94,4.98,48.98&amp;layer=mapnik&amp;marker=48.96,4.95" style="border-radius: var(--radius); box-shadow: 0 4px 20px rgba(0,0,0,0.06);"></iframe>
        <small class="map-link"><a href="https://www.openstreetmap.org/?mlat=48.96&amp;mlon=4.95#map=15/48.96/4.95" target="_blank">Voir la carte en grand</a></small>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section faq-section" style="padding: 40px 0 80px 0;">
  <div class="container" style="max-width: 800px; margin: 0 auto;">
    <h2 style="text-align: center; margin-bottom: 40px;">Questions fréquentes</h2>
    <div class="faq-list">
      <details class="faq-item">
        <summary>Quels sont vos délais de réponse ?</summary>
        <div class="faq-content">
          <p>Nous nous efforçons de répondre à toutes vos demandes sous 48 heures. Lors de nos déplacements en compétition (Crufts, etc.), ce délai peut être exceptionnellement allongé.</p>
        </div>
      </details>
      <details class="faq-item">
        <summary>Comment se passe l'adoption d'un chiot ?</summary>
        <div class="faq-content">
          <p>Après un premier contact via le formulaire, nous organisons un échange téléphonique puis une visite à l'élevage. Cela nous permet de faire connaissance, de vous présenter la meute et de valider que le Husky correspond à votre mode de vie.</p>
        </div>
      </details>
      <details class="faq-item">
        <summary>Où se déroulent les bilans comportementaux ?</summary>
        <div class="faq-content">
          <p>Les bilans s'effectuent à votre domicile ou sur notre terrain d'éducation au Chemin (51800), selon vos besoins et les problématiques rencontrées par le chien.</p>
        </div>
      </details>
      <details class="faq-item">
        <summary>Proposez-vous des sorties mushing pour les enfants/familles ?</summary>
        <div class="faq-content">
          <p>Cette activité (cani-rando, kart, traîneau) est actuellement en cours de structuration et nous ne prenons pas encore de réservations grand public. Suivez nos réseaux sociaux pour être tenu au courant de l'ouverture !</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- FORMULAIRE DE CONTACT (Inclus) -->
<?php include 'includes/contact_form.php'; ?>

<?php require_once 'includes/footer.php'; ?>
