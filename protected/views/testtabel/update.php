<?php
/* @var $this TesttabelController */
/* @var $model Testtabel */

$this->breadcrumbs=array(
	'Testtabels'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Testtabel', 'url'=>array('index')),
	array('label'=>'Create Testtabel', 'url'=>array('create')),
	array('label'=>'View Testtabel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Testtabel', 'url'=>array('admin')),
);
?>

<h1>Update Testtabel <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>