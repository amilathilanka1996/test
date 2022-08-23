<?php
/* @var $this ErrorlistController */
/* @var $model Errorlist */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'errorid'); ?>
		<?php echo $form->textField($model,'errorid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'errorname'); ?>
		<?php echo $form->textField($model,'errorname',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'errortype'); ?>
		<?php echo $form->textField($model,'errortype',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'errordis'); ?>
		<?php echo $form->textField($model,'errordis',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->