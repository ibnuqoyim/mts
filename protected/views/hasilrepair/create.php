<?php
/* @var $this HasilrepairController */
/* @var $model Hasilrepair */

$this->breadcrumbs=array(
	'Hasilrepairs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hasilrepair', 'url'=>array('index')),
	array('label'=>'Manage Hasilrepair', 'url'=>array('admin')),
);
?>

<h1>Create Hasilrepair</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>