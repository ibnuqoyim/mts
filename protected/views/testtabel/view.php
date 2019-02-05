<?php
/* @var $this TesttabelController */
/* @var $model Testtabel */

$this->breadcrumbs=array(
	'Testtabels'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Testtabel', 'url'=>array('index')),
	array('label'=>'Create Testtabel', 'url'=>array('create')),
	array('label'=>'Update Testtabel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Testtabel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Testtabel', 'url'=>array('admin')),
);
?>

<h1>View Testtabel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'namatest',
		'tgl_test',
		'password',
	),
)); ?>
