<?php
defined('_JEXEC') or die('Restricted Access');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >

  <head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/default.css" type="text/css" />
    <!--[if lte IE 8]>
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/lte8.css" type="text/css" />
    <![endif]-->
  </head>

  <body>
    <div id="container">

      <div id="header">
        <div class="header-inner">
          <a href="/"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/logowhite.png" alt="KaterCreations. Click for home. " width="283" height="122" /></a>   
          <jdoc:include type="modules" name="header" style="xhtml" />
        </div>
      </div>

      <div id="wrapper">

        <jdoc:include type="modules" name="breadcrumbs" style="xhtml" />

        <?php if($this->countModules('right')) : ?>
          <div id="mainwithright">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
          </div>
          <div id="right">
            <jdoc:include type="modules" name="right" style="rounded" />
          </div>
        <?php elseif($this->countModules('left')) : ?>
          <div id="mainwithleft">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
          </div>
          <div id="left">
            <jdoc:include type="modules" name="left" style="rounded" />
          </div>
        <?php else : ?>
          <div id="main">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
          </div>
        <?php endif; ?>

        <br class="clear" />

      </div>

      <div id="footer">
        <jdoc:include type="modules" name="footer" style="xhtml" />
      </div>

    </div>
  </body>
</html>

