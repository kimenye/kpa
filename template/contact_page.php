<?php
  /**
   * Template Name: Contact Page
   */

  theme_header('contact-us');
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
      <b>Monday-Thursday: </b>9am to 5pm<br />
      <b>Friday: </b>9am to 1pm<br />
      <b>Saturday-Sunday: </b>Closed<br />
      <b>Public Holidays: </b>Closed<br />
    </address>

    <a class="map" href="https://www.google.com/maps/place/KMA+Centre,+Mara+Rd,+Nairobi,+Kenya/@-1.2986251,36.8092123,17z/data=!3m1!4b1!4m2!3m1!1s0x182f10e926fe3c6d:0x48a3b4eb4716e69" target="_blank"><i class="icon large marker"></i> Locate us on the map</a>
  </div>

  <div class="ten wide column">
    <h2>Drop us a line</h2>

    <form class="contact_form ui form" action="http:///formspree.io/info@kenyapaediatric.org/">
      <div class="field">
        <input type="text" name="name" placeholder="Your Name" required />
      </div>
      <div class="field">
        <input type="email" name="email" placeholder="Enter your email" required />
      </div>
      <div class="inline fields">
        <div class="field">
          <div class="ui radio checkbox">
            <input required="true" type="radio" name="subject" value="information">
            <label>Information</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input required="true" type="radio" name="subject" value="membership">
            <label>Membership</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input required="true" type="radio" name="subject" value="conference" >
            <label>Conference Partnership</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input required="true" type="radio" name="subject" value="courses" >
            <label>Course Attendance</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input required="true" type="radio" name="subject" value="abstracts" >
            <label>Abstract / Article Submission</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input required="true" type="radio" name="subject" value="press" >
            <label>Press</label>
          </div>
        </div>
      </div>
      <div class="field">
        <textarea name="message" placeholder="Message" required></textarea>
      </div>
      <div class="field">
        <input type="submit" class="ui button small" value="Send" />
      </div>
    </form>
  </div>
</div>

<?php theme_footer('none'); ?>