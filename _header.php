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
    <link rel="stylesheet" href="stylesheets/style.css">


    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>      
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.js"></script>
    <script type="text/javascript" src="javascript/main.js"></script>
  </head>
  <body class="<?php echo $menu; ?>">
    <header class='ui page grid'>
      <div class="thirteen wide column">
        <a href="/" class="logo">
          <img src="images/logo.png" />
        </a>           
      </div>
      <div class="three wide column">
        <div class="social icons">
          <a><i class="icon facebook small circular"></i></a>
          <a><i class="icon twitter small circular"></i></a>
          <a><i class="icon linkedin small circular"></i></a>
        </div>
      </div>
    </header>
    <!-- <nav class='ui menu'> -->
    <nav>
      <a class="ui item home <?php echo $menu == 'home' ? 'active' : ''  ?>" href="index.php">
        Home
      </a><a class="ui item about <?php echo $menu == 'about' ? 'active' : ''  ?>" href="about.php">
        About KPA
      </a><a class="ui item projects">
        Projects
      </a><a class="ui item large resources <?php echo $menu == 'resources' ? 'active' : ''  ?>" href="resources.php">
        Learning Resources
      </a><a class="ui item news">
        News &amp; Events
      </a><a class="ui item large">
        Membership
      </a><a class="ui item large health">
        Parents Resources
      </a><a class="ui item contact <?php echo $menu == 'contacts' ? 'active' : ''  ?>" href="contacts.php">
        Contacts
      </a>
    </nav>