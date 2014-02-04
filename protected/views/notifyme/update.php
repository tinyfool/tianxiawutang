<?php
/* @var $this NotifymeController */
/* @var $model Notifyme */

$this->breadcrumbs=array(
	'Notifymes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Notifyme', 'url'=>array('index')),
	array('label'=>'Create Notifyme', 'url'=>array('create')),
	array('label'=>'View Notifyme', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Notifyme', 'url'=>array('admin')),
);
?>

<h1>Update Notifyme <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>