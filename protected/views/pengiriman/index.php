<?php
/* @var $this PengirimanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengirimen',
);

$this->menu=array(
	array('label'=>'Create Pengiriman', 'url'=>array('create')),
	array('label'=>'Manage Pengiriman', 'url'=>array('admin')),
);
?>

<h1>Pengirimen</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
