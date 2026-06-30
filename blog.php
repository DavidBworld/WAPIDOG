<?php require_once 'includes/header.php'; ?>

<!-- HERO BLOG -->
<section class="section contact-page-hero" style="background:var(--nuit); color:var(--creme); text-align:center;">
  <div class="container">
    <h1 style="font-size: 48px; margin-bottom: 16px; color:var(--blanc);">Blog</h1>
    <p style="font-size: 18px; color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto;">
      Conseils, éducation et vie avec les Huskies
    </p>
  </div>
</section>

<!-- GRILLE D'ARTICLES -->
<section class="section">
  <div class="container">
    <div class="blog-grid">
      
      <!-- Carte 1 -->
      <a href="blog-elevage.php" class="blog-card" style="text-decoration: none;">
        <img src="images/blog-elevage.jpg" alt="Élevage Husky" class="blog-card-image">
        <div class="blog-card-body">
          <div class="blog-card-category">ÉLEVAGE</div>
          <h3 class="blog-card-title">Comment choisir son chiot Husky sibérien : les 5 critères d'un élevage sérieux</h3>
          <p class="blog-card-excerpt">Le Husky sibérien est une race magnifique, mais exigeante. Avant de craquer pour un chiot aux yeux bleus, il y a des questions essentielles à poser à l'éleveur.</p>
          <div class="blog-card-link">En savoir +</div>
        </div>
      </a>

      <!-- Carte 2 -->
      <a href="blog-education.php" class="blog-card" style="text-decoration: none;">
        <img src="images/blog-education.jpg" alt="Éducation canine" class="blog-card-image">
        <div class="blog-card-body">
          <div class="blog-card-category">ÉDUCATION</div>
          <h3 class="blog-card-title">Pourquoi mon chien tire en laisse — et comment y remédier sans le brusquer</h3>
          <p class="blog-card-excerpt">C'est l'une des plaintes les plus courantes des propriétaires de chiens. Mais avant de chercher une solution, il faut comprendre pourquoi le chien tire.</p>
          <div class="blog-card-link">En savoir +</div>
        </div>
      </a>

      <!-- Carte 3 -->
      <a href="blog-mushing.php" class="blog-card" style="text-decoration: none;">
        <img src="images/blog-mushing.jpg" alt="Mushing" class="blog-card-image">
        <div class="blog-card-body">
          <div class="blog-card-category">MUSHING</div>
          <h3 class="blog-card-title">Le mushing, une activité physique adaptée au Husky toute l'année — pas seulement en hiver</h3>
          <p class="blog-card-excerpt">Quand on parle de mushing, la plupart des gens imaginent un traîneau sur la neige. C'est une image belle, mais réductrice.</p>
          <div class="blog-card-link">En savoir +</div>
        </div>
      </a>

    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
