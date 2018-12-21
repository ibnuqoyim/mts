<?php
/* @var $this PengajuanController */
/* @var $model Pengajuan */

$this->breadcrumbs=array(
	'Pengajuans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pengajuan', 'url'=>array('index')),
	array('label'=>'Create Pengajuan', 'url'=>array('create')),
	array('label'=>'Update Pengajuan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pengajuan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pengajuan', 'url'=>array('admin')),
);
?>

<h1>View Pengajuan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_material',
		'id_pengaju',
		'jumlah',
		'disetujui',
		'pic_wh',
		'tgl_setujui',
		'diterima',
		'id_penerima',
		'tgl_diterima',
		'tgl_create',
	),
)); ?>
