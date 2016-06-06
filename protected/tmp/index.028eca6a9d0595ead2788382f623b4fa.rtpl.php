<?php if(!class_exists('raintpl')){exit;}?><div class="index__container">
  <?php $counter1=-1; if( isset($projects) && is_array($projects) && sizeof($projects) ) foreach( $projects as $key1 => $value1 ){ $counter1++; ?>
    <div class='col-xs-12 col-sm-5 col-md-5 <?php if( $counter1%2==0 ){ ?>col-sm-offset-1<?php } ?>'>
      <div class="category__tile"
           style="background-image: url(/public/images/<?php echo $value1->title;?>/<?php echo $value1->icon;?>)"
           onclick="location.href='/project/<?php echo $value1->title;?>'"
      ></div>
    </div>
  <?php } ?>
</div>
