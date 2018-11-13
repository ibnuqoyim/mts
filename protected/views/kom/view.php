<?php
/* @var $this KomController */
/* @var $model Kom */

$this->breadcrumbs=array(
	'Koms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kom', 'url'=>array('index')),
	array('label'=>'Create Kom', 'url'=>array('create')),
	array('label'=>'Update Kom', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kom', 'url'=>array('admin')),
);
?>

<h1>View Kom #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_material',
		'tanggal',
		'tempat',
		'tgl_create',
		'keterangan',
	),
)); ?>
