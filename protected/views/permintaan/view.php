<?php
/* @var $this PermintaanController */
/* @var $model Permintaan */

$this->breadcrumbs=array(
	'Permintaans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Permintaan', 'url'=>array('index')),
	array('label'=>'Create Permintaan', 'url'=>array('create')),
	array('label'=>'Update Permintaan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Permintaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Permintaan', 'url'=>array('admin')),
);
?>

<h1>View Permintaan #<?php echo $model->id; ?></h1>

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
