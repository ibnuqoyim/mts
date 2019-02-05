<?php
/* @var $this DokpermintaanController */
/* @var $model Dokpermintaan */

$this->breadcrumbs=array(
	'Dokpermintaans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dokpermintaan', 'url'=>array('index')),
	array('label'=>'Create Dokpermintaan', 'url'=>array('create')),
	array('label'=>'Update Dokpermintaan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dokpermintaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dokpermintaan', 'url'=>array('admin')),
);
?>

<h1>View Dokpermintaan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'file_dokpermintaan',
		'id_material',
		'id_vendor',
	),
)); ?>
