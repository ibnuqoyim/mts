<?php
/* @var $this LogMaterialController */
/* @var $model LogMaterial */

$this->breadcrumbs=array(
	'Log Materials'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LogMaterial', 'url'=>array('index')),
	array('label'=>'Create LogMaterial', 'url'=>array('create')),
	array('label'=>'View LogMaterial', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LogMaterial', 'url'=>array('admin')),
);
?>

<h1>Update LogMaterial <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>