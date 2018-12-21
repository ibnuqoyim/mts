<?php
/* @var $this LogMaterialController */
/* @var $model LogMaterial */

$this->breadcrumbs=array(
	'Log Materials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LogMaterial', 'url'=>array('index')),
	array('label'=>'Manage LogMaterial', 'url'=>array('admin')),
);
?>

<h1>Create LogMaterial</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>