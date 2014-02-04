<?php $this->beginContent('//layouts/main'); ?>
<div class="container-fluid">
  <?php if(isset($this->breadcrumbs)):?>
    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
        'links'=>$this->breadcrumbs,
        'homeLink'=>CHtml::link('Dashboard'),
        'htmlOptions'=>array('class'=>'breadcrumb')
    )); ?>
  <?php endif?>
  <div class="row">
    <div class="col-xs-12 col-md-8">
      <?php echo $content; ?>
	  </div>
    <div class="col-xs-12 col-md-4">
     <?php include_once('tpl_sidebar.php');?>
    </div>
  </div>
</div>
<?php $this->endContent(); ?>