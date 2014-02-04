<?php
/* @var $this NotifymeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Notifymes',
);

$this->menu=array(
	array('label'=>'Create Notifyme', 'url'=>array('create')),
	array('label'=>'Manage Notifyme', 'url'=>array('admin')),
);
?>

<h1>Notifymes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
