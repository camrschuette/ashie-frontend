<?php if(!class_exists('raintpl')){exit;}?><script type="text/javascript" src="<?php echo $app->jsPath('app/project.js');?>"></script>

<div class="project__container">
  <?php $counter1=-1; if( isset($pictures) && is_array($pictures) && sizeof($pictures) ) foreach( $pictures as $key1 => $value1 ){ $counter1++; ?>
  <div class="col-xs-12 picture__container">
    <img class="img-responsive" alt="picture" src="/public/images/<?php echo $directory;?>/<?php echo $value1;?>">
    <p class="back--text">Back To Top</p>
  </div>
  <?php } ?>
</div>
