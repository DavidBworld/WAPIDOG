<section class="section contact-section">
  <div class="container">
    <div class="contact-grid">
      <div>
        <div class="eyebrow"><span class="dot"></span>Une question, un projet ?</div>
        <h2>Dites-nous ce qui vous amène</h2>
        <p class="lead">Sélectionnez votre demande pour que le bon formulaire s'affiche — réponse sous 48h.</p>
        <div class="contact-options">
          <div class="contact-option is-selected" data-type="chiot">
            <div class="ic"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#e78808" stroke-width="1.6"><path d="M12 2C8 6 6 10 6 13a6 6 0 0012 0c0-3-2-7-6-11z"/></svg></div>
            <div><strong>Adopter un chiot</strong><span>Voir les portées et réserver</span></div>
          </div>
          <div class="contact-option" data-type="bilan">
            <div class="ic"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#e78808" stroke-width="1.6"><path d="M3 8l9-4 9 4-9 4-9-4z"/><path d="M7 11v4c0 1.5 2.2 3 5 3s5-1.5 5-3v-4"/></svg></div>
            <div><strong>Bilan comportemental</strong><span>Éducation, rééducation, conseils</span></div>
          </div>
          <div class="contact-option" data-type="mushing">
            <div class="ic"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#e78808" stroke-width="1.6"><path d="M2 19l3-3 14-1-3 4H2z"/><path d="M9 16l2-9 9 2-4 7"/></svg></div>
            <div><strong>Sortie mushing</strong><span>Cani-rando, kart, traîneau</span></div>
          </div>
        </div>
      </div>
      <form class="form-card" id="contact-form" action="submit_contact.php" method="POST">
        <div id="form-ajax-message" style="display:none;"></div>
        <input type="hidden" name="type_demande" class="type_demande_input" value="chiot">
        <div id="form-chiot" class="form-content active">
          <h3>Réserver un chiot</h3>
          <div class="field-row">
            <div class="field"><label>Prénom</label><input type="text" name="prenom" placeholder="Camille" required></div>
            <div class="field"><label>Nom</label><input type="text" name="nom" placeholder="Dupont" required></div>
          </div>
          <div class="field"><label>Email</label><input type="email" name="email" placeholder="camille@email.fr" required></div>
          <div class="field"><label>Téléphone</label><input type="tel" name="telephone" placeholder="06 12 34 56 78" required></div>
          <div class="field"><label>Avez-vous déjà eu un Husky ?</label><select name="question_specifique"><option value="Oui">Oui</option><option value="Non">Non, première fois</option></select></div>
          <div class="field"><label>Votre message</label><textarea name="message" rows="3" placeholder="Parlez-nous de votre projet d'adoption..." required></textarea></div>
          <button type="submit" class="btn-submit">Envoyer ma demande</button>
          <p class="rgpd-note">En soumettant ce formulaire, vous acceptez que vos données soient utilisées pour vous recontacter. Voir notre politique de confidentialité.</p>
        </div>

        <div id="form-bilan" class="form-content" style="display:none;">
          <h3>Réserver mon bilan comportemental</h3>
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

        <div id="form-mushing" class="form-content" style="display:none;">
          <h3>Bientôt disponible</h3>
          <p style="font-size:15px;line-height:1.6;color:var(--nuit-l);margin-bottom:24px;">Cette activité est encore en cours de structuration. Suivez nos sorties sur les réseaux sociaux ou contactez-nous directement pour plus d'informations.</p>
          <a href="#" class="btn-primary" style="display:inline-flex;">Découvrir la page mushing</a>
        </div>
      </form>
    </div>
  </div>
</section>
