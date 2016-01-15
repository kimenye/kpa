<?php
  $menu = 'home';
  $title = 'Kenya Paediatric Association - Afya ya watoto wetu';
  include '_header.php';
?>

<div class="ui page grid">
  <div class="hero owl-carousel" >
    <!-- <div><img src="images/scientific_conference.jpg" alt="Scientific Conference 2016" /></div> -->
    <div><a href="<?php echo get_stylesheet_directory_uri() ?>/images/abstracts.pdf" download><img src="<?php echo get_stylesheet_directory_uri() ?>/images/call_abstracts.png" alt="Abstracts" /></a></div>
    <div><a href="events.php"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/conference_banner.png" alt="Conference" /></a></div>
    <div><img src="<?php echo get_stylesheet_directory_uri() ?>/images/mom-and-baby.jpg" alt="Baby sleeping" /></div>
    <div><img src="<?php echo get_stylesheet_directory_uri() ?>/images/hero.png" /></div>
  </div>
</div>

<div class="ui page grid main">
  <div class="ten wide column welcome">
    <h2>Welcome to <em>Kenya Paediatric Association</em></h2>

    <div class="more ui grid">
      <div class="five wide column">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/bear.jpg" alt="Doctor" />
      </div>
      <div class="eleven wide column">
        <p>Welcome to the official website of the Kenya Paediatric Association (KPA). KPA, is a nonprofit, non-partisan body of paediatric 
        practitioners committed to professional excellence and timely, quality service delivery to the children we serve.</p>

        <p>KPA is an association whose principal members are paediatricians practicing in Kenya and are committed to the optimal social health and wellbeing of infants and children in Kenya. 
        <a href="about.php">Read More...</a>
        </p>
      </div> 
    </div>
  </div>
  <div class="six wide column events">
    <h3>Events</h3>
    <div class="event ui grid">
      <a class="calendar five wide column">
        <!-- <img src='images/calendar.jpg' alt='Calendar' /> -->
        <div class="date">
          <span class="binds"></span>
          <span class="month">April</span>
          <h1 class="day">26</h1>
        </div>
      </a>
      <div class="details eleven wide column">
        <h4 class="title">16th Annual Scientific Conference</h4>
        <h5 class="dt">26-29th April 2016</h5>
        <div class="location">Boma Inn - Eldoret</div>
      </div>
    </div>
    <div class="event ui grid">
      <a class="calendar five wide column">
        <!-- <img src='images/calendar.jpg' alt='Calendar' /> -->
        <div class="date">
          <span class="binds"></span>
          <span class="month">February</span>
          <h1 class="day">1</h1>
        </div>
      </a>
      <div class="details eleven wide column">
        <h4 class="title">Call for Abstracts</h4>
        <h5 class="dt">1st February 2016</h5>
        <div class="location">abstracts@kenyapaediatric.org</div>
      </div>
    </div>
  </div>
</div>


<div class="ui page grid secondary">
  <div class="four wide column">
    <a class="resources link_box" href="resources.php">
      <div class="icon">
        <img src='<?php echo get_stylesheet_directory_uri() ?>/images/resources.png' alt='Resources' />
      </div>
      <div class="description">
        <h3>Learning Resources</h3>
      </div>
    </a>
  </div>
  <div class="four wide column">
    <a class="patient_info link_box">
      <div class="icon">
        <img src='<?php echo get_stylesheet_directory_uri() ?>/images/patient_info.png' alt='Patient Info' />
      </div>
      <div class="description">
        <h3>Parent Resources</h3>
      </div>
    </a>
  </div>
  <div class="four wide column">
    <a class="projects link_box" href="projects.php">
      <div class="icon">
        <img src='<?php echo get_stylesheet_directory_uri() ?>/images/projects.png' alt='Projects' />
      </div>
      <div class="description">
        <h3>Projects</h3>
      </div>
    </a>
  </div>
  <div class="four wide column">
    <a class="membership link_box" href="#">
      <div class="icon">
        <img src='<?php echo get_stylesheet_directory_uri() ?>/images/membership.png' alt='Membership' />
      </div>
      <div class="description">
        <h3>Membership</h3>
      </div>
    </a>
  </div>
</div>

<div class="ui page grid sponsors">
  <div class="row">
    <div class="sixteen wide column">
      <h2>Our Partners &amp; Sponsors</h2>
    </div>
  </div>
</div>

<div class="owl-carousel partners">
  <div class="item"><a href="https://www.novartis.com/" class="sponsor_link novartis"></a></div>
  <div class="item"><a href="http://www.gefoundation.com/" target="_blank" class="sponsor_link ge"></a></div>
  <div class="item"><a href="https://www.gsk.com/" target="_blank" class="sponsor_link gsk"></a></div>
  <div class="item"><a href="http://www.pfizer.com/" target="_blank" class="sponsor_link pfizer"></a></div>
  <div class="item"><a href="http://www.nestle.com/" target="_blank" class="sponsor_link nestle"></a></div>
  <div class="item"><a href="http://en.sanofi.com" target="_blank" class="sponsor_link sanofi"></a></div>
  <div class="item"><a href="http://www.gefoundation.com/" target="_blank" class="sponsor_link gef"></a></div>
  <div class="item"><a href="http://www.cphdev.org/" target="_blank" class="sponsor_link cphd"></a></div>
  <div class="item"><a href="http://www.bayer.com" target="_blank" class="sponsor_link bayer"></a></div>
  <div class="item"><a href="http://www.adcock.co.za/" target="_blank" class="sponsor_link adcock"></a></div>
</div>


<?php include '_footer.php'; ?>