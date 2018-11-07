<?php
/* @var $this PenawaranController */
/* @var $model Penawaran */

$this->breadcrumbs=array(
	'Penawarans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Penawaran', 'url'=>array('index')),
	array('label'=>'Manage Penawaran', 'url'=>array('admin')),
);
?>

<h1>Create Penawaran</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>