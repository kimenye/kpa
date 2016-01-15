<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?></title>
    <meta name="description" content="Kenya Paediatric Association - Afya ya watoto wetu">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,700" media="screen" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/stylesheets/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/stylesheets/owl.carousel.css">


    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>      
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/javascript/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/javascript/main.js"></script>
  </head>
  <body class="<?php echo $menu; ?>">
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
          <a class="ui item">
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

   <!--  <div class="nav">
      <ul>
        <li>
          <a class="ui item home <?php echo $menu == 'home' ? 'active' : ''  ?>" href="index.php">
            Home
          </a>
        </li>
        <li>About</li>
        <li>
          Portfolio
          <ul>
            <li>Web Design</li>
            <li>Web Development</li>
            <li>Illustrations</li>
          </ul>
        </li>
        <li>Blog</li>
        <li>Contact</li>
      </ul>
    </div> -->