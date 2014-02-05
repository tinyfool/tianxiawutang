<?php
/* @var $this NotifymeController */
/* @var $model Notifyme */

$this->breadcrumbs=array(
	'Notifymes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Notifyme', 'url'=>array('index')),
	array('label'=>'Manage Notifyme', 'url'=>array('admin')),
);
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-3">
		</div>
		<div class="col-xs-12 col-md-6">
			<h1>通知我</h1>
			<?php $this->renderPartial('_form', array('model'=>$model)); ?>
		</div>
		<div class="col-xs-12 col-md-3">
		</div>
	</div>
</div>