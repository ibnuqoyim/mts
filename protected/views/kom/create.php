<?php
/* @var $this KomController */
/* @var $model Kom */

$this->breadcrumbs=array(
	'Koms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kom', 'url'=>array('index')),
	array('label'=>'Manage Kom', 'url'=>array('admin')),
);
?>

<h1>Create Kom</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>