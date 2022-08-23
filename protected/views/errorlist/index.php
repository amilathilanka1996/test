<?php
/* @var $this ErrorlistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Errorlists',
);

$this->menu=array(
	array('label'=>'Create Errorlist', 'url'=>array('create')),
	array('label'=>'Manage Errorlist', 'url'=>array('admin')),
);
?>

<h1>Errorlists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
