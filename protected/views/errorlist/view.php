<?php
/* @var $this ErrorlistController */
/* @var $model Errorlist */

$this->breadcrumbs=array(
	'Errorlists'=>array('index'),
	$model->errorid,
);

$this->menu=array(
	array('label'=>'List Errorlist', 'url'=>array('index')),
	array('label'=>'Create Errorlist', 'url'=>array('create')),
	array('label'=>'Update Errorlist', 'url'=>array('update', 'id'=>$model->errorid)),
	array('label'=>'Delete Errorlist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->errorid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Errorlist', 'url'=>array('admin')),
);
?>

<h1>View Errorlist #<?php echo $model->errorid; ?></h1>

<?php

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'errorid',
		'errorname',
		'errortype',
		'errordis',
	),
)); ?>
