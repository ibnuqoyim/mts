<?php
/* @var $this LogMaterialController */
/* @var $model LogMaterial */

$this->breadcrumbs=array(
	'Log Materials'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LogMaterial', 'url'=>array('index')),
	array('label'=>'Create LogMaterial', 'url'=>array('create')),
	array('label'=>'Update LogMaterial', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LogMaterial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LogMaterial', 'url'=>array('admin')),
);
?>

<h1>View LogMaterial #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tgl_dokeng',
		'nama',
		'id_material',
	),
)); ?>
