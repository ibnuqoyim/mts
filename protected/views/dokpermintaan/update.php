<?php
/* @var $this DokpermintaanController */
/* @var $model Dokpermintaan */

$this->breadcrumbs=array(
	'Dokpermintaans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dokpermintaan', 'url'=>array('index')),
	array('label'=>'Create Dokpermintaan', 'url'=>array('create')),
	array('label'=>'View Dokpermintaan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dokpermintaan', 'url'=>array('admin')),
);
?>

<h1>Update Dokpermintaan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>