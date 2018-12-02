<?php
/* @var $this ProduksiController */
/* @var $model Produksi */

$this->breadcrumbs=array(
	'Produksis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Produksi', 'url'=>array('index')),
	array('label'=>'Create Produksi', 'url'=>array('create')),
	array('label'=>'View Produksi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Produksi', 'url'=>array('admin')),
);
?>

<h1>Update Produksi <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>