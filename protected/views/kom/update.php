<?php
/* @var $this KomController */
/* @var $model Kom */

$this->breadcrumbs=array(
	'Koms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kom', 'url'=>array('index')),
	array('label'=>'Create Kom', 'url'=>array('create')),
	array('label'=>'View Kom', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Kom', 'url'=>array('admin')),
);
?>

<h1>Update Kom <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>