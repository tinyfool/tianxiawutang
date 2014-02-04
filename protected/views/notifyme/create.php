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

<h1>Create Notifyme</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>