<?php
/* @var $this NotifymeController */
/* @var $model Notifyme */
/* @var $form CActiveForm */
?>
<style>
	.labelforkey {
		width:80px;
		text-align:right;
		display:inline-block;
		font-weight:bold;
		color:green;
	}
	.form_row {

		margin-top: 7px;
		margin-bottom: 7px;
	}
	.errorMessage {

		color: red;
		font-style: italic;
		text-align: center;
	}
	.errorSummary {
		color: blue;
	}
	.page_input {
		width: 300px;
	}
</style>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'notifyme-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<!-- 	<p class="note">Fields with <span class="required">*</span> are required.</p>
 -->
	<p>*全部为必填项。</p>
	<?php echo $form->errorSummary($model); ?>
	<div class="form_row">
		<span class="labelforkey"><?php echo $form->label($model,'age'); ?></span>
		<?php echo $form->textField($model,'age',array('class' => 'page_input')); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="form_row">
		<span class="labelforkey"><?php echo $form->label($model,'email'); ?></span>
		<?php echo $form->textField(
							$model,
							'email',
							array(
								'size'=>60,
								'maxlength'=>255,
								'class' => 'page_input')
							); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="form_row">
		<span class="labelforkey"><?php echo $form->label($model,'status'); ?></span>
		<?php echo CHtml::dropDownList(
					'Notifyme[status]',
					'',
					array(
						'0' => '毫无关系',
						'1' => '我是一型糖尿病人', 
						'2' => '我是二型糖尿病人',
						'3' => '我是糖尿病人家属',
						'4' => '我担心自己有糖尿病',
						));
		?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="form_row">
		<span class="labelforkey"><?php echo $form->label($model,'featurerequired'); ?></span>
		<?php echo $form->textArea(
							$model,
							'featurerequired',
							array(
								'rows'=>6,
								'cols'=>50,
								'class' => 'page_input')); ?>
		<p>
			你觉得应该有什么功能，欢迎留言，也欢迎提出各种意见和建议。
		</p>
		<?php echo $form->error($model,'featurerequired'); ?>
	</div>

    <div class="form_row text-center">
    	<?php echo 
    		CHtml::submitButton(
				$model->isNewRecord ? '请通知' : '保存',
				array('class' => 'btn btn-primary')
			); 
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->