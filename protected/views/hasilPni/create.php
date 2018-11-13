<?php
/* @var $this HasilPniController */
/* @var $model HasilPni */

$this->breadcrumbs=array(
	'Hasil Pnis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HasilPni', 'url'=>array('index')),
	array('label'=>'Manage HasilPni', 'url'=>array('admin')),
);
?>

<h1>Create HasilPni</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>