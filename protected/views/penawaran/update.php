<?php
/* @var $this PenawaranController */
/* @var $model Penawaran */

$this->breadcrumbs=array(
	'Penawarans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Penawaran', 'url'=>array('index')),
	array('label'=>'Create Penawaran', 'url'=>array('create')),
	array('label'=>'View Penawaran', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Penawaran', 'url'=>array('admin')),
);
?>

<h1>Update Penawaran <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>