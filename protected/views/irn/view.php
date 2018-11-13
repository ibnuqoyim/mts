<?php
/* @var $this IrnController */
/* @var $model Irn */

$this->breadcrumbs=array(
	'Irns'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Irn', 'url'=>array('index')),
	array('label'=>'Create Irn', 'url'=>array('create')),
	array('label'=>'Update Irn', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Irn', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Irn', 'url'=>array('admin')),
);
?>

<h1>View Irn #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_material',
		'irn',
		'tgl_create',
	),
)); ?>
