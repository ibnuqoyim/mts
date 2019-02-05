<?php
/* @var $this TesttabelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Testtabels',
);

$this->menu=array(
	array('label'=>'Create Testtabel', 'url'=>array('create')),
	array('label'=>'Manage Testtabel', 'url'=>array('admin')),
);
?>

<h1>Testtabels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
