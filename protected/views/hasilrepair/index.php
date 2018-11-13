<?php
/* @var $this HasilrepairController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hasilrepairs',
);

$this->menu=array(
	array('label'=>'Create Hasilrepair', 'url'=>array('create')),
	array('label'=>'Manage Hasilrepair', 'url'=>array('admin')),
);
?>

<h1>Hasilrepairs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
