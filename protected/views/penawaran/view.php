<?php
/* @var $this PenawaranController */
/* @var $model Penawaran */

$this->breadcrumbs=array(
	'Penawarans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Penawaran', 'url'=>array('index')),
	array('label'=>'Create Penawaran', 'url'=>array('create')),
	array('label'=>'Update Penawaran', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Penawaran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Penawaran', 'url'=>array('admin')),
);
?>

<h1>View Penawaran #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'id_material',
		'file',
		'deskripsi',
	),
)); ?>
