<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="robots" content="index, follow">
<!-- <meta name="keywords" content="<?php echo $Site["keywords"];?>">
<meta name="title" content="<?php echo $Site["title"];?> - <?php echo $Title;?>">
<meta name="description" content="<?php echo $Site["description"];?>"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="format-detection" content="telephone=no">

<!-- <title><?php echo $Site["title"];?> - <?php echo $Title;?></title> -->

<!-- JQUERY -->
<script type="text/javascript" src="<?php echo $app->jsPath('libs/jquery/jquery-2.2.3.min.js');?>"></script>
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="<?php echo $app->cssPath('bootstrap.min.css');?>">
<script type="text/javascript" src="<?php echo $app->jsPath('libs/bootstrap/bootstrap.min.js');?>"></script>
<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo $app->cssPath('ashie.css');?>">

</head>

<body>
	<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "partials/header" );?>

	<div class="content">
		<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "".$include."" );?>
	</div>

	<?php $tpl = new RainTPL;$tpl->assign( $this->var );$tpl->draw( "partials/footer" );?>
</body>
</html>
