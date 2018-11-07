<?php
/* @var $this DokEngController */
/* @var $model DokEng */

$this->breadcrumbs=array(
	'Dok Engs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DokEng', 'url'=>array('index')),
	array('label'=>'Create DokEng', 'url'=>array('create')),
	array('label'=>'View DokEng', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DokEng', 'url'=>array('admin')),
);
?>

<h1>Update DokEng <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>