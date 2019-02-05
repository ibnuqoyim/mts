<?php
/* @var $this DokpermintaanController */
/* @var $model Dokpermintaan */

$this->breadcrumbs=array(
	'Dokpermintaans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dokpermintaan', 'url'=>array('index')),
	array('label'=>'Manage Dokpermintaan', 'url'=>array('admin')),
);
?>

<h1>Create Dokpermintaan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>