<?php
/* @var $this PniController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pnis',
);

$this->menu=array(
	array('label'=>'Create Pni', 'url'=>array('create')),
	array('label'=>'Manage Pni', 'url'=>array('admin')),
);
?>

<h1>Pnis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
