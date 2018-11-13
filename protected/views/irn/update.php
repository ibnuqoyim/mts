<?php
/* @var $this IrnController */
/* @var $model Irn */

$this->breadcrumbs=array(
	'Irns'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Irn', 'url'=>array('index')),
	array('label'=>'Create Irn', 'url'=>array('create')),
	array('label'=>'View Irn', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Irn', 'url'=>array('admin')),
);
?>

<h1>Update Irn <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>