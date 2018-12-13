<?php
/* @var $this PniController */
/* @var $model Pni */

$this->breadcrumbs=array(
	'Pnis'=>array('index'),
	$model->id_material,
);

$this->menu=array(
	array('label'=>'List Pni', 'url'=>array('index')),
	array('label'=>'Create Pni', 'url'=>array('create')),
	array('label'=>'Update Pni', 'url'=>array('update', 'id'=>$model->id_material)),
	array('label'=>'Delete Pni', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_material),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pni', 'url'=>array('admin')),
);
?>

<h1>View Pni #<?php echo $model->id_material; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'id_material',
		'file',
		'desk',
		'tgl_create',
	),
)); ?>
