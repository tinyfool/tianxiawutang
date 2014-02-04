<?php
/* @var $this NotifymeController */
/* @var $model Notifyme */

$this->breadcrumbs=array(
	'Notifymes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Notifyme', 'url'=>array('index')),
	array('label'=>'Create Notifyme', 'url'=>array('create')),
	array('label'=>'Update Notifyme', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Notifyme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Notifyme', 'url'=>array('admin')),
);
?>

<h1>View Notifyme #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'status',
		'featurerequired',
		'age',
	),
)); ?>
