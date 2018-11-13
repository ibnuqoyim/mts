<?php
/* @var $this HasilinspeksiWHController */
/* @var $model HasilinspeksiWH */

$this->breadcrumbs=array(
	'Hasilinspeksi Whs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List HasilinspeksiWH', 'url'=>array('index')),
	array('label'=>'Create HasilinspeksiWH', 'url'=>array('create')),
	array('label'=>'View HasilinspeksiWH', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage HasilinspeksiWH', 'url'=>array('admin')),
);
?>

<h1>Update HasilinspeksiWH <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>