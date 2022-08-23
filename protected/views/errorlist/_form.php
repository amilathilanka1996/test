<?php
/* @var $this ErrorlistController */
/* @var $model Errorlist */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'errorlist-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Error Name'); ?>
		<?php echo $form->textField($model,'errorname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'errorname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Error Type'); ?>
		<?php echo $form->dropDownList($model,'errortype',array('error type1'=>'type1','error type2'=>'type2','error type3'=>'type3'),array('empty'=>'Select Error Type'),array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'errortype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Error Discripction'); ?>
		<?php echo $form->textField($model,'errordis',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'errordis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->