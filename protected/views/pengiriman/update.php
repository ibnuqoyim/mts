<?php
/* @var $this PengirimanController */
/* @var $model Pengiriman */

$this->breadcrumbs=array(
	'Pengirimen'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pengiriman', 'url'=>array('index')),
	array('label'=>'Create Pengiriman', 'url'=>array('create')),
	array('label'=>'View Pengiriman', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pengiriman', 'url'=>array('admin')),
);
?>

<h1>Update Pengiriman <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>