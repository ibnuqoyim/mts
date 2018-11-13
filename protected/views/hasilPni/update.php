<?php
/* @var $this HasilPniController */
/* @var $model HasilPni */

$this->breadcrumbs=array(
	'Hasil Pnis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HasilPni', 'url'=>array('index')),
	array('label'=>'Create HasilPni', 'url'=>array('create')),
	array('label'=>'View HasilPni', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HasilPni', 'url'=>array('admin')),
);
?>

<h1>Update HasilPni <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>