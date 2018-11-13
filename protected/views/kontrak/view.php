<?php
/* @var $this KontrakController */
/* @var $model Kontrak */

$this->breadcrumbs=array(
	'Kontraks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Kontrak', 'url'=>array('index')),
	array('label'=>'Create Kontrak', 'url'=>array('create')),
	array('label'=>'Update Kontrak', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kontrak', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kontrak', 'url'=>array('admin')),
);
?>

<h1>View Kontrak #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_material',
		'file',
		'deskripsi',
		'tgl_create',
	),
)); ?>
