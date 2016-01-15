<header class='ui page grid'>
  <div class="thirteen wide column">
    <a href="<?php echo home_url( '/' ); ?>" class="logo">
      <img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo_mid.png" />
    </a>           
  </div>
  <div class="three wide column">
    <div class="social icons">
      <a href="https://www.facebook.com/Kenya-Paediatrics-Association-KPA-1725952787634408/" target="_blank"><i class="icon facebook circular"></i></a>
      <a><i class="icon twitter circular"></i></a>
      <a><i class="icon linkedin circular"></i></a>
    </div>
  </div>
</header>
<!-- <nav class='ui menu'> -->
<nav>
  <ul>
    <li>
      <a class="ui item home <?php echo $menu == 'home' ? 'active' : ''  ?>" href="<?php echo home_url( '/' ); ?>">
        Home
      </a>
    </li><li>
      <a class="ui item about <?php echo $menu == 'about' ? 'active' : ''  ?>" href="about.php">
        About KPA
      </a>
    </li><li>
      <a class="ui item projects <?php echo $menu == 'projects' ? 'active' : ''  ?>" href="projects.php">
        Projects
      </a>
      <ul class="dropdown">
        <li><a href="projects.php">Keprecon</a></li>
        <li><a href="projects.php">KPA</a></li>
      </ul>
    </li><li class="large">
      <a class="ui item resources <?php echo $menu == 'resources' ? 'active' : ''  ?>" href="resources.php">
        Learning Resources
      </a>
    </li><li>
      <a class="ui item news <?php echo $menu == 'events' ? 'active' : ''  ?>" href="events.php">
        News &amp; Events
      </a>
    </li><li class="large">
      <a class="ui item membership <?php echo $menu == 'membership' ? 'active' : ''  ?>" href="membership">
        Membership
      </a>
    </li><li class="large">
      <a class="ui item health">
        Parents Resources
      </a>
    </li><li>
      <a class="ui item contact <?php echo $menu == 'contacts' ? 'active' : ''  ?>" href="contact-us">
        Contacts
      </a>
    </li>
  </ul>      
</nav>