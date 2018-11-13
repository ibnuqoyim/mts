<?php
/* @var $this PermintaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Permintaans',
);

$this->menu=array(
	array('label'=>'Create Permintaan', 'url'=>array('create')),
	array('label'=>'Manage Permintaan', 'url'=>array('admin')),
);
?>

<h1>Permintaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
