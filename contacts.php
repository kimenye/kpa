<?php
  $menu = 'contacts';
  $title = 'Kenya Paediatric Association - Contact Us';
  include '_header.php';
?>


<div class="ui page grid main">
  <div class="six wide column">
    <h2>Contact Information</h2>
    <h4>THE OFFICE</h4>
    <address>
      <b>Address: </b>KMA Center, 3rd Floor - Office Suite 301<br />
      Upper Hill, Mara Road<br />
      P.O.Box 45821-00100 GPO, Nairobi Kenya<br />

      <b>Phone: </b> + 254 020 2725309 / 2726298<br />
      <b>Fax: </b> + 254 020 2726299<br />
      <b>Mobile: </b> + 254 726 161590
    </address>

    <h4>BUSINESS HOURS</h4>
    <address>
      <b>Monday-Friday: </b>9am to 5pm<br />
      <b>Saturday: </b>9am to 2pm<br />
      <b>Sunday: </b>Closed<br />
      <b>Public Holidays: </b>Closed<br />
    </address>

    <a class="map"><i class="icon large marker"></i> Locate us on the map</a>
  </div>

  <div class="ten wide column">
    <h2>Drop us a line</h2>

    <form class="contact_form ui form">
      <div class="field">
        <input type="text" name="name" placeholder="Your Name" />
      </div>
      <div class="field">
        <input type="email" name="email" placeholder="Enter your email" />
      </div>
      <div class="field">
        <input type="text" name="subject" placeholder="Subject" />
      </div>
      <div class="field">
        <textarea name="message" placeholder="Message"></textarea>
      </div>
      <div class="field">
        <input type="submit" class="ui button small" value="Send" />
      </div>
    </form>
  </div>
</div>

<?php include '_footer.php'; ?>