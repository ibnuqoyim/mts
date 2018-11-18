<?php
/* @var $this PniController */
/* @var $model Pni */

$this->breadcrumbs=array(
	'Pnis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pni', 'url'=>array('index')),
	array('label'=>'Create Pni', 'url'=>array('create')),
	array('label'=>'Update Pni', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pni', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pni', 'url'=>array('admin')),
);
?>

<h1>View Pni #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_material',
		'file',
		'desk',
		'tgl_create',
	),
)); ?>
