<?php
/* @var $this IrnController */
/* @var $model Irn */

$this->breadcrumbs=array(
	'Irns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Irn', 'url'=>array('index')),
	array('label'=>'Manage Irn', 'url'=>array('admin')),
);
?>

<h1>Create Irn</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>