<?php
/* @var $this LogMaterialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Log Materials',
);

$this->menu=array(
	array('label'=>'Create LogMaterial', 'url'=>array('create')),
	array('label'=>'Manage LogMaterial', 'url'=>array('admin')),
);
?>

<h1>Log Materials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
