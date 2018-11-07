<?php
/* @var $this ClientResponController */
/* @var $model ClientRespon */

$this->breadcrumbs=array(
	'Client Respons'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ClientRespon', 'url'=>array('index')),
	array('label'=>'Create ClientRespon', 'url'=>array('create')),
	array('label'=>'Update ClientRespon', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ClientRespon', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ClientRespon', 'url'=>array('admin')),
);
?>

<h1>View ClientRespon #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'client_id',
		'material_id',
		'isi',
		'file_respon',
	),
)); ?>
