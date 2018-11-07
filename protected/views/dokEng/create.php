<?php
/* @var $this DokEngController */
/* @var $model DokEng */

$this->breadcrumbs=array(
	'Dok Engs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DokEng', 'url'=>array('index')),
	array('label'=>'Manage DokEng', 'url'=>array('admin')),
);
?>

<h1>Create DokEng</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>