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

    <div class="contact__container">
      <p class="contact-title">CONTACT &nbsp;<span>US</span></p>

      <div class="contact-info__container">
        <div class="text-info">
          <p class="business-title">Scott Rod Fabrications</p>
          <div class="address__block">
            <img alt="address" src="<?php echo $app->imgPath('address-logo.png');?>">
            <div>
              <p>Scott Rod Fabrications</p>
              <p>5447 Secor Rd</p>
              <p>Toledo, Ohio 43623</p>
              <p>United States</p>
            </div>
          </div><!--
       --><div class="phone-email__block">
            <img alt="email" src="<?php echo $app->imgPath('email-logo.png');?>">
            <div>
             <p>scottrodfab@aol.com</p>
            </div>
          </div><!--
       --><div class="phone-email__block">
            <img alt="phone" src="<?php echo $app->imgPath('phone-logo.png');?>">
            <div>
             <p>(419) 292-1965 </p>
            </div>
          </div><!--
       --><div class="phone-email__block">
            <img alt="clock" src="<?php echo $app->imgPath('clock-logo.png');?>">
            <div>
             <p>Monday - Friday: 9am to 5pm </p>
             <p>Saturday: Closed</p>
             <p>Sunday: Closed</p>
            </div>
          </div>
        </div>
      </div>

      <div class="contact__form">
        <form>
          <input id="name" name="name" placeholder="Name" value=""><!--
       --><input id="company" name="company" placeholder="Company" value=""><!--
       --><input id="email" name="email" placeholder="Email" value=""><!--
       --><input id="phone" name="phone" placeholder="Phone" value="">
          <textarea rows="15" placeholder="Message"></textarea>
        </form>
      </div><!--
   --><div class="contact__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1489.1580989192234!2d-83.62462061838532!3d41.71369528841835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883c7fb076ee3b6f%3A0xb0dbc3087cb5907b!2s5447+Secor+Rd%2C+Toledo%2C+OH+43623!5e0!3m2!1sen!2sus!4v1454382545543" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</body>
</html>
