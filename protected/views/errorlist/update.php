<?php
/* @var $this ErrorlistController */
/* @var $model Errorlist */

$this->breadcrumbs=array(
	'Errorlists'=>array('index'),
	$model->errorid=>array('view','id'=>$model->errorid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Errorlist', 'url'=>array('index')),
	array('label'=>'Create Errorlist', 'url'=>array('create')),
	array('label'=>'View Errorlist', 'url'=>array('view', 'id'=>$model->errorid)),
	array('label'=>'Manage Errorlist', 'url'=>array('admin')),
);
?>

<h1>Update Errorlist <?php echo $model->errorid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>