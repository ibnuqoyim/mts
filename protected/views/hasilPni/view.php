<?php
/* @var $this HasilPniController */
/* @var $model HasilPni */

$this->breadcrumbs=array(
	'Hasil Pnis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HasilPni', 'url'=>array('index')),
	array('label'=>'Create HasilPni', 'url'=>array('create')),
	array('label'=>'Update HasilPni', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HasilPni', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HasilPni', 'url'=>array('admin')),
);
?>

<h1>View HasilPni #<?php echo $model->id; ?></h1>

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
