<?php
/* @var $this HasilinspeksiWHController */
/* @var $model HasilinspeksiWH */

$this->breadcrumbs=array(
	'Hasilinspeksi Whs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HasilinspeksiWH', 'url'=>array('index')),
	array('label'=>'Manage HasilinspeksiWH', 'url'=>array('admin')),
);
?>

<h1>Create HasilinspeksiWH</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>