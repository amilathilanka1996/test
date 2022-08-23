<?php
/* @var $this ErrorlistController */
/* @var $model Errorlist */

// $this->breadcrumbs=array(
// 	'Errorlists'=>array('index'),
// 	'Manage',
// );

// $this->menu=array(
// 	array('label'=>'List Errorlist', 'url'=>array('index')),
// 	array('label'=>'Create Errorlist', 'url'=>array('create')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#errorlist-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1> Error Lists</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php

$model = new Errorlist;
if(Yii::app()->user->name == 'admin'){
	 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'errorlist-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	
	'columns'=>array(
		'errorid',
		'errorname',
		'errortype',
		'errordis',
		'username',

		array(
			'class'=>'CButtonColumn',
		),
	),
));
}else{
	$model->username = Yii::app()->user->name;

 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'errorlist-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	
	'columns'=>array(
		'errorid',
		'errorname',
		'errortype',
		'errordis',
		

		array(
			'class'=>'CButtonColumn',
		),
	),
));

}
 ?>
