<?php
/* @var $this ClientResponController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Client Respons',
);

$this->menu=array(
	array('label'=>'Create ClientRespon', 'url'=>array('create')),
	array('label'=>'Manage ClientRespon', 'url'=>array('admin')),
);
?>

<h1>Client Respons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
