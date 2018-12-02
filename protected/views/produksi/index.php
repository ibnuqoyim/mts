<?php
/* @var $this ProduksiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Produksis',
);

$this->menu=array(
	array('label'=>'Create Produksi', 'url'=>array('create')),
	array('label'=>'Manage Produksi', 'url'=>array('admin')),
);
?>

<h1>Produksis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
