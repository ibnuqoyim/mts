<?php
/* @var $this DokpermintaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dokpermintaans',
);

$this->menu=array(
	array('label'=>'Create Dokpermintaan', 'url'=>array('create')),
	array('label'=>'Manage Dokpermintaan', 'url'=>array('admin')),
);
?>

<h1>Dokpermintaans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
