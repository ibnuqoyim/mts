<?php
/* @var $this PniController */
/* @var $model Pni */

$this->breadcrumbs=array(
	'Pnis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pni', 'url'=>array('index')),
	array('label'=>'Create Pni', 'url'=>array('create')),
	array('label'=>'View Pni', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pni', 'url'=>array('admin')),
);
?>

<h1>Update Pni <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>