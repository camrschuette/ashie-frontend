<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <title>Scott Rod Fab</title>

  <link href="<?php echo $app->cssPath('srf.css');?>" rel="stylesheet">

  <script src="<?php echo $app->jsPath('lib/jquery-1.11.3.min.js');?>" type="text/javascript"></script>
  <script src="<?php echo $app->jsPath('app/srf.js');?>" type="text/javascript"></script>
</head>
<body>
  <div class="container">
    <?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "partials/header" );?>

    <div class="about__container">
      <p class="about-title">ABOUT &nbsp;<span>US</span></p>

      <div class="about-tile__container">
        <div class="tile">

        </div><!--
     --><div class="tile">

        </div><!--
     --><div class="tile">

        </div><!--
     --><div class="tile">

        </div>
      </div>

    </div>
  </div>
</body>
</html>
