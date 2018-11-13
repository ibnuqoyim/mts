<?php
/* @var $this KontrakController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kontraks',
);

$this->menu=array(
	array('label'=>'Create Kontrak', 'url'=>array('create')),
	array('label'=>'Manage Kontrak', 'url'=>array('admin')),
);
?>

<h1>Kontraks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
