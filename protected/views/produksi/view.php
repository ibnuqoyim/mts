<?php
/* @var $this ProduksiController */
/* @var $model Produksi */

$this->breadcrumbs=array(
	'Produksis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Produksi', 'url'=>array('index')),
	array('label'=>'Create Produksi', 'url'=>array('create')),
	array('label'=>'Update Produksi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Produksi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Produksi', 'url'=>array('admin')),
);
?>

<h1>View Produksi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_material',
		'progres',
		'keterangan',
		'tgl_create',
	),
)); ?>
