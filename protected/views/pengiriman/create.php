<?php
/* @var $this PengirimanController */
/* @var $model Pengiriman */

$this->breadcrumbs=array(
	'Pengirimen'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pengiriman', 'url'=>array('index')),
	array('label'=>'Manage Pengiriman', 'url'=>array('admin')),
);
?>

<h1>Create Pengiriman</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>