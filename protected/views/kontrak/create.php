<?php
/* @var $this KontrakController */
/* @var $model Kontrak */

$this->breadcrumbs=array(
	'Kontraks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kontrak', 'url'=>array('index')),
	array('label'=>'Manage Kontrak', 'url'=>array('admin')),
);
?>

<h1>Create Kontrak</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>