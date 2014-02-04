<?php
/* @var $this UserController */
/* @var $data User */
?>
<style>
	.labelforkey {
		width:50px;
		text-align:right;
		display:inline-block;
		font-weight:bold;
		color:green;
	}

	.round-block {
		padding: 10px;
		margin-bottom: 30px;
		color: inherit;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
		box-shadow: 0 0px 2px rgba(0,0,0,0.05);
		background-color: #eee;
	}
</style>
<div class="col-xs-12 col-md-6" >
	<div class="round-block">
	<p>
		<span class="labelforkey"><?php echo CHtml::encode($data->getAttributeLabel('id')); ?></span>:
		<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		<br/>
		<span class="labelforkey"><?php echo CHtml::encode($data->getAttributeLabel('username')); ?></span>:
		<?php echo CHtml::encode($data->username); ?>
		<br/>
	</p>
	</div>
</div>