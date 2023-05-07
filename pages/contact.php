<?php include_once __DIR__ . '/../includes/header.php'; ?>

<section id="contact">
  <div class="left_column_contact">
    <div class="informations">
      <h2 class="title_contact">Crée votre projet</h2>
      <div class="infomations_contact">
        <a href="mailto:julienjcbs@outlook.fr">
          <div class="information">
            <div class="icon_contact">
              <i class="uil uil-envelope-check"></i>
            </div>
            <p class="text_info">julienjcbs@outlook.fr</p>
          </div>
        </a>
        <a href="tel:+32493350438">
          <div class="information">
            <div class="icon_contact">
              <i class="uil uil-phone-alt"></i>
            </div>
            <p class="text_info">(+32)493 35 04 38</p>
          </div>
        </a>
        <a href="https://www.linkedin.com/in/julien-jacobs-b4970b174/">
          <div class="information">
            <div class="icon_contact">
              <i class="uil uil-linkedin-alt"></i>
            </div>
            <p class="text_info">@julienjcbs</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="right_column_contact">
    <div class="contact-us">
      <h2 class="title_contact">Faites le premier pas</h2>
      <form action="/../function/form.php" class="form_contact">
        <div class="inputs">
          <input placeholder="Name" type="text" required="">
          <input placeholder="Email" type="email" name="customerEmail">
          <input placeholder="Phone" type="tel" name="customerPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
        </div>
        <textarea placeholder="Message" name="customerMessage" cols="10" rows="10"></textarea>
        <div id="button">
          <div class="g-recaptcha" data-sitekey="6Le8euUlAAAAAM2rtzDXU2W8vNJ5y5xJo7UlqdNF"></div>
          <button type="submit" class="fill">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
</section>

<script>
    $('.form_contact').submit(function(event) {
        event.preventDefault();
        let email = $('#email').val();
 
        grecaptcha.ready(function() {
            grecaptcha.execute('6Le8euUlAAAAAM2rtzDXU2W8vNJ5y5xJo7UlqdNF', {action: 'sendmail'}).then(function(token) {
                $('.form_contact').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('.form_contact').prepend('<input type="hidden" name="action" value="sendmail">');
                $('.form_contact').unbind('submit').submit();
            });;
        });
  });
</script>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>
