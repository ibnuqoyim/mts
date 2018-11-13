<?php
/* @var $this KomController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Koms',
);

$this->menu=array(
	array('label'=>'Create Kom', 'url'=>array('create')),
	array('label'=>'Manage Kom', 'url'=>array('admin')),
);
?>

<h1>Koms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
