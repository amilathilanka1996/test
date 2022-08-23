<?php
/* @var $this ErrorlistController */
/* @var $data Errorlist */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('errorid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->errorid), array('view', 'id'=>$data->errorid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('errorname')); ?>:</b>
	<?php echo CHtml::encode($data->errorname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('errortype')); ?>:</b>
	<?php echo CHtml::encode($data->errortype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('errordis')); ?>:</b>
	<?php echo CHtml::encode($data->errordis); ?>
	<br />

	


</div>