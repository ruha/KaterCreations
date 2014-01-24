<?php
defined('_JEXEC') or die('Restricted Access');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
  
  <head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/stylesheets/screen.css" media="screen, projection" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/stylesheets/print.css" media="print" type="text/css" />
    <!--[if lte IE 8]>
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/lte8.css" type="text/css" />
    <![endif]-->
  </head>

  <body>

    <header>
      <section class="logo">
        <a href="/" title="Home"><img class="img-logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logowhite.png" alt="KaterCreations, an Idea Medley" /></a>
      </section>
      <nav class="top-nav">
        <jdoc:include type="modules" name="header" title="Main Menu" style="none" />
      </nav>
    </header>

    <section class="content">
      <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <jdoc:include type="modules" name="breadcrumbs" style="none" />
      </div>
      <section class="debugging">
        <jdoc:include type="modules" name="debug" />
      </section>

      <section class="main-content">
        <jdoc:include type="message" />
        <jdoc:include type="component" />
      </section>
      <?php if($this->countModules('sidebar')) : ?>
        <aside id="sidebar">
          <jdoc:include type="modules" name="sidebar" style="rounded" />
        </aside>
      <?php endif; ?>

    </section>

    <footer>
      <div class="footer-left">
        Insert twitter here
      </div>
      <section class="bot-contact">
        <h5>Get in contact</h5>
        <nav class="social">
          <a class="fa gplus button-resize" href="https://plus.google.com/104011311734327276030/posts" target="_blank" title="When I'm on G+">&#xf0d4;</a>
          <a class="fa linkedin button-resize" href="http://www.linkedin.com/in/ruthiehassan/" target="_blank" title="My Linkedin Profile">&#xf08c;</a>
          <a class="fa twitter button-resize" href="http://twitter.com/ruthha" target="_blank" title="I do tweet">&#xf099;</a>
          <a class="fa github button-resize" href="https://github.com/ruha" target="_blank" title="Not much but it's there">&#xf092;</a>
        </nav>
        <jdoc:include type="modules" name="footer" style="xhtml" />
      </section>
      <section class="theme-change">
        <h5>View this site in:</h5>
        <a href="/" title="View in something else" class="theme-drupal">O</a>
        <a href="/" title="View in something else" class="theme-joomla">O</a>
        <a href="/" title="View in something else" class="theme-wp">O</a>
      </section>
      <div class="copyright">
        <jdoc:include type="modules" name="copyright" style="xhtml" />
      </div>
    </footer>

  </body>
</html>

