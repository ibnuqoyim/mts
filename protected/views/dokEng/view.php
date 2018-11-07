<?php
/* @var $this DokEngController */
/* @var $model DokEng */

$this->breadcrumbs=array(
	'Dok Engs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DokEng', 'url'=>array('index')),
	array('label'=>'Create DokEng', 'url'=>array('create')),
	array('label'=>'Update DokEng', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DokEng', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DokEng', 'url'=>array('admin')),
);
?>

<h1>View DokEng #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'material',
		'file',
		'deskripsi',
	),
)); ?>
