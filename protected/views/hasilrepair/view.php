<?php
/* @var $this HasilrepairController */
/* @var $model Hasilrepair */

$this->breadcrumbs=array(
	'Hasilrepairs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Hasilrepair', 'url'=>array('index')),
	array('label'=>'Create Hasilrepair', 'url'=>array('create')),
	array('label'=>'Update Hasilrepair', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Hasilrepair', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hasilrepair', 'url'=>array('admin')),
);
?>

<h1>View Hasilrepair #<?php echo $model->id; ?></h1>

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
