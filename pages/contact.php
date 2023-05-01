<?php include_once '../includes/header.php'; ?>

<section id="contact">
  <div class="left_column_contact">
    <div class="informations">
      <h2 class="title_contact">Crée votre projet</h2>
      <div class="infomations_contact">
        <div class="information">
          <div class="icon_contact">
            <i class="uil uil-user"></i>
          </div>
          <p class="text_info">julienjcbs@outlook.fr</p>
        </div>
        <div class="information">
          <div class="icon_contact">
            <i class="uil uil-user"></i>
          </div>
          <p class="text_info">julienjcbs@outlook.fr</p>
        </div>
        <div class="information">
          <div class="icon_contact">
            <i class="uil uil-user"></i>
          </div>
          <p class="text_info">julienjcbs@outlook.fr</p>
        </div>
      </div>
    </div>
  </div>
  <div class="right_column_contact">
    <div class="contact-us">
      <h2 class="title_contact">Faites le premier pas</h2>
      <form action="">
        <div class="inputs">
          <input placeholder="Name" type="text" required="">
          <input placeholder="Email" type="email" name="customerEmail">
          <input placeholder="Phone" type="tel" name="customerPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
        </div>
        <textarea placeholder="Message" name="customerMessage" cols="10" rows="10"></textarea>
        <div id="button">
          <button type="submit" class="btn_envoyer">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include_once '../includes/footer.php'; ?>
