<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="l-submain">
	<div class="l-submain-h g-html i-cf">
      <div class="l-content">
        <div class="l-content-h">
            <?php echo $content; ?>
        </div>
	    </div>
  
      <div class="l-sidebar at_right">
        <div class="l-sidebar-h">
		        <div class="widget">
				        <h4>Side Navigation</h4>
            </div>
          </div>
        </div>
  </div>
</div>
<?php $this->endContent(); ?>