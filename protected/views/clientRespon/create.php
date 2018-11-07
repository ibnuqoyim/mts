<?php
/* @var $this ClientResponController */
/* @var $model ClientRespon */

$this->breadcrumbs=array(
	'Client Respons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ClientRespon', 'url'=>array('index')),
	array('label'=>'Manage ClientRespon', 'url'=>array('admin')),
);
?>

<h1>Create ClientRespon</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>