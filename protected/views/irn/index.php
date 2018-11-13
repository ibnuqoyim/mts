<?php
/* @var $this IrnController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Irns',
);

$this->menu=array(
	array('label'=>'Create Irn', 'url'=>array('create')),
	array('label'=>'Manage Irn', 'url'=>array('admin')),
);
?>

<h1>Irns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
