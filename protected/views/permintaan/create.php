<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */

$this->breadcrumbs=array(
	'Permintaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Permintaan', 'url'=>array('index')),
	array('label'=>'Manage Permintaan', 'url'=>array('admin')),
);
?>

<h1>Create Permintaan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>