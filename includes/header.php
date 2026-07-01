<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wapidogs Family — Élevage, Éducation, Mushing</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<script>document.documentElement.classList.add('js-enabled');</script>
</head>
<body class="<?php echo isset($headerSolid) && $headerSolid ? 'header-solid' : ''; ?>">

<header class="site-header">
  <div class="container">
    <div class="logo">
      <a href="index.php" style="display:inline-flex; align-items:center;">
        <img src="images/logo-wapidogs.png" alt="Wapidogs Family" style="height:138px;width:auto;">
      </a>
    </div>
    
    <nav class="nav-links">
      <a href="elevage.php">Élevage</a>
      <a href="education.php">Éducation canine</a>
      <a href="mushing.php">Mushing & forêt</a>
      <a href="blog.php">Blog</a>
      <a href="qui-sommes-nous.php">Qui sommes-nous</a>
      <a href="palmares.php">Le palmarès de Wapi</a>
    </nav>

    <a href="contact.php" class="cta-header">Nous contacter</a>

    <div class="mobile-nav-icon">☰</div>
  </div>
</header>

<div class="mobile-menu-overlay">
  <div class="close-btn">✕</div>
  <a href="elevage.php">Élevage</a>
  <a href="education.php">Éducation canine</a>
  <a href="mushing.php">Mushing & forêt</a>
  <a href="blog.php">Blog</a>
  <a href="qui-sommes-nous.php">Qui sommes-nous</a>
  <a href="palmares.php">Le palmarès de Wapi</a>
  <a href="contact.php" style="color:var(--ambre);">Nous contacter</a>
</div>
