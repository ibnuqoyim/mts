<?php
/* @var $this HasilinspeksiWHController */
/* @var $model HasilinspeksiWH */

$this->breadcrumbs=array(
	'Hasilinspeksi Whs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HasilinspeksiWH', 'url'=>array('index')),
	array('label'=>'Create HasilinspeksiWH', 'url'=>array('create')),
	array('label'=>'Update HasilinspeksiWH', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HasilinspeksiWH', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HasilinspeksiWH', 'url'=>array('admin')),
);
?>

<h1>View HasilinspeksiWH #<?php echo $model->id; ?></h1>

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
