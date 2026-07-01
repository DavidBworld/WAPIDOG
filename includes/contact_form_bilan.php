<form class="form-card" id="contact-form" action="submit_contact.php" method="POST">
  <div id="form-ajax-message" style="display:none;"></div>
  <input type="hidden" name="type_demande" value="bilan">
  <div id="form-bilan" class="form-content active">
    <div class="field-row">
      <div class="field"><label>Prénom</label><input type="text" name="prenom" placeholder="Camille" required></div>
      <div class="field"><label>Nom</label><input type="text" name="nom" placeholder="Dupont" required></div>
    </div>
    <div class="field"><label>Email</label><input type="email" name="email" placeholder="camille@email.fr" required></div>
    <div class="field"><label>Téléphone</label><input type="tel" name="telephone" placeholder="06 12 34 56 78" required></div>
    <div class="field"><label>Quel est le problème rencontré ?</label>
      <select name="question_specifique">
        <option value="Marche en laisse, rappel, obéissance">Marche en laisse, rappel, obéissance</option>
        <option value="Agressivité">Agressivité</option>
        <option value="Peurs, anxiété">Peurs, anxiété</option>
        <option value="Sociabilisation">Sociabilisation</option>
        <option value="Autre">Autre</option>
      </select>
    </div>
    <div class="field"><label>Votre message</label><textarea name="message" rows="3" placeholder="Parlez-nous du comportement de votre chien..." required></textarea></div>
    <button type="submit" class="btn-submit">Envoyer ma demande</button>
    <p class="rgpd-note">En soumettant ce formulaire, vous acceptez que vos données soient utilisées pour vous recontacter. Voir notre politique de confidentialité.</p>
  </div>
</form>
