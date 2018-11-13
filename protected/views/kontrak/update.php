<?php
/* @var $this KontrakController */
/* @var $model Kontrak */

$this->breadcrumbs=array(
	'Kontraks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kontrak', 'url'=>array('index')),
	array('label'=>'Create Kontrak', 'url'=>array('create')),
	array('label'=>'View Kontrak', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kontrak', 'url'=>array('admin')),
);
?>

<h1>Update Kontrak <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>