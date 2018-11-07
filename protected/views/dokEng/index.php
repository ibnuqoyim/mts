<?php
/* @var $this DokEngController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dok Engs',
);

$this->menu=array(
	array('label'=>'Create DokEng', 'url'=>array('create')),
	array('label'=>'Manage DokEng', 'url'=>array('admin')),
);
?>

<h1>Dok Engs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
