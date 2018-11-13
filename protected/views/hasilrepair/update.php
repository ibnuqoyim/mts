<?php
/* @var $this HasilrepairController */
/* @var $model Hasilrepair */

$this->breadcrumbs=array(
	'Hasilrepairs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hasilrepair', 'url'=>array('index')),
	array('label'=>'Create Hasilrepair', 'url'=>array('create')),
	array('label'=>'View Hasilrepair', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Hasilrepair', 'url'=>array('admin')),
);
?>

<h1>Update Hasilrepair <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>