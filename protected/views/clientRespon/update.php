<?php
/* @var $this ClientResponController */
/* @var $model ClientRespon */

$this->breadcrumbs=array(
	'Client Respons'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ClientRespon', 'url'=>array('index')),
	array('label'=>'Create ClientRespon', 'url'=>array('create')),
	array('label'=>'View ClientRespon', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ClientRespon', 'url'=>array('admin')),
);
?>

<h1>Update ClientRespon <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>